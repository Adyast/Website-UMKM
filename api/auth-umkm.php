<?php
require_once 'config.php';

$method = $_SERVER['REQUEST_METHOD'];
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request = explode('/', trim($request, '/'));

// POST /api/auth/login - Admin login
if ($method === 'POST' && isset($request[3]) && $request[3] === 'login') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (!isset($data['username']) || !isset($data['password'])) {
        errorResponse('Missing username or password');
    }

    try {
        $stmt = $pdo->prepare("
            SELECT id_admin, username, password, nama_admin 
            FROM admin 
            WHERE username = :username
            LIMIT 1
        ");

        $stmt->execute([
            ':username' => $data['username']
        ]);

        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$admin) {
            errorResponse('Invalid credentials', 401);
        }

        // Verify password (direct comparison - your database stores plain text)
        // For better security, consider updating to use password_hash()
        if ($data['password'] !== $admin['password']) {
            errorResponse('Invalid credentials', 401);
        }

        // Generate simple token
        $token = bin2hex(random_bytes(32));
        
        response([
            'success' => true,
            'token' => $token,
            'admin' => [
                'id' => $admin['id_admin'],
                'username' => $admin['username'],
                'nama_admin' => $admin['nama_admin']
            ]
        ]);
    } catch (Exception $e) {
        errorResponse('Login failed', 500);
    }
}

// POST /api/auth/logout - Admin logout
if ($method === 'POST' && isset($request[3]) && $request[3] === 'logout') {
    // Clear token from session
    response(['success' => true, 'message' => 'Logged out successfully']);
}

// POST /api/auth/verify - Verify token
if ($method === 'POST' && isset($request[3]) && $request[3] === 'verify') {
    $headers = getallheaders();
    $token = $headers['Authorization'] ?? null;

    if (!$token) {
        errorResponse('No token provided', 401);
    }

    // Verify token (implement your verification logic)
    response(['success' => true, 'message' => 'Token valid']);
}

errorResponse('Method not allowed', 405);
?>
