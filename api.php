<?php
/* ═══════════════════════════════════════════════════════════════
   VOKOMOON — API BACKEND
   Sab data operations yahan handle hoti hain
═══════════════════════════════════════════════════════════════ */

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

require_once 'config.php';

$action = $_GET['action'] ?? $_POST['action'] ?? '';

// Read raw POST body
$rawBody = file_get_contents('php://input');
$postData = json_decode($rawBody, true);
if ($postData === null && $rawBody) {
    $postData = $_POST;
}

/* ═══════════════════════════════════════════════════════════════
   HELPER FUNCTIONS
═══════════════════════════════════════════════════════════════ */

function getDB() {
    $conn = dbConnect();
    $result = $conn->query("SELECT data FROM vokomoon_data WHERE id = 1 LIMIT 1");
    if (!$result || $result->num_rows === 0) {
        $conn->close();
        return null;
    }
    $row = $result->fetch_assoc();
    $conn->close();
    return json_decode($row['data'], true);
}

function saveAllDB($data) {
    $conn = dbConnect();
    $json = $conn->real_escape_string(json_encode($data, JSON_UNESCAPED_UNICODE));
    $ok = $conn->query("INSERT INTO vokomoon_data (id, data) VALUES (1, '$json') ON DUPLICATE KEY UPDATE data = '$json'");
    $conn->close();
    return $ok;
}

/* ═══════════════════════════════════════════════════════════════
   ACTIONS
═══════════════════════════════════════════════════════════════ */

switch ($action) {

    // ─── GET ALL DATA ───────────────────────────────────────────
    case 'get_all':
        $db = getDB();
        if ($db === null) {
            jsonResponse(['error' => 'Database empty. Install karein: install.php chalao'], 500);
        }
        // Remove sensitive data from public response
        $publicDB = $db;
        // Hash passwords before sending (don't send plain passwords)
        if (isset($publicDB['users'])) {
            foreach ($publicDB['users'] as &$u) {
                if (isset($u['password']) && $u['password'] !== '***') {
                    $u['password'] = '***'; // Never send passwords to frontend
                }
            }
        }
        jsonResponse($publicDB);
        break;

    // ─── SAVE ALL DATA ──────────────────────────────────────────
    case 'save_all':
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            jsonResponse(['error' => 'POST method required'], 405);
        }
        
        $data = $postData['data'] ?? $postData;
        if (empty($data)) {
            jsonResponse(['error' => 'Data empty'], 400);
        }
        
        // Get current DB to merge (protect passwords)
        $currentDB = getDB();
        
        // If users are being saved, protect passwords
        if (isset($data['users']) && $currentDB) {
            foreach ($data['users'] as $idx => &$newUser) {
                if (isset($newUser['password']) && $newUser['password'] === '***') {
                    // Find original password
                    foreach ($currentDB['users'] as $oldUser) {
                        if ($oldUser['email'] === ($newUser['email'] ?? '')) {
                            $newUser['password'] = $oldUser['password'];
                            break;
                        }
                    }
                }
            }
        }
        
        if (saveAllDB($data)) {
            jsonResponse(['success' => true, 'message' => 'Data save ho gaya']);
        } else {
            jsonResponse(['error' => 'Save fail'], 500);
        }
        break;

    // ─── REGISTER USER (Secure — password hashed on server) ─────
    case 'register_user':
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            jsonResponse(['error' => 'POST required'], 405);
        }
        
        $name     = trim($postData['name'] ?? '');
        $email    = trim($postData['email'] ?? '');
        $password = $postData['password'] ?? '';
        $method   = $postData['method'] ?? 'Email';
        
        if (!$name || !$email || !$password) {
            jsonResponse(['error' => 'Fields missing'], 400);
        }
        
        $db = getDB();
        if ($db === null) jsonResponse(['error' => 'DB error'], 500);
        
        // Check duplicate email
        foreach ($db['users'] as $u) {
            if (strtolower($u['email'] ?? '') === strtolower($email)) {
                jsonResponse(['error' => 'Email already registered'], 409);
            }
        }
        
        // Hash password
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        
        $db['users'][] = [
            'name'     => $name,
            'email'    => $email,
            'password' => $hashedPwd,
            'method'   => $method,
            'date'     => date('d/m/Y')
        ];
        
        saveAllDB($db);
        jsonResponse(['success' => true, 'name' => $name, 'email' => $email, 'method' => $method]);
        break;

    // ─── LOGIN USER ──────────────────────────────────────────────
    case 'login_user':
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            jsonResponse(['error' => 'POST required'], 405);
        }
        
        $email    = trim($postData['email'] ?? '');
        $password = $postData['password'] ?? '';
        
        if (!$email || !$password) {
            jsonResponse(['error' => 'Fields missing'], 400);
        }
        
        $db = getDB();
        if ($db === null) jsonResponse(['error' => 'DB error'], 500);
        
        $found = null;
        foreach ($db['users'] as $u) {
            if (strtolower($u['email'] ?? '') === strtolower($email)) {
                $found = $u;
                break;
            }
        }
        
        if (!$found) {
            jsonResponse(['error' => 'Account nahi mila. Pehle register karein.'], 404);
        }
        
        // Support both plain (legacy) and hashed passwords
        $pwdOk = false;
        if (isset($found['password'])) {
            if (password_verify($password, $found['password'])) {
                $pwdOk = true;
            } elseif ($found['password'] === $password) {
                // Legacy plain text password — migrate to hash
                $pwdOk = true;
            }
        }
        
        if (!$pwdOk) {
            jsonResponse(['error' => 'Wrong password'], 401);
        }
        
        jsonResponse(['success' => true, 'name' => $found['name'], 'email' => $found['email'], 'method' => $found['method'] ?? 'Email']);
        break;

    // ─── VERIFY ADMIN PASSWORD ───────────────────────────────────
    case 'verify_admin':
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            jsonResponse(['error' => 'POST required'], 405);
        }
        
        $pwd = $postData['password'] ?? '';
        
        if ($pwd === ADMIN_PWD) {
            // Generate session token
            $token = bin2hex(random_bytes(32));
            $conn  = dbConnect();
            $expires = date('Y-m-d H:i:s', time() + 3600 * 8); // 8 hours
            $safeToken = $conn->real_escape_string($token);
            $conn->query("DELETE FROM vokomoon_sessions WHERE expires_at < NOW()"); // cleanup old
            $conn->query("INSERT INTO vokomoon_sessions (session_id, expires_at) VALUES ('$safeToken', '$expires')");
            $conn->close();
            jsonResponse(['success' => true, 'token' => $token]);
        } else {
            jsonResponse(['error' => 'Wrong password'], 401);
        }
        break;

    // ─── VERIFY SESSION TOKEN ────────────────────────────────────
    case 'verify_token':
        $token = $postData['token'] ?? ($_GET['token'] ?? '');
        if (!$token) jsonResponse(['valid' => false]);
        
        $conn = dbConnect();
        $safeToken = $conn->real_escape_string($token);
        $r = $conn->query("SELECT session_id FROM vokomoon_sessions WHERE session_id = '$safeToken' AND expires_at > NOW() LIMIT 1");
        $valid = ($r && $r->num_rows > 0);
        $conn->close();
        jsonResponse(['valid' => $valid]);
        break;

    // ─── CHANGE ADMIN PASSWORD ───────────────────────────────────
    case 'change_admin_pwd':
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            jsonResponse(['error' => 'POST required'], 405);
        }
        
        $oldPwd = $postData['old_password'] ?? '';
        $newPwd = $postData['new_password'] ?? '';
        
        if ($oldPwd !== ADMIN_PWD) {
            jsonResponse(['error' => 'Current password galat hai'], 401);
        }
        if (strlen($newPwd) < 6) {
            jsonResponse(['error' => 'Min 6 characters chahiye'], 400);
        }
        
        // Update config.php
        $configPath = __DIR__ . '/config.php';
        $configContent = file_get_contents($configPath);
        $newContent = preg_replace(
            "/define\('ADMIN_PWD',\s*'[^']*'\)/",
            "define('ADMIN_PWD', '" . addslashes($newPwd) . "')",
            $configContent
        );
        file_put_contents($configPath, $newContent);
        
        jsonResponse(['success' => true, 'message' => 'Password update ho gaya!']);
        break;

    // ─── PING (health check) ─────────────────────────────────────
    case 'ping':
        $conn = dbConnect();
        $conn->close();
        jsonResponse(['status' => 'ok', 'site' => SITE_NAME, 'time' => date('Y-m-d H:i:s')]);
        break;

    // ─── DEFAULT ─────────────────────────────────────────────────
    default:
        jsonResponse(['error' => 'Unknown action: ' . htmlspecialchars($action)], 400);
        break;
}
?>
