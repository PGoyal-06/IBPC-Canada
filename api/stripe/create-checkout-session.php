<?php
/**
 * IBPC Canada — Create Stripe Checkout Session
 */
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../../includes/functions.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isLoggedIn()) {
    http_response_code(401);
    die('Unauthorized');
}

$memberId = $_SESSION['member_id'];
$tierId   = $_POST['tier'] ?? '';
$membershipTiers = include __DIR__ . '/../../config/membership.php';

if (!$tierId || !isset($membershipTiers[$tierId])) {
    die('Invalid membership tier selected.');
}

$tier = $membershipTiers[$tierId];

// If amount is 0, handle it directly without Stripe
if ($tier['amount_cents'] === 0) {
    require_once __DIR__ . '/../../includes/db.php';
    try {
        $pdo->beginTransaction();
        
        // 1. Update member status
        $stmt = $pdo->prepare("UPDATE members SET membership_status = 'paid_pending_approval', membership_type = ? WHERE id = ?");
        $stmt->execute([$tierId, $memberId]);

        // 2. Log payment
        $stmt = $pdo->prepare("INSERT INTO membership_payments (member_id, membership_type, amount_cents, stripe_session_id, payment_status) VALUES (?, ?, 0, 'free_tier', 'paid')");
        $stmt->execute([$memberId, $tierId]);

        $pdo->commit();

        // 3. Update session status so portal works immediately
        $_SESSION['member_status'] = 'paid_pending_approval';

        redirect('/member-register/success');
    } catch (PDOException $e) {
        if ($pdo->inTransaction()) $pdo->rollBack();
        error_log("Free Tier DB Error: " . $e->getMessage());
        die("A server error occurred. Please try again later.");
    }
}

\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

try {
    $session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
                'currency' => $tier['currency'],
                'product_data' => [
                    'name' => $tier['label'],
                    'description' => $tier['description'],
                ],
                'unit_amount' => $tier['amount_cents'],
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => SITE_URL . '/member-register/success?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => SITE_URL . '/member-register/cancel',
        'customer_email' => $_SESSION['member_email'],
        'client_reference_id' => $memberId,
        'metadata' => [
            'member_id' => $memberId,
            'membership_type' => $tierId
        ]
    ]);

    header("HTTP/1.1 303 See Other");
    header("Location: " . $session->url);
} catch (Exception $e) {
    error_log("Stripe Session Error: " . $e->getMessage());
    die("Error connecting to Stripe. Please try again later.");
}
