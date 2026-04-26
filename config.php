<?php
/* ═══════════════════════════════════════════════════════════════
   VOKOMOON — DATABASE CONFIG
═══════════════════════════════════════════════════════════════ */

define('DB_HOST', 'localhost');
// define('DB_USER', 'u913993263_Ateaq');
// define('DB_PASS', 'NayaPassword12');
// define('DB_NAME', 'u913993263_Ateaq');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'vokomoon');

// Admin Panel Password
define('ADMIN_PWD', 'Ateaq@!');

// Site Settings
define('SITE_NAME', 'VoKoMoon');
// define('SITE_URL', 'https://vokomoon.com');
define('SITE_URL', 'http://localhost:8000');

// Security
define('API_SECRET', 'voko_' . md5('vokomoon_secure_key_2025'));

/* ─── Connect to Database ─── */
function dbConnect() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        http_response_code(500);
        die(json_encode(['error' => 'Database connection failed: ' . $conn->connect_error]));
    }
    $conn->set_charset('utf8mb4');
    return $conn;
}

/* ─── JSON Response Helper ─── */
function jsonResponse($data, $code = 200) {
    http_response_code($code);
    header('Content-Type: application/json; charset=utf-8');
    header('Access-Control-Allow-Origin: *');
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    exit;
}
?>
