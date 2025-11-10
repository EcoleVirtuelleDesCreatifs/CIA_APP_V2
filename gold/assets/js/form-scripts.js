/**
 * Form Scripts - CIA Invest Gold V2
 */

document.getElementById('profileForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    const successMessage = document.getElementById('successMessage');
    successMessage.style.display = 'flex';
    window.scrollTo({ top: 0, behavior: 'smooth' });
    setTimeout(() => {
        successMessage.style.display = 'none';
    }, 5000);
});
