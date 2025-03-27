document.addEventListener('DOMContentLoaded', async () => {
    try {
        // Fetch countries from your backend
        const response = await fetch('http://world-guide.world-admins.com/api/countries');
        const countries = await response.json();
        
        const container = document.getElementById('countryCardsContainer');
        
        // Clear existing cards
        container.innerHTML = '';
        
        // Create cards for each country
        countries.forEach(country => {
            const card = document.createElement('div');
            card.className = 'w-full max-w-sm rounded-lg overflow-hidden shadow-lg cursor-pointer';
            card.innerHTML = `
                <div class="relative">
                    <img src="assets/public/${country.image || 'assets/public/images/default-country.jpg'}" 
                         alt="${country.name}" 
                         class="w-full h-48 object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-[#00B98E] text-white p-3 flex items-center justify-center">
                        <span class="mr-2">${country.flag || '🌍'}</span>
                        <span>${country.name}</span>
                    </div>
                </div>
            `;
            
            card.addEventListener('click', () => {
                window.location.href = `/country/${country.id}`;
            });
            
            container.appendChild(card);
        });
    } catch (error) {
        console.error('Error fetching countries:', error);
        showNotification('Error loading countries', 'error');
    }
});