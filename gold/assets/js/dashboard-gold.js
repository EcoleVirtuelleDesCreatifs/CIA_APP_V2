/**
 * Dashboard Gold V2 - Scripts
 */

// Mobile menu toggle
function toggleMobileMenu() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('active');
}

// Animations au chargement
document.addEventListener('DOMContentLoaded', function() {
    // Animer les cartes features
    const featureCards = document.querySelectorAll('.feature-card');
    featureCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        setTimeout(() => {
            card.style.transition = 'all 0.6s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 100);
    });
    
    // Animer les barres de progression
    setTimeout(() => {
        const progressBars = document.querySelectorAll('.progress-fill-mini');
        progressBars.forEach(bar => {
            const width = bar.style.width;
            bar.style.width = '0%';
            setTimeout(() => {
                bar.style.width = width;
            }, 100);
        });
    }, 500);
});

// Fermer la sidebar au clic extérieur sur mobile
document.addEventListener('click', function(event) {
    const sidebar = document.querySelector('.sidebar');
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    
    if (window.innerWidth <= 992) {
        if (!sidebar.contains(event.target) && !menuToggle?.contains(event.target)) {
            sidebar.classList.remove('active');
        }
    }
});
