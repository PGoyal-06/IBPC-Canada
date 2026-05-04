<?php
/**
 * IBPC Canada — Member Login Handler
 */
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect('/login');
}

$email    = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$returnTo = $_POST['returnTo'] ?? '';

if (!$email || !$password) {
    redirect('/login?error=missing');
}

require_once __DIR__ . '/../includes/db.php';

$stmt = $pdo->prepare('SELECT id, name, email, password_hash, membership_status FROM members WHERE email = ? LIMIT 1');
$stmt->execute([$email]);
$member = $stmt->fetch();

if (!$member || !password_verify($password, $member['password_hash'])) {
    redirect('/login?error=invalid');
}

session_regenerate_id(true);
$_SESSION['member_id']     = $member['id'];
$_SESSION['member_name']   = $member['name'];
$_SESSION['member_email']  = $member['email'];
$_SESSION['member_status'] = $member['membership_status'];

$safeReturnTo    = getSafeReturnTo($returnTo);
$hasValidReturnTo = ($returnTo !== '' && $safeReturnTo === $returnTo);

if ($hasValidReturnTo) {
    redirect($safeReturnTo);
}

switch ($member['membership_status']) {
    case 'pending':
    case 'expired':
        redirect('/member-portal/profile');
    default:
        redirect('/member-portal');
}
