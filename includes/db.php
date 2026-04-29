<?php
/**
 * IBPC Canada — Database Connection
 */
require_once __DIR__ . '/../config.php';

try {
    $pdo = new PDO(
        'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET,
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]
    );
} catch (PDOException $e) {
    // In production, log this instead of displaying
    error_log('Database connection failed: ' . $e->getMessage());
    die('Database connection error. Please try again later.');
}
