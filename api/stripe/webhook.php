<?php
/**
 * IBPC Canada — Stripe Webhook Handler
 */
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../../includes/db.php';

\Stripe\Stripe::setApiKey(STRIPE_SECRET_KEY);

$payload = @file_get_contents('php://input');
$sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'] ?? '';
$event = null;

try {
    $event = \Stripe\Webhook::constructEvent(
        $payload, $sig_header, STRIPE_WEBHOOK_SECRET
    );
} catch(\UnexpectedValueException $e) {
    // Invalid payload
    http_response_code(400);
    exit;
} catch(\Stripe\Exception\SignatureVerificationException $e) {
    // Invalid signature
    http_response_code(400);
    exit;
}

// Handle the event
if ($event->type === 'checkout.session.completed') {
    $session = $event->data->object;

    $memberId = $session->metadata->member_id ?? null;
    $membershipType = $session->metadata->membership_type ?? null;
    $amountCents = $session->amount_total;
    $stripeSessionId = $session->id;
    $paymentIntentId = $session->payment_intent;
    $stripeCustomerId = $session->customer;

    if ($memberId) {
        try {
            $pdo->beginTransaction();

            // 1. Update member status
            $stmt = $pdo->prepare("UPDATE members SET 
                membership_status = 'paid_pending_approval', 
                membership_type = ?, 
                stripe_customer_id = ? 
                WHERE id = ?");
            $stmt->execute([$membershipType, $stripeCustomerId, $memberId]);

            // 2. Log payment
            $stmt = $pdo->prepare("INSERT INTO membership_payments 
                (member_id, membership_type, amount_cents, stripe_session_id, stripe_payment_intent_id, payment_status) 
                VALUES (?, ?, ?, ?, ?, 'paid')");
            $stmt->execute([$memberId, $membershipType, $amountCents, $stripeSessionId, $paymentIntentId]);

            $pdo->commit();
            
            // Note: In a real app, you'd trigger an email to the admin here.
            
        } catch (PDOException $e) {
            $pdo->rollBack();
            error_log("Webhook DB Error: " . $e->getMessage());
            http_response_code(500);
            exit;
        }
    }
}

http_response_code(200);
