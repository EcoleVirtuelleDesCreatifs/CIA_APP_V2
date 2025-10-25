<?php
/**
 * Page Mot de Passe Oublié - CIA Invest
 * 
 * Formulaire de récupération de mot de passe
 * 
 * @package CIA_Invest
 * @version 1.0
 */

// Configuration de la page
$current_page = 'mot-de-passe-oublie';
$page_title = 'Mot de passe oublié';

// Inclure le header
include 'partials/header.php';
?>

<!-- Password Reset Section -->
<section class="login-section">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-5 col-md-7" data-aos="fade-up">
                <div class="login-card">
                    <div class="login-header text-center mb-4">
                        <div class="login-logo mb-3">
                            <div class="reset-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <h2 class="login-title">Mot de passe oublié ?</h2>
                        <p class="login-subtitle">Pas de souci ! Entrez votre email et nous vous enverrons un lien pour réinitialiser votre mot de passe.</p>
                    </div>

                    <!-- Reset Form (Initial) -->
                    <form id="resetForm" class="login-form">
                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="form-label">Adresse email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="votre@email.com" required>
                            </div>
                            <small class="form-text text-muted">
                                Nous vous enverrons un lien de réinitialisation à cette adresse
                            </small>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-send me-2"></i> Envoyer le lien de réinitialisation
                            </button>
                        </div>

                        <!-- Back to Login -->
                        <div class="text-center">
                            <a href="connexion.php" class="btn btn-link">
                                <i class="bi bi-arrow-left me-2"></i> Retour à la connexion
                            </a>
                        </div>
                    </form>

                    <!-- Success Message (Hidden by default) -->
                    <div id="successMessage" class="alert alert-success" style="display: none;">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill me-3 fs-4"></i>
                            <div>
                                <h5 class="alert-heading mb-2">Email envoyé avec succès !</h5>
                                <p class="mb-2">Nous avons envoyé un lien de réinitialisation à votre adresse email.</p>
                                <p class="mb-0 small">
                                    <strong>Vérifiez votre boîte de réception</strong> et cliquez sur le lien pour créer un nouveau mot de passe.
                                    Si vous ne voyez pas l'email, pensez à vérifier vos spams.
                                </p>
                            </div>
                        </div>
                        <div class="mt-3 text-center">
                            <a href="connexion.php" class="btn btn-sm btn-outline-success">
                                <i class="bi bi-arrow-left me-2"></i> Retour à la connexion
                            </a>
                        </div>
                    </div>

                    <!-- Error Message (Hidden by default) -->
                    <div id="errorMessage" class="alert alert-danger" style="display: none;">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-exclamation-triangle-fill me-3 fs-4"></i>
                            <div>
                                <h5 class="alert-heading mb-2">Erreur</h5>
                                <p class="mb-0" id="errorText">Une erreur s'est produite. Veuillez réessayer.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Help Section -->
                <div class="help-section text-center mt-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h5 class="mb-3"><i class="bi bi-question-circle me-2"></i>Besoin d'aide ?</h5>
                            <p class="text-muted mb-3">
                                Si vous rencontrez des difficultés pour récupérer votre mot de passe, notre équipe est là pour vous aider.
                            </p>
                            <div class="d-grid gap-2">
                                <a href="mailto:support@cia-invest.com" class="btn btn-outline-primary">
                                    <i class="bi bi-envelope me-2"></i> Contacter le support
                                </a>
                                <p class="mb-0 small text-muted mt-2">
                                    <i class="bi bi-telephone me-2"></i> (+225) 27 22 21 83 33
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Security Notice -->
                <div class="security-notice text-center mt-4" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-muted mb-0">
                        <i class="bi bi-shield-check me-2"></i>
                        Vos informations sont protégées et sécurisées
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="footer-brand mb-4">
                    <span class="brand-text">CIA</span>
                    <span class="brand-subtitle">Invest</span>
                </div>
                <p class="footer-description">Organisation dynamique dédiée à la promotion de l'investissement en Afrique : Échanges entre les investisseurs africains et internationaux.</p>
                <div class="social-links mt-4">
                    <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4 class="footer-title">Réseau des Investisseurs</h4>
                <ul class="footer-links">
                    <li><a href="#reseau-international">Réseau des investisseurs international</a></li>
                    <li><a href="#references">Nos références</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6">
                <h4 class="footer-title">Espace membre</h4>
                <ul class="footer-links">
                    <li><a href="devenir-membre.php">Devenir membre</a></li>
                    <li><a href="devenir-investisseur.php">Devenir investisseur</a></li>
                    <li><a href="connexion.php">Se connecter</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4 class="footer-title">Contact</h4>
                <ul class="footer-links">
                    <li><a href="#contact">Nous contacter</a></li>
                    <li><a href="mailto:contact@cia-invest.com">contact@cia-invest.com</a></li>
                    <li><a href="tel:+22527222183333">(+225) 27 22 21 83 33</a></li>
                    <li>ANGRE - Soleil 3 - Villa 105<br>Abidjan - Côte d'Ivoire</li>
                </ul>
            </div>
        </div>

        <hr class="footer-divider my-4">

        <div class="row">
            <div class="col-12 text-center">
                <p class="footer-copyright">&copy; 2025 Chambre des Investisseurs Africains. Tous droits réservés.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Custom CSS for Reset Icon -->
<style>
.reset-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #198754 0%, #1fa968 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    box-shadow: 0 10px 30px rgba(25, 135, 84, 0.3);
}

.reset-icon i {
    font-size: 2.5rem;
    color: white;
}

.help-section .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.help-section .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
}

#successMessage,
#errorMessage {
    animation: slideIn 0.5s ease-out;
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<!-- JavaScript for form handling -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const resetForm = document.getElementById('resetForm');
    const successMessage = document.getElementById('successMessage');
    const errorMessage = document.getElementById('errorMessage');
    const errorText = document.getElementById('errorText');

    resetForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Get email value
        const email = document.getElementById('email').value;

        // Basic email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            errorText.textContent = 'Veuillez entrer une adresse email valide.';
            errorMessage.style.display = 'block';
            successMessage.style.display = 'none';
            return;
        }

        // Simulate API call to send reset email
        // In production, this would be an actual API call
        setTimeout(function() {
            // Hide the form
            resetForm.style.display = 'none';
            
            // Hide error message if visible
            errorMessage.style.display = 'none';
            
            // Show success message
            successMessage.style.display = 'block';
            
            // Scroll to success message
            successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            
            // Optional: You could add actual email sending logic here
            // Example:
            // fetch('api/reset-password.php', {
            //     method: 'POST',
            //     headers: { 'Content-Type': 'application/json' },
            //     body: JSON.stringify({ email: email })
            // })
            // .then(response => response.json())
            // .then(data => {
            //     if (data.success) {
            //         resetForm.style.display = 'none';
            //         successMessage.style.display = 'block';
            //     } else {
            //         errorText.textContent = data.message || 'Une erreur s\'est produite.';
            //         errorMessage.style.display = 'block';
            //     }
            // })
            // .catch(error => {
            //     errorText.textContent = 'Erreur de connexion au serveur.';
            //     errorMessage.style.display = 'block';
            // });
        }, 1000);
    });
});
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS Animation Library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Custom JS -->
<script src="js/script.js"></script>

</body>
</html>
