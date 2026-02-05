// Shared utilities for all pages

// API Base URL (project is served from '/UMKM - Arunika')
const API_BASE = '/UMKM - Arunika/api';

// Theme toggle
function toggleTheme() {
    document.documentElement.classList.toggle('dark');
    localStorage.setItem('theme', document.documentElement.className);
}

// Initialize theme from localStorage
function initTheme() {
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        document.documentElement.className = savedTheme;
    }
}

// Fetch wrapper with error handling
async function apiCall(endpoint, options = {}) {
    const defaultOptions = {
        headers: {
            'Content-Type': 'application/json',
        },
    };

    // Merge headers and include Authorization if token exists
    const mergedHeaders = { ...(defaultOptions.headers || {}), ...(options.headers || {}) };
    const token = localStorage.getItem('auth_token');
    if (token) mergedHeaders['Authorization'] = `Bearer ${token}`;

    const finalOptions = { ...defaultOptions, ...options, headers: mergedHeaders };

    // Map logical endpoints to actual PHP filenames
    let url = '';
    if (endpoint.startsWith('/auth')) {
        // /auth/login -> /UMKM - Arunika/api/auth-umkm.php/login
        url = `${API_BASE}/auth-umkm.php${endpoint.replace('/auth', '')}`;
    } else if (endpoint === '/menu') {
        url = `${API_BASE}/menu-umkm.php`;
    } else if (endpoint.startsWith('/items')) {
        // /items/{id} -> menu-umkm.php/items/{id}
        url = `${API_BASE}/menu-umkm.php${endpoint.replace('/items', '/items')}`;
    } else if (endpoint === '/locations') {
        // no locations API implemented yet (will error)
        url = `${API_BASE}/locations.php`;
    } else {
        url = `${API_BASE}${endpoint}`;
    }

    try {
        const response = await fetch(url, finalOptions);

        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }

        return await response.json();
    } catch (error) {
        console.error('API Error:', error);
        throw error;
    }
}

// Show notification
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 16px 24px;
        border-radius: 8px;
        background-color: ${type === 'success' ? '#10b981' : type === 'error' ? '#ef4444' : '#3b82f6'};
        color: white;
        z-index: 1000;
        animation: slideIn 0.3s ease-out;
    `;

    document.body.appendChild(notification);

    setTimeout(() => {
        notification.style.animation = 'slideOut 0.3s ease-out';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', initTheme);
