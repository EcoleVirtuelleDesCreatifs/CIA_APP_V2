// Forgot password form submission
const forgotPasswordForm = document.getElementById('forgotPasswordForm');

forgotPasswordForm.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    const email = document.getElementById('email').value;
    
    // Validate email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        showError('Veuillez entrer une adresse email valide.');
        return;
    }
    
    // Show loading state
    const submitBtn = forgotPasswordForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Envoi en cours...';
    submitBtn.disabled = true;
    
    // Simulate API call
    setTimeout(() => {
        console.log('Password reset email sent to:', email);
        
        // Show success message
        const successMessage = document.createElement('div');
        successMessage.className = 'alert alert-success alert-dismissible fade show';
        successMessage.innerHTML = `
            <i class="bi bi-check-circle-fill me-2"></i>
            <strong>Email envoyé !</strong> Si un compte existe avec l'adresse <strong>${email}</strong>, 
            vous recevrez un lien de réinitialisation dans quelques minutes.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        
        forgotPasswordForm.insertAdjacentElement('beforebegin', successMessage);
        
        // Reset form
        forgotPasswordForm.reset();
        
        // Scroll to success message
        successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
        
        // Reset button
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        
        // Redirect to login after 5 seconds
        setTimeout(() => {
            window.location.href = 'connexion.html';
        }, 5000);
    }, 1500);
});

// Show error message
function showError(message) {
    const errorMessage = document.createElement('div');
    errorMessage.className = 'alert alert-danger alert-dismissible fade show';
    errorMessage.innerHTML = `
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    forgotPasswordForm.insertAdjacentElement('beforebegin', errorMessage);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        errorMessage.remove();
    }, 5000);
}

// Email validation on blur
const emailInput = document.getElementById('email');
emailInput.addEventListener('blur', function() {
    const email = this.value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (email && !emailRegex.test(email)) {
        this.classList.add('is-invalid');
        if (!this.nextElementSibling || !this.nextElementSibling.classList.contains('invalid-feedback')) {
            const feedback = document.createElement('div');
            feedback.className = 'invalid-feedback';
            feedback.textContent = 'Veuillez entrer une adresse email valide.';
            this.parentElement.appendChild(feedback);
        }
    } else {
        this.classList.remove('is-invalid');
        const feedback = this.parentElement.querySelector('.invalid-feedback');
        if (feedback) {
            feedback.remove();
        }
    }
});

// Initialize AOS
AOS.init({
    duration: 800,
    once: true
});
