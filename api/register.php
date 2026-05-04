<?php
/**
 * IBPC Canada — Member Registration Handler
 */
header('Content-Type: application/json');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

$firstName = trim($_POST['first_name'] ?? '');
$lastName  = trim($_POST['last_name'] ?? '');
$email     = trim($_POST['email'] ?? '');
$password  = $_POST['password'] ?? '';
$confirm   = $_POST['password_confirm'] ?? '';

if (!$firstName || !$lastName || !$email || !$password) {
    echo json_encode(['success' => false, 'message' => 'All mandatory fields are required.']);
    exit;
}

if ($password !== $confirm) {
    echo json_encode(['success' => false, 'message' => 'Passwords do not match.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

try {
    // Check if email already exists
    $stmt = $pdo->prepare("SELECT id FROM members WHERE email = ? LIMIT 1");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        echo json_encode(['success' => false, 'message' => 'An account with this email already exists.']);
        exit;
    }

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $fullName = $firstName . ' ' . $lastName;

    $stmt = $pdo->prepare("INSERT INTO members (email, password_hash, name, membership_status) VALUES (?, ?, ?, 'registered_pending_payment')");
    $stmt->execute([$email, $passwordHash, $fullName]);
    
    $memberId = $pdo->lastInsertId();

    // Set session
    $_SESSION['member_id']     = $memberId;
    $_SESSION['member_name']   = $fullName;
    $_SESSION['member_email']  = $email;
    $_SESSION['member_status'] = 'registered_pending_payment';

    echo json_encode(['success' => true, 'message' => 'Account created successfully.']);
} catch (PDOException $e) {
    error_log("Registration error: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'A server error occurred. Please try again later.']);
}
