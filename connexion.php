<?php

/**
 * Page Devenir Membre - CIA Invest
 * 
 * Présentation des 3 formules d'adhésion (Silver, Gold, Platinum)
 * avec tableau comparatif et section CTA
 * 
 * @package CIA_Invest
 * @version 1.0
 */

// Configuration de la page
$current_page = 'connexion';
$page_title = 'Connexion';

// Inclure le header
include 'partials/header.php';
?>
<!-- Login Section -->
<section class="login-section">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-5 col-md-7" data-aos="fade-up">
                <div class="login-card">
                    <div class="login-header text-center mb-4">
                        <div class="login-logo mb-3">
                            <span class="brand-text">CIA</span>
                            <span class="brand-subtitle">Invest</span>
                        </div>
                        <h2 class="login-title">Connexion</h2>
                        <p class="login-subtitle">Accédez à votre espace membre</p>
                    </div>

                    <form id="loginForm" class="login-form">
                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" id="email" placeholder="votre@email.com" required>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="password" placeholder="••••••••" required>
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                    <i class="bi bi-eye" id="eyeIcon"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">
                                    Se souvenir de moi
                                </label>
                            </div>
                            <a href="mot-de-passe-oublie.php" class="forgot-password">Mot de passe oublié ?</a>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-box-arrow-in-right me-2"></i> Se connecter
                            </button>
                        </div>

                        <!-- Divider -->
                        <div class="login-divider">
                            <span>ou</span>
                        </div>

                        <!-- Social Login -->
                        <div class="social-login">
                            <button type="button" class="btn btn-outline-secondary w-100 mb-2">
                                <i class="bi bi-google me-2"></i> Continuer avec Google
                            </button>
                            <button type="button" class="btn btn-outline-secondary w-100">
                                <i class="bi bi-linkedin me-2"></i> Continuer avec LinkedIn
                            </button>
                        </div>

                        <!-- Register Link -->
                        <div class="text-center mt-4">
                            <p class="mb-0">Vous n'avez pas de compte ?</p>
                            <div class="register-links mt-2">
                                <a href="devenir-membre.html" class="btn btn-link">Devenir membre</a>
                                <span class="text-muted">|</span>
                                <a href="devenir-investisseur.html" class="btn btn-link">Devenir investisseur</a>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Security Notice -->
                <div class="security-notice text-center mt-4" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-muted mb-0">
                        <i class="bi bi-shield-check me-2"></i>
                        Connexion sécurisée SSL
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
                    <li><a href="devenir-membre.html">Devenir membre</a></li>
                    <li><a href="devenir-investisseur.html">Devenir investisseur</a></li>
                    <li><a href="connexion.html">Se connecter</a></li>
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS Animation Library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Custom JS -->
<script src="js/script.js"></script>
<script src="js/connexion.js"></script>
</body>

</html>