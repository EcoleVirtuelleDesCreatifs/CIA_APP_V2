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
$current_page = 'devenir-investisseur';
$page_title = 'Devenir Investisseur';

// Inclure le header
include 'partials/header.php';
?>
<!-- Hero Section -->
<section class="page-hero">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                <br />
                <br />
                <br />

                <span class="hero-badge">Devenir Investisseur</span>
                <h1 class="hero-title">Investissez dans l'avenir de l'Afrique</h1>
                <p class="hero-description">Rejoignez notre réseau d'investisseurs et participez au financement de projets innovants et porteurs de croissance sur le continent africain. Choisissez le type d'investissement qui correspond à votre profil.</p>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <a href="#investor-types">
            <i class="bi bi-chevron-down"></i>
        </a>
    </div>
</section>

<!-- Investor Types Section -->
<section id="investor-types" class="pricing-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-badge">Types d'investisseurs</span>
            <h2 class="section-title">Choisissez votre profil d'investisseur</h2>
            <p class="section-description">Deux catégories d'investissement adaptées à vos objectifs et à votre stratégie</p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Investisseur Obligataire -->
            <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-card investor-card">
                    <div class="pricing-badge">Obligataire</div>
                    <div class="pricing-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h3 class="investor-title">Investisseur Obligataire</h3>
                    <p class="investor-description">Investissement sécurisé avec rendement fixe. Idéal pour les investisseurs recherchant la stabilité et un revenu régulier.</p>

                    <ul class="pricing-features">
                        <li><i class="bi bi-check-circle-fill"></i> Accès aux projets selon votre catégorie</li>
                        <li><i class="bi bi-check-circle-fill"></i> Espace de rendez-vous avec la CIA et les porteurs de projets</li>
                        <li><i class="bi bi-check-circle-fill"></i> Espace de formation dédié</li>
                        <li><i class="bi bi-check-circle-fill"></i> Consultation des événements en cours</li>
                    </ul>

                    <div class="investor-benefits mt-4">
                        <h5 class="benefits-subtitle"><i class="bi bi-star-fill"></i> Avantages</h5>
                        <ul class="benefits-list-small">
                            <li>Rendement fixe et prévisible</li>
                            <li>Risque limité</li>
                            <li>Remboursement garanti à échéance</li>
                            <li>Revenus d'intérêts réguliers</li>
                        </ul>
                    </div>

                    <div class="pricing-footer mt-4">
                        <a href="inscription-investisseur.php?type=obligataire" class="btn btn-outline-primary btn-lg w-100">Devenir investisseur obligataire</a>
                    </div>
                </div>
            </div>

            <!-- Investisseur Actionnaire -->
            <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing-card investor-card featured">
                    <div class="pricing-badge popular">Actionnaire</div>
                    <div class="popular-label">Recommandé</div>
                    <div class="pricing-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <h3 class="investor-title">Investisseur Actionnaire</h3>
                    <p class="investor-description">Participation au capital avec potentiel de croissance élevé. Pour les investisseurs souhaitant s'impliquer activement dans les projets.</p>

                    <ul class="pricing-features">
                        <li><i class="bi bi-check-circle-fill"></i> Accès aux projets selon votre catégorie</li>
                        <li><i class="bi bi-check-circle-fill"></i> Espace de rendez-vous avec la CIA et les porteurs de projets</li>
                        <li><i class="bi bi-check-circle-fill"></i> Espace de formation dédié</li>
                        <li><i class="bi bi-check-circle-fill"></i> Consultation des événements en cours</li>
                        <li><i class="bi bi-check-circle-fill"></i> Validation des transactions financières par l'admin</li>
                        <li><i class="bi bi-check-circle-fill"></i> Participation à des événements VIP</li>
                    </ul>

                    <div class="investor-benefits mt-4">
                        <h5 class="benefits-subtitle"><i class="bi bi-star-fill"></i> Avantages</h5>
                        <ul class="benefits-list-small">
                            <li>Potentiel de rendement élevé</li>
                            <li>Participation aux décisions stratégiques</li>
                            <li>Dividendes sur les bénéfices</li>
                            <li>Plus-value à la revente</li>
                            <li>Accès VIP aux événements exclusifs</li>
                        </ul>
                    </div>

                    <div class="pricing-footer mt-4">
                        <a href="inscription-investisseur.php?type=actionnaire" class="btn btn-primary btn-lg w-100">Devenir investisseur actionnaire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comparison Section -->
<section class="comparison-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-badge">Comparaison</span>
            <h2 class="section-title">Tableau comparatif</h2>
            <p class="section-description">Comparez les deux types d'investissement pour faire le meilleur choix</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="comparison-table-wrapper" data-aos="fade-up">
                    <table class="table comparison-table">
                        <thead>
                            <tr>
                                <th>Fonctionnalités</th>
                                <th class="text-center">Obligataire</th>
                                <th class="text-center featured-col">Actionnaire</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Accès aux projets</td>
                                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                <td class="text-center featured-col"><i class="bi bi-check-circle-fill text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Rendez-vous avec la CIA</td>
                                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                <td class="text-center featured-col"><i class="bi bi-check-circle-fill text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Espace de formation</td>
                                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                <td class="text-center featured-col"><i class="bi bi-check-circle-fill text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Consultation des événements</td>
                                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                <td class="text-center featured-col"><i class="bi bi-check-circle-fill text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Validation transactions par admin</td>
                                <td class="text-center"><i class="bi bi-x-circle-fill text-muted"></i></td>
                                <td class="text-center featured-col"><i class="bi bi-check-circle-fill text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Événements VIP</td>
                                <td class="text-center"><i class="bi bi-x-circle-fill text-muted"></i></td>
                                <td class="text-center featured-col"><i class="bi bi-check-circle-fill text-success"></i></td>
                            </tr>
                            <tr>
                                <td><strong>Type de rendement</strong></td>
                                <td class="text-center">Fixe</td>
                                <td class="text-center featured-col">Variable</td>
                            </tr>
                            <tr>
                                <td><strong>Niveau de risque</strong></td>
                                <td class="text-center">Faible</td>
                                <td class="text-center featured-col">Moyen à élevé</td>
                            </tr>
                            <tr>
                                <td><strong>Potentiel de gain</strong></td>
                                <td class="text-center">Limité</td>
                                <td class="text-center featured-col">Élevé</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5">
    <div class="container">
        <div class="cta-wrapper" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="cta-title">Prêt à investir dans l'avenir de l'Afrique ?</h2>
                    <p class="cta-description">Rejoignez notre réseau d'investisseurs et participez au financement de projets innovants</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="#contact" class="btn btn-light btn-lg">Nous contacter <i class="bi bi-arrow-right ms-2"></i></a>
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS Animation Library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Custom JS -->
<script src="js/script.js"></script>
</body>

</html>