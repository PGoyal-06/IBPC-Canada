<?php
/**
 * IBPC Canada — Reset Password API Handler
 */
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die('Method Not Allowed');
}

$token = $_POST['token'] ?? '';
$newPassword = $_POST['new_password'] ?? '';
$confirmPassword = $_POST['confirm_password'] ?? '';

// Basic validation
if (!$token || strlen($newPassword) < 8 || $newPassword !== $confirmPassword) {
    die('Invalid request. Please ensure passwords match and are at least 8 characters long.');
}

try {
    $tokenHash = hash('sha256', $token);

    // Find valid token
    $stmt = $pdo->prepare("SELECT member_id FROM password_resets WHERE token_hash = ? AND used_at IS NULL AND expires_at > NOW() LIMIT 1");
    $stmt->execute([$tokenHash]);
    $reset = $stmt->fetch();

    if (!$reset) {
        die('This reset link is invalid or has expired.');
    }

    $memberId = $reset['member_id'];

    // Update password
    $passwordHash = password_hash($newPassword, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("UPDATE members SET password_hash = ?, updated_at = NOW() WHERE id = ?");
    $stmt->execute([$passwordHash, $memberId]);

    // Mark current and all other active tokens for this member as used
    $stmt = $pdo->prepare("UPDATE password_resets SET used_at = NOW() WHERE member_id = ? AND used_at IS NULL");
    $stmt->execute([$memberId]);

    // Ensure the user is logged out so they MUST sign in with the new password
    unset($_SESSION['member_id']);
    unset($_SESSION['member_email']);
    unset($_SESSION['member_name']);
    unset($_SESSION['member_status']);

    // Success redirect
    $_SESSION['login_message'] = 'Your password has been reset. Please sign in.';
    redirect('/login');

} catch (Exception $e) {
    error_log("Reset Password API Error: " . $e->getMessage());
    die('A server error occurred. Please try again later.');
}
