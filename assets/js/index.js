// index.js - Menu page specific functionality

async function loadMenuItems() {
    try {
        const response = await apiCall('/menu');
        
        if (!response.success) {
            throw new Error(response.error);
        }

        renderMenuItems(response.data);
    } catch (error) {
        console.error('Error loading menu:', error);
        showNotification('Failed to load menu items', 'error');
        
        // Show sample data for demo
        renderMenuItems([
            { id: 1, title: 'Midnight Espresso', price: 55000, description: 'Dark roast' },
            { id: 2, title: 'Velvet Latte', price: 72000, description: 'Steamed milk' },
            { id: 3, title: 'Butter Croissant', price: 48000, description: 'Bakery item' },
        ]);
    }
}

function renderMenuItems(items) {
    const container = document.getElementById('menu-container');
    container.innerHTML = '';

    items.forEach(item => {
        const card = document.createElement('div');
        card.className = 'min-w-[280px] w-[280px] h-[340px] relative rounded-2xl overflow-hidden group cursor-pointer snap-start shadow-xl';
        card.innerHTML = `
            <img alt="${item.title}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="${item.image_url || 'https://via.placeholder.com/280x340'}"/>
            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
            <div class="absolute bottom-0 w-full p-5 z-10">
                <h3 class="text-white font-display font-bold text-xl mb-1">${item.title}</h3>
                <p class="text-gray-300 text-xs line-clamp-2 mb-3 font-light">${item.description || ''}</p>
                <div class="flex justify-between items-end border-t border-white/20 pt-3">
                    <span class="text-primary font-bold">Rp ${item.price?.toLocaleString('id-ID') || 0}</span>
                </div>
            </div>
        `;
        container.appendChild(card);
    });
}

// Load menu when page is ready
document.addEventListener('DOMContentLoaded', loadMenuItems);
