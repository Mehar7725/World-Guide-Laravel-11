function showNotification(message, type = 'success') {
    const notification = document.getElementById('notification');
    const messageElement = document.getElementById('notification-message');
    
    // Set message
    messageElement.textContent = message;
    
    // Show notification
    notification.classList.remove('hidden');
    
    // Set color based on type
    const notificationBox = notification.firstElementChild;
    if (type === 'success') {
        notificationBox.classList.remove('bg-red-500');
        notificationBox.classList.add('bg-green-500');
    } else {
        notificationBox.classList.remove('bg-green-500');
        notificationBox.classList.add('bg-red-500');
    }
    
    // Hide after 3 seconds
    setTimeout(() => {
        notification.classList.add('hidden');
    }, 3000);
}

// Add animation with CSS
const style = document.createElement('style');
style.textContent = `
    #notification {
        transition: all 0.3s ease-in-out;
        transform: translateX(0);
    }
    #notification.hidden {
        transform: translateX(100%);
    }
`;
document.head.appendChild(style);