/**
 * Profil Scripts - CIA Invest Gold V2
 * Scripts interactifs pour les pages de profil
 */

// Fonction pour changer d'onglet
function showTab(tabName) {
    // Masquer tous les contenus d'onglets
    const allTabs = document.querySelectorAll('.tab-content');
    allTabs.forEach(tab => {
        tab.style.display = 'none';
    });
    
    // Retirer la classe active de tous les boutons
    const allButtons = document.querySelectorAll('.tab-btn');
    allButtons.forEach(btn => {
        btn.classList.remove('active');
    });
    
    // Afficher l'onglet sélectionné
    const selectedTab = document.getElementById(`tab-${tabName}`);
    if (selectedTab) {
        selectedTab.style.display = 'block';
    }
    
    // Ajouter la classe active au bouton cliqué
    event.target.closest('.tab-btn').classList.add('active');
}

// Animation de la barre de progression au chargement
document.addEventListener('DOMContentLoaded', function() {
    const progressFill = document.querySelector('.progress-fill');
    if (progressFill) {
        const targetWidth = progressFill.style.width;
        progressFill.style.width = '0%';
        setTimeout(() => {
            progressFill.style.width = targetWidth;
        }, 300);
    }
    
    // Afficher le premier onglet par défaut
    const firstTab = document.getElementById('tab-overview');
    if (firstTab) {
        firstTab.style.display = 'block';
    }
});

// Gestion de l'upload d'avatar
const avatarWrapper = document.querySelector('.avatar-wrapper');
if (avatarWrapper) {
    avatarWrapper.addEventListener('click', function() {
        // Créer un input file temporaire
        const fileInput = document.createElement('input');
        fileInput.type = 'file';
        fileInput.accept = 'image/*';
        fileInput.style.display = 'none';
        
        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    const avatarImg = document.querySelector('.profile-avatar-large');
                    if (avatarImg) {
                        avatarImg.src = event.target.result;
                    }
                };
                reader.readAsDataURL(file);
            }
        });
        
        document.body.appendChild(fileInput);
        fileInput.click();
        document.body.removeChild(fileInput);
    });
}

// Gestion de l'upload de la couverture
const bannerEditBtn = document.querySelector('.banner-edit-btn');
if (bannerEditBtn) {
    bannerEditBtn.addEventListener('click', function() {
        const fileInput = document.createElement('input');
        fileInput.type = 'file';
        fileInput.accept = 'image/*';
        fileInput.style.display = 'none';
        
        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    const bannerCover = document.querySelector('.banner-cover');
                    if (bannerCover) {
                        bannerCover.style.backgroundImage = `url(${event.target.result})`;
                        bannerCover.style.backgroundSize = 'cover';
                        bannerCover.style.backgroundPosition = 'center';
                    }
                };
                reader.readAsDataURL(file);
            }
        });
        
        document.body.appendChild(fileInput);
        fileInput.click();
        document.body.removeChild(fileInput);
    });
}

// Animation au scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observer tous les content-card
document.querySelectorAll('.content-card').forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(20px)';
    card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(card);
});

// Smooth scroll pour les liens internes
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Confirmation avant de quitter si des modifications sont en cours
let hasUnsavedChanges = false;

document.querySelectorAll('input, textarea, select').forEach(element => {
    element.addEventListener('change', function() {
        hasUnsavedChanges = true;
    });
});

window.addEventListener('beforeunload', function(e) {
    if (hasUnsavedChanges) {
        e.preventDefault();
        e.returnValue = '';
        return '';
    }
});

// Réinitialiser le flag après sauvegarde
document.querySelectorAll('.btn-primary-action, .btn-save').forEach(btn => {
    btn.addEventListener('click', function() {
        hasUnsavedChanges = false;
    });
});
