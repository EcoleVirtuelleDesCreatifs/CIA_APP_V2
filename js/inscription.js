// Get plan from URL parameter
const urlParams = new URLSearchParams(window.location.search);
const selectedPlan = urlParams.get('plan') || 'silver';

// Plan data
const plans = {
    silver: {
        name: 'Silver',
        price: 500,
        annual: 'Annuel',
        icon: 'bi-star',
        color: '#198754'
    },
    gold: {
        name: 'Gold',
        price: 1000,
        annual: 'Annuel',
        icon: 'bi-star-fill',
        color: '#198754'
    },
    platinum: {
        name: 'Platinum',
        price: 1500,
        annual: 'Annuel',
        icon: 'bi-gem',
        color: '#FFD700'
    }
};

// Display selected plan
function displaySelectedPlan() {
    const plan = plans[selectedPlan];
    const planDisplay = document.getElementById('selectedPlanDisplay');
    
    if (planDisplay && plan) {
        planDisplay.innerHTML = `
            <div class="plan-icon">
                <i class="bi ${plan.icon}"></i>
            </div>
            <h4 class="plan-name">${plan.name}</h4>
            <div class="plan-price">
                <span class="amount">${plan.price}</span>
                <span class="currency">$</span>
            </div>
            <p class="plan-annual">Abonnement <strong>${plan.annual}</strong></p>
        `;
    }
}

// Toggle company fields based on profile type
const profileTypeRadios = document.querySelectorAll('input[name="profileType"]');
const companyFields = document.getElementById('companyFields');
const companyInputs = companyFields.querySelectorAll('input, select');

profileTypeRadios.forEach(radio => {
    radio.addEventListener('change', function() {
        if (this.value === 'company') {
            companyFields.style.display = 'block';
            // Make company fields required
            companyInputs.forEach(input => {
                if (input.id === 'companyName' || input.id === 'commerceRegistry' || input.id === 'taxNumber') {
                    input.required = true;
                }
            });
        } else {
            companyFields.style.display = 'none';
            // Make company fields not required
            companyInputs.forEach(input => {
                input.required = false;
            });
        }
    });
});

// Form validation and submission
const registrationForm = document.getElementById('registrationForm');

registrationForm.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    const formData = {
        plan: selectedPlan,
        profileType: document.querySelector('input[name="profileType"]:checked').value,
        lastName: document.getElementById('lastName').value,
        firstName: document.getElementById('firstName').value,
        email: document.getElementById('email').value,
        phone: document.getElementById('phone').value,
        whatsapp: document.getElementById('whatsapp').value,
        country: document.getElementById('country').value,
        address: document.getElementById('address').value,
        location: document.getElementById('location').value,
        motivation: document.getElementById('motivation').value,
        terms: document.getElementById('terms').checked
    };
    
    // Add company data if applicable
    if (formData.profileType === 'company') {
        formData.companyName = document.getElementById('companyName').value;
        formData.commerceRegistry = document.getElementById('commerceRegistry').value;
        formData.taxNumber = document.getElementById('taxNumber').value;
        formData.sector = document.getElementById('sector').value;
    }
    
    // Validate terms
    if (!formData.terms) {
        alert('Veuillez accepter les conditions générales pour continuer.');
        return;
    }
    
    // Show loading state
    const submitBtn = registrationForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Traitement en cours...';
    submitBtn.disabled = true;
    
    // Simulate API call
    setTimeout(() => {
        console.log('Form data:', formData);
        
        // Show success message
        const successMessage = document.createElement('div');
        successMessage.className = 'alert alert-success alert-dismissible fade show mt-4';
        successMessage.innerHTML = `
            <i class="bi bi-check-circle-fill me-2"></i>
            <strong>Inscription réussie !</strong> Votre demande a été envoyée avec succès. 
            Vous recevrez un email de confirmation à l'adresse <strong>${formData.email}</strong> dans les prochaines minutes.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        
        registrationForm.insertAdjacentElement('beforebegin', successMessage);
        
        // Reset form
        registrationForm.reset();
        
        // Scroll to success message
        successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
        
        // Reset button
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        
        // Redirect after 3 seconds
        setTimeout(() => {
            window.location.href = 'devenir-membre.html';
        }, 3000);
    }, 2000);
});

// Phone number formatting
function formatPhoneNumber(input) {
    input.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 0) {
            if (!value.startsWith('225')) {
                value = '225' + value;
            }
            e.target.value = '+' + value.replace(/(\d{3})(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/, '$1 $2 $3 $4 $5 $6');
        }
    });
}

// Apply phone formatting
formatPhoneNumber(document.getElementById('phone'));
formatPhoneNumber(document.getElementById('whatsapp'));

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    displaySelectedPlan();
});
