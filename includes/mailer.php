<?php
/**
 * IBPC Canada — Mailer Utility
 * Uses PHPMailer to send system emails.
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config.php';

/**
 * Send a password reset email to a member.
 * 
 * @param string $toEmail The recipient email address.
 * @param string $toName The recipient name.
 * @param string $resetUrl The unique reset link.
 * @return bool True if sent successfully, false otherwise.
 */
function sendPasswordResetEmail(string $toEmail, string $toName, string $resetUrl): bool {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USER;
        $mail->Password   = SMTP_PASS;
        if ((int) SMTP_PORT === 465) {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;
        } else {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;
        }

        // Recipients
        $mail->setFrom(SMTP_FROM, SMTP_FROM_NAME);
        $mail->addAddress($toEmail, $toName);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Reset your IBPC Canada password';
        
        $body = "
            <p>We received a request to reset your IBPC Canada password.</p>
            <p>Click the link below to reset your password:</p>
            <p><a href=\"{$resetUrl}\">{$resetUrl}</a></p>
            <p>This link will expire in 30 minutes.</p>
            <p>If you did not request this, you can ignore this email.</p>
        ";
        
        $mail->Body    = $body;
        $mail->AltBody = strip_tags($body);

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Mailer Error: " . $mail->ErrorInfo);
        return false;
    }
}
