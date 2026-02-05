// admin.js - Admin dashboard functionality

async function loadMenuItems() {
    try {
        const response = await apiCall('/menu');
        
        if (!response.success) {
            throw new Error(response.error);
        }

        renderMenuTable(response.data);
    } catch (error) {
        console.error('Error loading menu:', error);
        showNotification('Failed to load menu items', 'error');
    }
}

function renderMenuTable(items) {
    const tbody = document.getElementById('menu-tbody');
    if (!tbody) return;

    tbody.innerHTML = '';

    items.forEach(item => {
        const row = document.createElement('tr');
        row.className = 'hover:bg-white/5 transition-colors group';
        row.innerHTML = `
            <td class="px-6 py-4">
                <div class="flex items-center gap-4">
                    <img alt="${item.title}" class="w-12 h-12 rounded-lg object-cover ring-1 ring-gray-700" src="${item.image_url || 'https://via.placeholder.com/48'}"/>
                    <div>
                        <div class="text-white font-medium">${item.title}</div>
                        <div class="text-gray-500 text-[10px] uppercase tracking-wider">${item.category}</div>
                    </div>
                </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                <span class="text-primary font-medium">Rp ${item.price?.toLocaleString('id-ID') || 0}</span>
            </td>
            <td class="px-6 py-4">
                <span class="text-xs font-bold text-gray-400 uppercase">${item.category}</span>
            </td>
            <td class="px-6 py-4">
                <label class="relative inline-flex items-center cursor-pointer">
                    <input class="sr-only peer toggle-item" type="checkbox" data-id="${item.id}" ${item.status === 'Tersedia' ? 'checked' : ''}/>
                    <div class="w-9 h-5 bg-gray-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-gray-400 after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
                    <span class="ms-3 text-[10px] font-bold text-gray-400 uppercase tracking-widest peer-checked:text-primary">${item.status === 'Tersedia' ? 'Tersedia' : 'Tidak Tersedia'}</span>
                </label>
            </td>
            <td class="px-6 py-4 text-right whitespace-nowrap">
                <div class="flex justify-end gap-2 opacity-60 group-hover:opacity-100 transition-opacity">
                    <button class="p-2 text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg transition-colors edit-btn" data-id="${item.id}" title="Edit">
                        <span class="material-icons-round text-lg">edit</span>
                    </button>
                    <button class="p-2 text-gray-400 hover:text-red-400 hover:bg-red-400/10 rounded-lg transition-colors delete-btn" data-id="${item.id}" title="Delete">
                        <span class="material-icons-round text-lg">delete_outline</span>
                    </button>
                </div>
            </td>
        `;
        tbody.appendChild(row);
    });

    attachEventListeners();
}

function attachEventListeners() {
    // Toggle status
    document.querySelectorAll('.toggle-item').forEach(toggle => {
        toggle.addEventListener('change', handleStatusChange);
    });

    // Delete button
    document.querySelectorAll('.delete-btn').forEach(btn => {
        btn.addEventListener('click', handleDelete);
    });

    // Edit button
    document.querySelectorAll('.edit-btn').forEach(btn => {
        btn.addEventListener('click', handleEdit);
    });
}

async function handleStatusChange(e) {
    const id = e.target.dataset.id;
    const status = e.target.checked ? 1 : 0;

    try {
        const response = await apiCall(`/items/${id}`, {
            method: 'PUT',
            body: JSON.stringify({ status })
        });

        if (response.success) {
            showNotification('Status updated', 'success');
        }
    } catch (error) {
        showNotification('Failed to update status', 'error');
        e.target.checked = !e.target.checked;
    }
}

async function handleDelete(e) {
    const id = e.target.closest('.delete-btn').dataset.id;

    if (!confirm('Are you sure you want to delete this item?')) return;

    try {
        const response = await apiCall(`/items/${id}`, { method: 'DELETE' });

        if (response.success) {
            showNotification('Item deleted', 'success');
            loadMenuItems();
        }
    } catch (error) {
        showNotification('Failed to delete item', 'error');
    }
}

function handleEdit(e) {
    const id = e.target.closest('.edit-btn').dataset.id;
    console.log('Edit item:', id);
    // Implement edit modal/form
}

// Form submission
document.getElementById('add-item-form')?.addEventListener('submit', async function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const data = {
        title: formData.get('title'),
        price: parseFloat(formData.get('price')),
        category: formData.get('category'),
        description: formData.get('description'),
        status: formData.get('status') === 'on' ? 1 : 0
    };

    try {
        const response = await apiCall('/menu', {
            method: 'POST',
            body: JSON.stringify(data)
        });

        if (response.success) {
            showNotification('Item added successfully', 'success');
            this.reset();
            loadMenuItems();
        }
    } catch (error) {
        showNotification('Failed to add item', 'error');
    }
});

// Load menu on page ready
document.addEventListener('DOMContentLoaded', loadMenuItems);

// Logout handler: clear token and redirect to login
document.getElementById('logout-link')?.addEventListener('click', function(e) {
    e.preventDefault();
    localStorage.removeItem('auth_token');
    showNotification('Logged out', 'success');
    setTimeout(() => {
        window.location.href = 'login.html';
    }, 400);
});
