// Language Switcher
document.addEventListener('DOMContentLoaded', function() {
    const languageLinks = document.querySelectorAll('.language-menu .dropdown-item');
    const languageText = document.querySelector('.language-text');
    
    // Get saved language from localStorage or default to 'fr'
    let currentLang = localStorage.getItem('language') || 'fr';
    
    // Update UI based on current language
    updateLanguageUI(currentLang);
    
    // Add click event to language links
    languageLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const selectedLang = this.getAttribute('data-lang');
            
            // Remove active class from all items
            languageLinks.forEach(l => l.classList.remove('active'));
            
            // Add active class to selected item
            this.classList.add('active');
            
            // Update language text
            updateLanguageUI(selectedLang);
            
            // Save to localStorage
            localStorage.setItem('language', selectedLang);
            
            // Here you would typically reload the page or fetch translated content
            // For now, we'll just show a notification
            console.log('Language changed to:', selectedLang);
            
            // Optional: Show a toast notification
            showLanguageChangeNotification(selectedLang);
        });
    });
    
    function updateLanguageUI(lang) {
        if (lang === 'fr') {
            languageText.textContent = 'FR';
        } else if (lang === 'en') {
            languageText.textContent = 'EN';
        }
        
        // Update active state
        languageLinks.forEach(link => {
            if (link.getAttribute('data-lang') === lang) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }
    
    function showLanguageChangeNotification(lang) {
        const langName = lang === 'fr' ? 'Français' : 'English';
        
        // Create notification element
        const notification = document.createElement('div');
        notification.className = 'language-notification';
        notification.innerHTML = `
            <i class="bi bi-check-circle-fill me-2"></i>
            Langue changée : ${langName}
        `;
        
        // Add to body
        document.body.appendChild(notification);
        
        // Show notification
        setTimeout(() => {
            notification.classList.add('show');
        }, 100);
        
        // Hide and remove notification after 3 seconds
        setTimeout(() => {
            notification.classList.remove('show');
            setTimeout(() => {
                notification.remove();
            }, 300);
        }, 3000);
    }
});
