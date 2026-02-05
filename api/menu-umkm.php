<?php
require_once 'config.php';

$method = $_SERVER['REQUEST_METHOD'];
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request = explode('/', trim($request, '/'));

// GET /api/menu - Get all products from produk table
if ($method === 'GET') {
    try {
        $stmt = $pdo->query("
            SELECT id_produk as id, nama_produk as title, harga as price, kategori as category, 
                   deskripsi_produk as description, gambar as image_url, status 
            FROM produk 
            ORDER BY id_produk DESC
        ");
        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
        response(['success' => true, 'data' => $items]);
    } catch (Exception $e) {
        errorResponse('Failed to fetch menu items', 500);
    }
}

// POST /api/menu - Create new product
if ($method === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    // Validate required fields
    if (!isset($data['title']) || !isset($data['price']) || !isset($data['category'])) {
        errorResponse('Missing required fields');
    }

    try {
        $stmt = $pdo->prepare("
            INSERT INTO produk (nama_produk, harga, kategori, deskripsi_produk, gambar, status)
            VALUES (:nama_produk, :harga, :kategori, :deskripsi_produk, :gambar, :status)
        ");

        $stmt->execute([
            ':nama_produk' => $data['title'],
            ':harga' => $data['price'],
            ':kategori' => $data['category'],
            ':deskripsi_produk' => $data['description'] ?? '',
            ':gambar' => $data['image_url'] ?? '',
            ':status' => $data['status'] ?? 'Tersedia',
        ]);

        response(['success' => true, 'id' => $pdo->lastInsertId()], 201);
    } catch (Exception $e) {
        errorResponse('Failed to create menu item', 500);
    }
}

// PUT /api/items/{id} - Update product
if ($method === 'PUT') {
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $request[3] ?? null;

    if (!$id) {
        errorResponse('Missing product ID');
    }

    try {
        if (isset($data['status'])) {
            $newStatus = $data['status'] == 1 ? 'Tersedia' : 'Tidak Tersedia';
            $stmt = $pdo->prepare("
                UPDATE produk SET status = :status WHERE id_produk = :id
            ");
            $stmt->execute([':status' => $newStatus, ':id' => $id]);
        }

        response(['success' => true]);
    } catch (Exception $e) {
        errorResponse('Failed to update product', 500);
    }
}

// DELETE /api/items/{id} - Delete product
if ($method === 'DELETE') {
    $id = $request[3] ?? null;

    if (!$id) {
        errorResponse('Missing product ID');
    }

    try {
        $stmt = $pdo->prepare("DELETE FROM produk WHERE id_produk = :id");
        $stmt->execute([':id' => $id]);
        response(['success' => true]);
    } catch (Exception $e) {
        errorResponse('Failed to delete product', 500);
    }
}

errorResponse('Method not allowed', 405);
?>
