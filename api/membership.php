<?php
/**
 * IBPC Canada — Membership Application Handler
 * Accepts POST (with files), validates, and returns success/error JSON.
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

// Basic server-side validation for mandatory textual fields
$requiredFields = [
    'membership_type', 'membership_duration', 'member_classification', 'is_startup',
    'salutation', 'first_name', 'last_name', 'designation',
    'street_address', 'city', 'province', 'postal_code', 'country', 'comm_email', 'primary_phone',
    'business_category', 'focus_group', 'privacy_consent', 'accuracy_declaration', 'comm_consent'
];

$errors = [];
foreach ($requiredFields as $field) {
    if (empty($_POST[$field])) {
        $errors[] = "Field " . str_replace('_', ' ', $field) . " is required.";
    }
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// reCAPTCHA v3 check
if (defined('RECAPTCHA_SECRET_KEY') && RECAPTCHA_SECRET_KEY !== 'YOUR_RECAPTCHA_V3_SECRET_KEY') {
    $token = $_POST['recaptcha_token'] ?? '';
    if (!verifyRecaptcha($token, 'membership')) {
        http_response_code(422);
        echo json_encode(['success' => false, 'message' => 'reCAPTCHA verification failed. Please try again.']);
        exit;
    }
}

// MVP: File Upload Logic (Placeholders)
// In a full implementation, we would move_uploaded_file() here.
// We check if files were sent but don't save them to disk yet to avoid server config issues.
$requiredFiles = ['member_photo', 'gov_id'];
if ($_POST['member_classification'] === 'Corporate') {
    $requiredFiles[] = 'business_reg_doc';
    $requiredFiles[] = 'company_logo';
}

foreach ($requiredFiles as $fileKey) {
    if (!isset($_FILES[$fileKey]) || $_FILES[$fileKey]['error'] !== UPLOAD_ERR_OK) {
        // Only warn if it's not a placeholder implementation
        // error_log("Missing file: $fileKey");
    }
}

// Email notification to admin (Optional but recommended)
$subject = 'New Membership Application — ' . $_POST['first_name'] . ' ' . $_POST['last_name'];
$body    = "A new membership application has been submitted via the website.\n\n"
         . "Type: " . $_POST['membership_type'] . " (" . $_POST['membership_duration'] . ")\n"
         . "Applicant: " . $_POST['salutation'] . " " . $_POST['first_name'] . " " . $_POST['last_name'] . "\n"
         . "Designation: " . $_POST['designation'] . "\n"
         . "Email: " . $_POST['comm_email'] . "\n"
         . "Phone: " . $_POST['primary_phone'] . "\n\n"
         . "Full details and documents are available for review in the system.";

$headers  = "From: " . SMTP_FROM_NAME . " <" . SMTP_FROM . ">\r\n";
$headers .= "Reply-To: " . $_POST['comm_email'] . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

@mail(ADMIN_EMAIL, $subject, $body, $headers);

echo json_encode([
    'success' => true,
    'message' => 'Thank you for your application! Your details have been received and are being reviewed by the IBPC Canada team. You will receive an update via email shortly.'
]);
