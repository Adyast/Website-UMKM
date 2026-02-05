# UMKM Database Mapping Guide

## Your Existing Database Structure

### Database: `umkm`

#### Table: `admin`
```
id_admin         → admin ID (PRIMARY KEY)
username         → login username
password         → login password
nama_admin       → admin name
```

#### Table: `produk`
```
id_produk           → product ID (PRIMARY KEY)
gambar              → product image URL
nama_produk         → product name
deskripsi_produk    → product description
harga               → product price
kategori            → product category (Coffee, Non-Coffee, Snack)
status              → product status (Tersedia, Tidak Tersedia)
```

#### Table: `transaksi`
```
id_transaksi        → transaction ID (PRIMARY KEY)
id_produk           → product ID (FOREIGN KEY)
jumlah              → quantity
nama_pelanggan      → customer name
no_telp             → customer phone
tanggal             → transaction date/time
```

---

## Implementation Steps

### 1. Replace Old API Files

**Keep the updated files for your database:**
- Replace `api/config.php` with `api/config-umkm.php`
- Replace `api/menu.php` with `api/menu-umkm.php`
- Replace `api/auth.php` with `api/auth-umkm.php`

### 2. Field Mapping in Code

Your database fields are mapped to the API response fields like this:

| Your Field | API Field | Purpose |
|------------|-----------|---------|
| `id_produk` | `id` | Product identifier |
| `nama_produk` | `title` | Product name |
| `harga` | `price` | Product price |
| `deskripsi_produk` | `description` | Product description |
| `gambar` | `image_url` | Product image |
| `kategori` | `category` | Product category |
| `status` | `status` | Tersedia/Tidak Tersedia |

### 3. Database Connection

Your `config.php` now connects to:
```php
define('DB_NAME', 'umkm');
```

Ensure your database credentials are correct:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
```

---

## API Endpoints (Using Your Database)

### Menu/Product Management
```
GET    /api/menu              - Fetch all products from produk table
POST   /api/menu              - Create new product
PUT    /api/items/{id}        - Update product status
DELETE /api/items/{id}        - Delete product
```

### Authentication
```
POST   /api/auth/login        - Admin login (from admin table)
POST   /api/auth/logout       - Admin logout
POST   /api/auth/verify       - Verify token
```

---

## How Data Flows

### Fetching Products
```
Frontend (index.js)
    ↓ apiCall('/menu')
API (menu-umkm.php)
    ↓ SELECT from produk table
Database
    ↓ Returns id_produk, nama_produk, harga, etc.
API
    ↓ Maps to: id, title, price, etc.
Frontend
    ↓ Displays products
```

### Login
```
Frontend (login.js)
    ↓ apiCall('/auth/login', {username, password})
API (auth-umkm.php)
    ↓ SELECT from admin table WHERE username
Database
    ↓ Compares password
API
    ↓ Returns token + admin info
Frontend
    ↓ Stores token, redirects to dashboard
```

---

## JavaScript Integration

Your frontend JavaScript already handles the mapped fields correctly. Example:

```javascript
// When API returns product data:
{
    id: 1,                          // from id_produk
    title: 'Cappuccino',            // from nama_produk
    price: 35000,                   // from harga
    description: 'Italian espresso',// from deskripsi_produk
    image_url: 'https://...',       // from gambar
    category: 'Coffee',             // from kategori
    status: 'Tersedia'              // from status
}

// Frontend renders it
<h3>${product.title}</h3>
<p>Rp ${product.price}</p>
```

---

## Testing Your Connection

### 1. Test Database Connection
Create `test-connection.php`:
```php
<?php
require_once 'api/config.php';

try {
    $result = $pdo->query("SELECT COUNT(*) as total FROM produk");
    $row = $result->fetch();
    echo "✅ Connected! Found " . $row['total'] . " products";
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>
```

Access: `http://localhost/test-connection.php`

### 2. Test API Endpoints
```bash
# Get all products
curl http://localhost/api/menu

# Login
curl -X POST http://localhost/api/auth/login \
  -H "Content-Type: application/json" \
  -d '{"username":"admin","password":"your_password"}'
```

---

## Additional API Features (To Add Later)

### Transaction Management
```php
// api/transactions.php - GET transactions
// Add endpoints to fetch from transaksi table
// Connect id_produk to produk details
```

### Product Category Filter
```javascript
// Filter by category
const categoryFilter = await apiCall('/menu?category=Coffee');
```

### Search Products
```javascript
// Search functionality
const search = await apiCall('/menu/search?q=cappuccino');
```

---

## Security Notes

⚠️ **Your password storage:**
Your `admin` table stores plain text passwords. Consider:
1. Update passwords to use `password_hash()`
2. Implement session/token expiration
3. Add HTTPS for production
4. Validate all inputs

---

## File Replacement

1. Delete old files that don't match your database:
   - ~~`database.sql`~~ (you have your own)
   - ~~`api/locations.php`~~ (not needed)

2. Keep and use:
   - ✅ `api/config.php` - Updated for umkm
   - ✅ `api/menu.php` - Updated for produk table
   - ✅ `api/auth.php` - Updated for admin table
   - ✅ All HTML files (unchanged)
   - ✅ All JS files (unchanged)
   - ✅ CSS files (unchanged)
