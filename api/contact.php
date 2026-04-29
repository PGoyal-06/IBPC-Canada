<?php
/**
 * IBPC Canada — Contact Form Handler
 * Accepts POST, validates, saves to DB, sends email notification.
 * Returns JSON {success: bool, message: string}
 */
header('Content-Type: application/json');
header('X-Content-Type-Options: nosniff');

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// Collect and sanitize inputs
$fullName = trim($_POST['full_name'] ?? '');
$company  = trim($_POST['company']   ?? '');
$email    = trim($_POST['email']     ?? '');
$phone    = trim($_POST['phone']     ?? '');
$message  = trim($_POST['message']   ?? '');

// Server-side validation
$errors = [];
if (strlen($fullName) < 2)           $errors[] = 'Full name is required.';
if (empty($company))                 $errors[] = 'Company is required.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'A valid email is required.';
if (empty($phone))                   $errors[] = 'Phone number is required.';

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// reCAPTCHA check (skip if key is still the placeholder)
if (RECAPTCHA_SECRET_KEY !== 'YOUR_RECAPTCHA_SECRET_KEY') {
    $recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';
    if (!verifyRecaptcha($recaptchaResponse)) {
        http_response_code(422);
        echo json_encode(['success' => false, 'message' => 'reCAPTCHA verification failed. Please try again.']);
        exit;
    }
}

// Save to DB (graceful fallback if DB is not yet configured)
try {
    $pdo = new PDO(
        'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET,
        DB_USER,
        DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false]
    );
    $stmt = $pdo->prepare(
        'INSERT INTO contact_submissions (full_name, company, email, phone, message)
         VALUES (:full_name, :company, :email, :phone, :message)'
    );
    $stmt->execute([
        ':full_name' => $fullName,
        ':company'   => $company,
        ':email'     => $email,
        ':phone'     => $phone,
        ':message'   => $message,
    ]);
} catch (Exception $e) {
    error_log('Contact form DB error: ' . $e->getMessage());
    // Continue — still attempt email notification
}

// Email notification to admin
$subject = 'New Contact Inquiry — IBPC Canada';
$body    = "New inquiry from the IBPC Canada website:\n\n"
         . "Name:    $fullName\n"
         . "Company: $company\n"
         . "Email:   $email\n"
         . "Phone:   $phone\n\n"
         . "Message:\n$message\n";

$headers  = "From: " . SMTP_FROM_NAME . " <" . SMTP_FROM . ">\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// mail() works on Hostinger; swap for PHPMailer when SMTP creds are live
@mail(ADMIN_EMAIL, $subject, $body, $headers);

echo json_encode(['success' => true, 'message' => 'Thank you! Your message has been sent. We will be in touch shortly.']);
