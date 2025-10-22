// Get investor type from URL parameter
const urlParams = new URLSearchParams(window.location.search);
const selectedType = urlParams.get('type') || 'obligataire';

// Investor type data
const investorTypes = {
    obligataire: {
        name: 'Obligataire',
        icon: 'bi-shield-check',
        description: 'Investissement sécurisé avec rendement fixe',
        color: '#198754'
    },
    actionnaire: {
        name: 'Actionnaire',
        icon: 'bi-graph-up-arrow',
        description: 'Participation au capital avec potentiel de croissance élevé',
        color: '#198754'
    }
};

// Display selected investor type
function displaySelectedInvestorType() {
    const type = investorTypes[selectedType];
    const typeDisplay = document.getElementById('selectedInvestorDisplay');
    
    if (typeDisplay && type) {
        typeDisplay.innerHTML = `
            <div class="plan-icon">
                <i class="bi ${type.icon}"></i>
            </div>
            <h4 class="plan-name">${type.name}</h4>
            <p class="investor-type-desc">${type.description}</p>
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
const investorRegistrationForm = document.getElementById('investorRegistrationForm');

investorRegistrationForm.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    const formData = {
        investorType: selectedType,
        profileType: document.querySelector('input[name="profileType"]:checked').value,
        lastName: document.getElementById('lastName').value,
        firstName: document.getElementById('firstName').value,
        email: document.getElementById('email').value,
        phone: document.getElementById('phone').value,
        whatsapp: document.getElementById('whatsapp').value,
        country: document.getElementById('country').value,
        address: document.getElementById('address').value,
        location: document.getElementById('location').value,
        investmentAmount: document.getElementById('investmentAmount').value,
        interestSectors: Array.from(document.querySelectorAll('input[name="interestSectors"]:checked')).map(cb => cb.value),
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
    const submitBtn = investorRegistrationForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Traitement en cours...';
    submitBtn.disabled = true;
    
    // Simulate API call
    setTimeout(() => {
        console.log('Investor registration data:', formData);
        
        // Show success message
        const successMessage = document.createElement('div');
        successMessage.className = 'alert alert-success alert-dismissible fade show mt-4';
        successMessage.innerHTML = `
            <i class="bi bi-check-circle-fill me-2"></i>
            <strong>Inscription réussie !</strong> Votre demande d'inscription en tant qu'investisseur <strong>${investorTypes[selectedType].name}</strong> a été envoyée avec succès. 
            Vous recevrez un email de confirmation à l'adresse <strong>${formData.email}</strong> dans les prochaines minutes.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        
        investorRegistrationForm.insertAdjacentElement('beforebegin', successMessage);
        
        // Reset form
        investorRegistrationForm.reset();
        
        // Scroll to success message
        successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
        
        // Reset button
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        
        // Redirect after 3 seconds
        setTimeout(() => {
            window.location.href = 'devenir-investisseur.html';
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
    displaySelectedInvestorType();
});
