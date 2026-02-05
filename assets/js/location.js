// location.js - Locations page functionality

async function loadLocations() {
    try {
        const response = await apiCall('/locations');
        
        if (!response.success) {
            throw new Error(response.error);
        }

        renderLocations(response.data);
    } catch (error) {
        console.error('Error loading locations:', error);
        showNotification('Failed to load locations', 'error');
        
        // Show sample location for demo
        renderLocations([
            {
                id: 1,
                name: 'Arts District',
                type: 'Flagship Roastery & Cafe',
                address: '124 Silence Blvd, Arts District, New York, NY 10012',
                email: 'hello@nocturnebrew.com',
                phone: '+1 (555) 0123-4567',
                image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCQzn5NJuLhYn4iyN_Df1961tTVA4RuZeyBO5r9vPJqfiTmh1BENZ7GD3uKvOWQtmJ35ajS9M6wyUC1It_sO36avQqpvSYeIWN8JH8QvQ1NdiWDlMhhw79-Of8g5C2IyCfJUynNZQCNTWCTISR87PEidBMZqFcGS4ge5Jr8mcAA4ALvuXvjnkItIBtVFWZI-qLn7knEXMZp6SDUiV8oOptVXnDUOE70Vf39SkXCwyf_RhBNYMxPvQwJsGbvHPEfdkZ27PfayvLQ-VA',
                status: 'Open Now'
            }
        ]);
    }
}

function renderLocations(locations) {
    const container = document.getElementById('locations-container');
    container.innerHTML = '';

    locations.forEach((location, index) => {
        const section = document.createElement('div');
        section.className = 'bg-surface-light dark:bg-surface-dark rounded-3xl overflow-hidden shadow-xl border border-gray-200 dark:border-gray-800';
        section.innerHTML = `
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="relative h-72 md:h-auto overflow-hidden">
                    <img alt="${location.name}" class="absolute inset-0 w-full h-full object-cover hover:scale-105 transition-transform duration-700" src="${location.image}"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 md:bottom-10 md:left-10 text-white">
                        <span class="bg-primary px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider text-white mb-2 inline-block">${location.status}</span>
                    </div>
                </div>
                <div class="p-8 md:p-14 flex flex-col justify-center">
                    <h2 class="text-3xl font-display font-bold text-gray-900 dark:text-white mb-2">${location.name}</h2>
                    <p class="text-primary font-medium mb-8">${location.type}</p>
                    <div class="space-y-8">
                        <div class="flex items-start gap-4">
                            <div class="bg-gray-200 dark:bg-card-dark p-3 rounded-xl text-primary flex-shrink-0">
                                <span class="material-icons-round">location_on</span>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 dark:text-white uppercase tracking-wider mb-1">Visit Us</h4>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">${location.address}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-gray-200 dark:bg-card-dark p-3 rounded-xl text-primary flex-shrink-0">
                                <span class="material-icons-round">phone</span>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 dark:text-white uppercase tracking-wider mb-1">Contact</h4>
                                <p class="text-gray-600 dark:text-gray-400 flex flex-col gap-1">
                                    <a class="hover:text-primary transition-colors" href="mailto:${location.email}">${location.email}</a>
                                    <a class="hover:text-primary transition-colors" href="tel:${location.phone.replace(/\D/g, '')}">${location.phone}</a>
                                </p>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 dark:border-gray-700 pt-8 mt-2">
                            <a class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-gray-900 dark:bg-white text-white dark:text-black px-8 py-3.5 rounded-xl font-bold hover:bg-primary dark:hover:bg-primary hover:text-white dark:hover:text-white transition-all shadow-lg hover:shadow-primary/25 group" href="https://maps.google.com" target="_blank">
                                Get Directions
                                <span class="material-icons-round group-hover:translate-x-1 transition-transform">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        `;
        
        if (index > 0) {
            section.style.marginTop = '2rem';
        }
        
        container.appendChild(section);
    });
}

// Load locations on page ready
document.addEventListener('DOMContentLoaded', loadLocations);
