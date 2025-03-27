// When adding a country
async function addCountry(event) {
    event.preventDefault();
    
    try {
        const formData = new FormData(event.target);
        const response = await fetch('http://localhost:3000/admin/countries', {
            method: 'POST',
            body: formData
        });
        
        if (response.ok) {
            showNotification('Country added successfully!');
            // Clear form or refresh data as needed
            event.target.reset();
        } else {
            throw new Error('Failed to add country');
        }
    } catch (error) {
        showNotification('Error adding country', 'error');
        console.error('Error:', error);
    }
}

// Add event listener to the form
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('addCountryForm');
    if (form) {
        form.addEventListener('submit', addCountry);
    }
});