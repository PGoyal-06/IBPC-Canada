<?php
/**
 * IBPC Canada — Helper Functions
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Sanitize user input for display.
 */
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Get the current page slug from the URI.
 */
function currentPage() {
    $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    return $uri ?: 'home';
}

/**
 * Check if the given page slug matches the current page.
 */
function isActivePage($slug) {
    return currentPage() === $slug ? 'active' : '';
}

/**
 * Generate a full asset URL.
 */
function asset($path) {
    return ASSETS_URL . '/' . ltrim($path, '/');
}

/**
 * Truncate text to a given length.
 */
function excerpt($text, $length = 150) {
    if (strlen($text) <= $length) return $text;
    return substr($text, 0, $length) . '…';
}

/**
 * Format a date string for display.
 */
function formatDate($date, $format = 'F j, Y') {
    return date($format, strtotime($date));
}

/**
 * Check if user is logged in (member session).
 */
function isLoggedIn() {
    return isset($_SESSION['member_id']) && !empty($_SESSION['member_id']);
}

/**
 * Redirect to a given URL.
 */
function redirect($url) {
    header('Location: ' . $url);
    exit;
}

/**
 * Return a validated internal portal path, or the fallback /member-portal.
 * Blocks external URLs, protocol-relative paths, and non-portal paths.
 */
function getSafeReturnTo($returnTo) {
    $fallback = '/member-portal';
    $allowed  = ['/member-portal', '/member-portal/profile', '/member-portal/events'];

    if (!$returnTo || !is_string($returnTo)) {
        return $fallback;
    }
    if ($returnTo[0] !== '/' || strpos($returnTo, '//') === 0) {
        return $fallback;
    }
    foreach ($allowed as $path) {
        if ($returnTo === $path || strpos($returnTo, $path . '?') === 0) {
            return $returnTo;
        }
    }
    return $fallback;
}

/**
 * Redirect to login if the user is not authenticated, preserving the current URL as returnTo.
 */
function requireLogin() {
    if (!isLoggedIn()) {
        $current = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        redirect('/login?' . http_build_query(['returnTo' => $current]));
    }
}

/**
 * Verify Google reCAPTCHA v3 response.
 * Requires success, matching action, and score above threshold.
 */
function verifyRecaptcha($token, $action = 'contact') {
    if (empty($token)) return false;

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret'   => RECAPTCHA_SECRET_KEY,
        'response' => $token,
        'remoteip' => $_SERVER['REMOTE_ADDR'] ?? '',
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ],
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $json = json_decode($result, true);

    if (!$json || !isset($json['success']) || !$json['success']) {
        return false;
    }

    // Verify action and score for v3
    $score  = $json['score']  ?? 0;
    $act    = $json['action'] ?? '';
    $min    = defined('RECAPTCHA_MIN_SCORE') ? RECAPTCHA_MIN_SCORE : 0.5;

    return ($act === $action && $score >= $min);
}
