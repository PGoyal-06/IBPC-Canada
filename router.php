<?php
/**
 * IBPC Canada — Development Router
 * 
 * Used with PHP's built-in dev server to mimic Apache .htaccess rewrite rules.
 * Usage: php -S localhost:8080 router.php
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Serve existing files directly (CSS, JS, images, etc.)
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false; // Let PHP's built-in server handle it
}

// Root → index.php
if ($uri === '/' || $uri === '/index.php') {
    require __DIR__ . '/index.php';
    return true;
}

// Remove trailing slash
$uri = rtrim($uri, '/');

// Clean URL → /pages/slug.php or /api/slug.php
$slug = ltrim($uri, '/');

// Handle API routes
if (strpos($slug, 'api/') === 0) {
    $apiPath = __DIR__ . '/' . $slug . '.php';
    if (file_exists($apiPath)) {
        require $apiPath;
        return true;
    }
}

$pagePath = __DIR__ . '/pages/' . $slug . '.php';

if (file_exists($pagePath)) {
    require $pagePath;
    return true;
}

// 404 fallback
http_response_code(404);
echo '<!DOCTYPE html><html><head><title>404 — Page Not Found</title>';
echo '<link rel="stylesheet" href="/assets/css/style.css">';
echo '<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet">';
echo '</head><body style="display:flex;align-items:center;justify-content:center;min-height:100vh;text-align:center;">';
echo '<div><h1 style="font-size:72px;color:#1F3D8C;margin-bottom:10px;">404</h1>';
echo '<p style="font-size:18px;">Page not found</p>';
echo '<a href="/" class="btn-1" style="margin-top:20px;">Back to Home</a></div>';
echo '</body></html>';
return true;
