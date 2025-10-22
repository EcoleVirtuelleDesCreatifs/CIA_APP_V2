    <!-- 
    ========================================
    Footer Template - CIA Invest
    ========================================
    Pied de page réutilisable pour toutes les pages
    Inclut les liens, informations de contact et scripts JS
    
    @package CIA_Invest
    @version 1.0
    -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Colonne 1 : Logo et description -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-brand mb-4">
                        <span class="brand-text">CIA</span>
                        <span class="brand-subtitle">Invest</span>
                    </div>
                    <p class="footer-description">Organisation dynamique dédiée à la promotion de l'investissement en Afrique : Échanges entre les investisseurs africains et internationaux.</p>
                    
                    <!-- Liens réseaux sociaux -->
                    <div class="social-links mt-4">
                        <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                
                <!-- Colonne 2 : Réseau des Investisseurs -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-title">Réseau des Investisseurs</h4>
                    <ul class="footer-links">
                        <li><a href="#reseau-international">Réseau des investisseurs international</a></li>
                        <li><a href="#references">Nos références</a></li>
                    </ul>
                </div>
                
                <!-- Colonne 3 : Espace membre -->
                <div class="col-lg-2 col-md-6">
                    <h4 class="footer-title">Espace membre</h4>
                    <ul class="footer-links">
                        <li><a href="devenir-membre.php">Devenir membre</a></li>
                        <li><a href="devenir-investisseur.php">Devenir investisseur</a></li>
                        <li><a href="connexion.php">Se connecter</a></li>
                    </ul>
                </div>
                
                <!-- Colonne 4 : Contact -->
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

    <!-- Bootstrap 5 JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Custom JS -->
    <script src="js/script.js"></script>
    <script src="js/language-switcher.js"></script>
    <?php if (isset($extra_js) && is_array($extra_js)): ?>
        <?php foreach ($extra_js as $js_file): ?>
            <script src="js/<?php echo $js_file; ?>.js"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>
