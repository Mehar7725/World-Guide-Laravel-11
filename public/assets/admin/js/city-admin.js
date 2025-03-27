class CityAdmin {
    constructor() {
        this.init();
    }

    init() {
        this.initializeEventListeners();
        this.initializeDynamicCityName();
        this.initializeUrlCollector();
        this.initializeFormHandler();
    }

    initializeDynamicCityName() {
        const cityNameInput = document.getElementById('cityName');
        if (cityNameInput) {
            cityNameInput.addEventListener('input', (e) => {
                const cityName = e.target.value || 'Add New City';
                document.getElementById('dynamicCityName').textContent = cityName;
            });
        }
    }

    initializeUrlCollector() {
        // Function buttons handler
        document.querySelectorAll('.function-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                
                const parentDiv = e.currentTarget.closest('.col-md-2');
                const urlInput = parentDiv?.querySelector('.url-input');
                
                // Hide all other function button URL inputs
                document.querySelectorAll('.function-btn').forEach(btn => {
                    const otherInput = btn.closest('.col-md-2')?.querySelector('.url-input');
                    if (otherInput && otherInput !== urlInput) {
                        otherInput.style.display = 'none';
                    }
                });
                
                // Toggle current URL input
                if (urlInput) {
                    urlInput.style.display = urlInput.style.display === 'none' ? 'block' : 'none';
                    if (urlInput.style.display === 'block') {
                        urlInput.focus();
                    }
                }
            });
        });

        // Left menu buttons handler
        document.querySelectorAll('.left-menu .btn').forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                
                const menuItem = e.currentTarget.closest('.menu-item');
                const urlInput = menuItem?.querySelector('.url-input');
                
                // Hide all other left menu URL inputs
                document.querySelectorAll('.left-menu .url-input').forEach(input => {
                    if (input !== urlInput) {
                        input.style.display = 'none';
                    }
                });
                
                // Toggle current URL input
                if (urlInput) {
                    urlInput.style.display = urlInput.style.display === 'none' ? 'block' : 'none';
                    if (urlInput.style.display === 'block') {
                        urlInput.focus();
                    }
                }
            });
        });

        // Close URL inputs when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.function-btn') && 
                !e.target.closest('.url-input') && 
                !e.target.closest('.left-menu .btn')) {
                document.querySelectorAll('.url-input').forEach(input => {
                    input.style.display = 'none';
                });
            }
        });

        // Prevent URL input click from closing
        document.querySelectorAll('.url-input').forEach(input => {
            input.addEventListener('click', (e) => {
                e.stopPropagation();
            });
        });
    }

    initializeFormHandler() {
        const form = document.getElementById('addCityForm');
        if (form) {
            form.addEventListener('submit', this.handleFormSubmit.bind(this));
        }
    }

    handleFormSubmit(e) {
        e.preventDefault();
        
        try {
            const formData = new FormData(e.target);
            
            // Collect URLs from function buttons
            const functionUrls = {};
            document.querySelectorAll('.function-btn').forEach(button => {
                const urlInput = button.closest('.col-md-2')?.querySelector('.url-input');
                if (urlInput?.value) {
                    functionUrls[button.dataset.type] = urlInput.value;
                }
            });
            
            // Collect URLs from left menu
            const menuUrls = {};
            document.querySelectorAll('.left-menu .btn').forEach(button => {
                const urlInput = button.closest('.menu-item')?.querySelector('.url-input');
                if (urlInput?.value) {
                    const buttonText = button.textContent.trim();
                    menuUrls[buttonText] = urlInput.value;
                }
            });
            
            // Add URLs to form data
            formData.append('functionUrls', JSON.stringify(functionUrls));
            formData.append('menuUrls', JSON.stringify(menuUrls));
            
            console.log('Form data:', {
                functionUrls,
                menuUrls,
                formData: Object.fromEntries(formData)
            });
            
            // Add your form submission logic here
            // await fetch('/api/cities', {
            //     method: 'POST',
            //     body: formData
            // });
            
        } catch (error) {
            console.error('Error submitting form:', error);
        }
    }
}

// Initialize on DOM load
document.addEventListener('DOMContentLoaded', () => {
    new CityAdmin();
});

// Keep togglePanel function global as it's called from HTML
function togglePanel(element) {
    const panel = element.closest('.wpsm_panel');
    const body = panel.querySelector('.wpsm_panel-body');
    const icon = element.querySelector('.float-end i');
    
    if (body.style.display === 'none') {
        body.style.display = 'block';
        icon.classList.replace('bi-plus-lg', 'bi-dash-lg');
    } else {
        body.style.display = 'none';
        icon.classList.replace('bi-dash-lg', 'bi-plus-lg');
    }
}

// Keep toggleSection function global as it's called from HTML
function toggleSection(section) {
    const sectionElement = document.querySelector('.section-' + section);
    if (sectionElement) {
        sectionElement.style.display = sectionElement.style.display === 'none' ? 'block' : 'none';
    }
}