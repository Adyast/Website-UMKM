## Quick Reference: Frontend-Backend Architecture

### 🎨 Frontend Files (HTML/CSS/JS)

**Core Pages:**
- `index.html` → Homepage with menu showcase
- `about.html` → Company story and philosophy
- `location.html` → Store locations and map
- `admin/login.html` → Admin authentication

**Stylesheets:**
- `assets/css/styles.css` → Shared utilities and custom CSS

**Scripts:**
- `assets/js/main.js` → Shared functions (apiCall, theme toggle)
- `assets/js/index.js` → Homepage: load menu items
- `assets/js/location.js` → Locations page: load location data
- `assets/js/login.js` → Admin login form
- `assets/js/admin.js` → Dashboard: manage menu items

---

### 🔧 Backend Files (PHP APIs)

**Configuration:**
- `api/config.php` → Database connection + response helpers

**Endpoints:**
- `api/menu.php` → GET/POST menu items
- `api/locations.php` → GET/POST locations
- `api/auth.php` → Login/logout/verify token

---

### 📊 How Frontend Talks to Backend

```javascript
// Frontend (JavaScript)
const response = await apiCall('/menu');  // Calls http://localhost/api/menu

// Backend (PHP)
// File: api/menu.php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $items = $pdo->query("SELECT * FROM menu_items");
    response(['success' => true, 'data' => $items->fetchAll()]);
}
```

---

### 🗄️ Database Tables

**menu_items** - Coffee/food products
- id, title, description, price, category, image_url, status

**locations** - Store locations
- id, name, type, address, email, phone, image_url, status

**admins** - Admin users
- id, username, email, password, role, status

---

### ⚙️ How to Add New Pages

1. **Create HTML file:** `newpage.html`
2. **Create JavaScript:** `assets/js/newpage.js`
3. **Create API if needed:** `api/newfeature.php`
4. **Import in HTML:**
   ```html
   <script src="assets/js/main.js"></script>
   <script src="assets/js/newpage.js"></script>
   ```
5. **Use API in JS:**
   ```javascript
   const data = await apiCall('/endpoint');
   ```

---

### 📡 API Endpoints Summary

```
GET    /api/menu              - Fetch all items
POST   /api/menu              - Create item
PUT    /api/items/{id}        - Update item
DELETE /api/items/{id}        - Delete item

GET    /api/locations         - Fetch all locations
POST   /api/locations         - Create location

POST   /api/auth/login        - Admin login
POST   /api/auth/logout       - Admin logout
POST   /api/auth/verify       - Verify token
```

---

### 🚀 Getting Started

1. **Set up database:**
   ```bash
   mysql -u root < database.sql
   ```

2. **Update config:**
   - Edit `api/config.php` with your database credentials

3. **Test API:**
   ```bash
   curl http://localhost/api/menu
   ```

4. **Access app:**
   - Homepage: `http://localhost/index.html`
   - Admin: `http://localhost/admin/login.html`

---

### 💡 Key JavaScript Functions

**Main functions in `assets/js/main.js`:**

```javascript
// Fetch data from API
await apiCall('/endpoint', { method: 'POST', body: JSON.stringify(data) })

// Toggle theme
toggleTheme()

// Show notification
showNotification('Message', 'success'|'error'|'info')

// Initialize theme
initTheme()
```

---

### 🔐 Admin Credentials

**Default (from database.sql):**
- Username: `admin`
- Password: `admin123`
- Role: `admin`

---

### 📝 File Checklist

✅ Frontend:
- [ ] index.html
- [ ] about.html
- [ ] location.html
- [ ] admin/login.html
- [ ] admin/dashboard.html
- [ ] assets/css/styles.css
- [ ] assets/js/main.js
- [ ] assets/js/index.js
- [ ] assets/js/location.js
- [ ] assets/js/login.js
- [ ] assets/js/admin.js

✅ Backend:
- [ ] api/config.php
- [ ] api/menu.php
- [ ] api/locations.php
- [ ] api/auth.php

✅ Database:
- [ ] database.sql

✅ Documentation:
- [ ] README.md
- [ ] QUICKSTART.md (this file)
