// Toggle password visibility
const togglePassword = document.getElementById('togglePassword');
const passwordInput = document.getElementById('password');
const eyeIcon = document.getElementById('eyeIcon');

togglePassword.addEventListener('click', function() {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    
    // Toggle eye icon
    if (type === 'text') {
        eyeIcon.classList.remove('bi-eye');
        eyeIcon.classList.add('bi-eye-slash');
    } else {
        eyeIcon.classList.remove('bi-eye-slash');
        eyeIcon.classList.add('bi-eye');
    }
});

// Login form submission
const loginForm = document.getElementById('loginForm');

loginForm.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    const formData = {
        email: document.getElementById('email').value,
        password: document.getElementById('password').value,
        rememberMe: document.getElementById('rememberMe').checked
    };
    
    // Show loading state
    const submitBtn = loginForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Connexion en cours...';
    submitBtn.disabled = true;
    
    // Simulate API call
    setTimeout(() => {
        console.log('Login data:', formData);
        
        // Show success message
        const successMessage = document.createElement('div');
        successMessage.className = 'alert alert-success alert-dismissible fade show';
        successMessage.innerHTML = `
            <i class="bi bi-check-circle-fill me-2"></i>
            <strong>Connexion réussie !</strong> Vous allez être redirigé vers votre espace membre...
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        
        loginForm.insertAdjacentElement('beforebegin', successMessage);
        
        // Scroll to success message
        successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
        
        // Reset button
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        
        // Redirect after 2 seconds (to dashboard or member area)
        setTimeout(() => {
            // window.location.href = 'dashboard.html'; // Uncomment when dashboard is ready
            console.log('Redirecting to dashboard...');
        }, 2000);
    }, 1500);
});

// Email validation
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

// Password strength indicator (optional)
const passwordStrengthIndicator = document.createElement('div');
passwordStrengthIndicator.className = 'password-strength mt-2';
passwordStrengthIndicator.style.display = 'none';

passwordInput.parentElement.parentElement.appendChild(passwordStrengthIndicator);

passwordInput.addEventListener('input', function() {
    const password = this.value;
    
    if (password.length > 0) {
        passwordStrengthIndicator.style.display = 'block';
        
        let strength = 0;
        if (password.length >= 8) strength++;
        if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;
        if (/\d/.test(password)) strength++;
        if (/[^a-zA-Z0-9]/.test(password)) strength++;
        
        let strengthText = '';
        let strengthClass = '';
        
        switch(strength) {
            case 0:
            case 1:
                strengthText = 'Faible';
                strengthClass = 'text-danger';
                break;
            case 2:
                strengthText = 'Moyen';
                strengthClass = 'text-warning';
                break;
            case 3:
                strengthText = 'Bon';
                strengthClass = 'text-info';
                break;
            case 4:
                strengthText = 'Excellent';
                strengthClass = 'text-success';
                break;
        }
        
        passwordStrengthIndicator.innerHTML = `<small class="${strengthClass}">Force du mot de passe : ${strengthText}</small>`;
    } else {
        passwordStrengthIndicator.style.display = 'none';
    }
});

// Initialize AOS
AOS.init({
    duration: 800,
    once: true
});
