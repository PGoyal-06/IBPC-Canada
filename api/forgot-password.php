<?php
/**
 * IBPC Canada — Forgot Password API Handler
 */
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/mailer.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die('Method Not Allowed');
}

$email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);

// Always show the same success message to prevent user enumeration
$successUrl = '/forgot-password?sent=1';

if ($email) {
    try {
        // Look up member
        $stmt = $pdo->prepare("SELECT id, name FROM members WHERE email = ? LIMIT 1");
        $stmt->execute([$email]);
        $member = $stmt->fetch();

        if ($member) {
            // Generate token
            $token = bin2hex(random_bytes(32));
            $tokenHash = hash('sha256', $token);
            $expiresAt = date('Y-m-d H:i:s', strtotime('+30 minutes'));

            // Store token hash
            $stmt = $pdo->prepare("INSERT INTO password_resets (member_id, token_hash, expires_at) VALUES (?, ?, ?)");
            $stmt->execute([$member['id'], $tokenHash, $expiresAt]);

            // Send email
            $resetUrl = APP_URL . '/reset-password?token=' . urlencode($token);
            sendPasswordResetEmail($email, $member['name'] ?? 'Member', $resetUrl);
        }
    } catch (Exception $e) {
        error_log("Forgot Password API Error: " . $e->getMessage());
        // Still redirect to success to not reveal errors or existence
    }
}

redirect($successUrl);
