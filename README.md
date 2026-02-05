# Nocturne Brew - Frontend/Backend Architecture Guide

## Project Structure

```
UMKM - Arunika/
├── index.html                    # Homepage (HTML)
├── about.html                    # About page (HTML)
├── location.html                 # Locations page (HTML)
├── database.sql                  # Database schema
├── assets/
│   ├── css/
│   │   └── styles.css           # Shared styles
│   ├── js/
│   │   ├── main.js              # Shared utilities
│   │   ├── index.js             # Homepage functionality
│   │   ├── location.js          # Locations page functionality
│   │   ├── login.js             # Login functionality
│   │   └── admin.js             # Admin dashboard functionality
│   └── images/                  # Image assets
├── admin/
│   ├── login.html               # Admin login (HTML)
│   └── dashboard.html           # Admin dashboard (HTML)
├── api/
│   ├── config.php               # Database & response helpers
│   ├── auth.php                 # Authentication endpoints
│   ├── menu.php                 # Menu CRUD endpoints
│   └── locations.php            # Locations endpoints
└── php/
    ├── Database.php             # Database class (optional)
    ├── MenuItem.php             # MenuItem class (optional)
    └── Auth.php                 # Authentication class (optional)
```

## Frontend (HTML/CSS/JS)

### HTML Files
- Pure HTML structure, no PHP logic
- All links point to `.html` files or API endpoints
- Responsive design with Tailwind CSS

### CSS
**Location:** `assets/css/styles.css`
- Shared styles across all pages
- Custom utilities and animations
- Tailwind configuration in HTML files

### JavaScript
**Shared (`main.js`):**
- `apiCall()` - Fetch wrapper with error handling
- `toggleTheme()` - Light/dark mode toggle
- `showNotification()` - Toast notifications

**Page-Specific:**
- `index.js` - Menu loading
- `location.js` - Location data loading
- `login.js` - Login form handling
- `admin.js` - Dashboard functionality

## Backend (PHP APIs)

### Configuration (`api/config.php`)
```php
// Database connection
$pdo = new PDO("mysql:host=localhost;dbname=nocturne_brew", "root", "");

// Response helpers
response($data, $statusCode)     // Success response
errorResponse($message, $code)   // Error response
```

### API Endpoints

#### Menu Management
- `GET /api/menu` - Fetch all menu items
- `POST /api/menu` - Create menu item
- `PUT /api/items/{id}` - Update item
- `DELETE /api/items/{id}` - Delete item

#### Locations
- `GET /api/locations` - Fetch all locations
- `POST /api/locations` - Create location

#### Authentication
- `POST /api/auth/login` - Admin login
- `POST /api/auth/logout` - Admin logout
- `POST /api/auth/verify` - Verify token

## Setup Instructions

### 1. Database Setup
```sql
-- Import database schema
mysql -u root < database.sql

-- Or manually create database
CREATE DATABASE nocturne_brew;
USE nocturne_brew;
-- Copy contents of database.sql
```

### 2. Update API Configuration
Edit `api/config.php`:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'your_password');
define('DB_NAME', 'nocturne_brew');
```

### 3. Update Frontend API URL (if needed)
In `assets/js/main.js`:
```js
const API_BASE = 'http://localhost/api'; // Change as needed
```

### 4. Start Local Server
```bash
# Using XAMPP
# Place files in C:\xampp\htdocs\UMKM - Arunika

# Start Apache and MySQL in XAMPP Control Panel
# Access: http://localhost/UMKM%20-%20Arunika

# OR using PHP built-in server
cd c:\xampp\htdocs\UMKM\ -\ Arunika
php -S localhost:8000
# Access: http://localhost:8000
```

## API Usage Examples

### JavaScript Frontend

```javascript
// Fetch menu items
const response = await apiCall('/menu');
console.log(response.data);

// Create menu item
await apiCall('/menu', {
    method: 'POST',
    body: JSON.stringify({
        title: 'New Coffee',
        price: 50000,
        category: 'minuman'
    })
});

// Update item status
await apiCall('/items/1', {
    method: 'PUT',
    body: JSON.stringify({ status: 1 })
});

// Login
await apiCall('/auth/login', {
    method: 'POST',
    body: JSON.stringify({
        username: 'admin',
        password: 'password'
    })
});
```

### PHP Backend

```php
// In API files, data is received as JSON
$data = json_decode(file_get_contents('php://input'), true);

// Check method
if ($_SERVER['REQUEST_METHOD'] === 'GET') { }
if ($_SERVER['REQUEST_METHOD'] === 'POST') { }
if ($_SERVER['REQUEST_METHOD'] === 'PUT') { }
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') { }

// Return responses
response(['success' => true, 'data' => $items]);
errorResponse('Error message', 400);
```

## Key Features

✅ **Separation of Concerns** - Frontend and backend are independent
✅ **RESTful API** - Standard HTTP methods and status codes
✅ **Error Handling** - Consistent error responses
✅ **Authentication** - Token-based admin login
✅ **Responsive Design** - Mobile-first with Tailwind CSS
✅ **Dark Mode** - Built-in light/dark theme toggle

## Navigation Map

| Page | File | Purpose |
|------|------|---------|
| Home | `index.html` | Menu showcase |
| About | `about.html` | Company story |
| Locations | `location.html` | Store information |
| Admin Login | `admin/login.html` | Authentication |
| Dashboard | `admin/dashboard.html` | Menu management |

## API Testing

### Using cURL
```bash
# Get all menu items
curl http://localhost/api/menu

# Create menu item
curl -X POST http://localhost/api/menu \
  -H "Content-Type: application/json" \
  -d '{
    "title": "New Coffee",
    "price": 50000,
    "category": "minuman"
  }'

# Login
curl -X POST http://localhost/api/auth/login \
  -H "Content-Type: application/json" \
  -d '{
    "username": "admin",
    "password": "admin123"
  }'
```

### Using Postman
1. Create new request
2. Set method (GET, POST, PUT, DELETE)
3. Enter URL: `http://localhost/api/menu`
4. Set headers: `Content-Type: application/json`
5. Add JSON body for POST/PUT requests
6. Send

## Security Notes

⚠️ **Before Production:**
- Hash passwords using `password_hash()`
- Implement proper JWT authentication
- Add CORS headers if frontend is on different domain
- Use HTTPS only
- Implement rate limiting
- Validate all user inputs
- Use prepared statements (already using PDO)
- Add user sessions/token expiration

## Environment Variables

Create `.env` file (optional):
```env
DB_HOST=localhost
DB_USER=root
DB_PASS=
DB_NAME=nocturne_brew
API_URL=http://localhost
```

## Troubleshooting

### 404 Error on API calls
- Check PHP files are in `api/` folder
- Ensure `.htaccess` rewrites are enabled
- Verify API_BASE URL matches your setup

### Database connection failed
- Check MySQL is running
- Verify credentials in `config.php`
- Ensure database `nocturne_brew` exists

### CORS errors
- Add headers to `config.php`:
```php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');
```

## Next Steps

1. Set up database with `database.sql`
2. Update API credentials in `api/config.php`
3. Test API endpoints with cURL or Postman
4. Create additional pages (Contact, Reservations, etc.)
5. Implement proper authentication & session management
6. Add image upload functionality
7. Create admin user management
8. Deploy to production server

## Support

For questions about:
- **Frontend**: Check `assets/js/` files
- **Backend**: Check `api/` files
- **Database**: Check `database.sql`
