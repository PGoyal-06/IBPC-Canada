<?php
/**
 * IBPC Canada — Site-Wide Configuration
 * 
 * Contains database credentials, SMTP settings, and global constants.
 * IMPORTANT: Update these values before deploying to production.
 */

// ── Error Reporting (disable in production) ──
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ── Site Info ──
define('SITE_NAME', 'IBPC Canada');
define('SITE_TAGLINE', 'India Business & Professional Council');
define('SITE_URL', 'https://ibpccanada.com');
define('SITE_ROOT', __DIR__);

// ── Database (Hostinger MySQL) ──
define('DB_HOST', 'localhost');
define('DB_NAME', 'your_database_name');
define('DB_USER', 'your_database_user');
define('DB_PASS', 'your_database_password');
define('DB_CHARSET', 'utf8mb4');

// ── SMTP (Hostinger Email) ──
define('SMTP_HOST', 'smtp.hostinger.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'office@ibpccanada.com');
define('SMTP_PASS', 'YOUR_EMAIL_PASSWORD');
define('SMTP_FROM', 'office@ibpccanada.com');
define('SMTP_FROM_NAME', 'IBPC Canada');
define('ADMIN_EMAIL', 'your_email_address_here');

// ── Google reCAPTCHA v3 ──
define('RECAPTCHA_SITE_KEY', 'YOUR_RECAPTCHA_V3_SITE_KEY');
define('RECAPTCHA_SECRET_KEY', 'YOUR_RECAPTCHA_V3_SECRET_KEY');
define('RECAPTCHA_MIN_SCORE', 0.5);

// ── Google Analytics ──
define('GA_MEASUREMENT_ID', 'G-XXXXXXXXXX');

// ── Google Maps ──
define('GMAPS_EMBED_URL', 'https://www.google.com/maps/embed?pb=YOUR_EMBED_PARAMS');

// ── Contact Info ──
define('OFFICE_ADDRESS', 'YOUR_OFFICE_ADDRESS');
define('OFFICE_PHONE', '+1 YOUR_PHONE_NUMBER');
define('OFFICE_MOBILE', '+1 YOUR_MOBILE_NUMBER');
define('OFFICE_EMAIL', 'your_contact_email@example.com');
define('OFFICE_HOURS', 'Monday – Friday: 9:00 AM – 5:00 PM EST');
define('WHATSAPP_NUMBER', 'YOUR_WHATSAPP_NUMBER_RAW');

// ── Asset Paths ──
define('ASSETS_URL', '/assets');
define('CSS_URL', ASSETS_URL . '/css');
define('JS_URL', ASSETS_URL . '/js');
define('IMG_URL', ASSETS_URL . '/images');
define('BANNER_URL', '/bannerimg');
