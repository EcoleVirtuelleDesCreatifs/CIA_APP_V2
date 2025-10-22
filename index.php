<?php
$current_page = 'index';
$page_title = 'Accueil';
include 'partials/header.php';
?>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <span class="hero-badge">Chambre des Investisseurs Africains</span>
                        <h1 class="hero-title">Une force collective du <span class="text-gradient">financement</span> et de l'innovation en Afrique</h1>
                        <p class="hero-description">Organisation dynamique dédiée à la promotion de l'investissement en Afrique : Échanges entre les investisseurs africains et internationaux.</p>
                        <div class="hero-cta">
                            <a href="devenir-membre.php" class="btn btn-primary btn-lg me-3">Rejoindre la CIA <i class="bi bi-arrow-right ms-2"></i></a>
                            <a href="#about" class="btn btn-outline-dark btn-lg">En savoir plus</a>
                        </div>
                        <div class="hero-stats mt-5">
                            <div class="row">
                                <div class="col-4">
                                    <div class="stat-item">
                                        <h3 class="stat-number"><i class="bi bi-people-fill"></i></h3>
                                        <p class="stat-label">Réseau d'investisseurs</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="stat-item">
                                        <h3 class="stat-number"><i class="bi bi-globe-africa"></i></h3>
                                        <p class="stat-label">Portée internationale</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="stat-item">
                                        <h3 class="stat-number"><i class="bi bi-graph-up-arrow"></i></h3>
                                        <p class="stat-label">Croissance durable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="hero-visual">
                        <div class="visual-circle"></div>
                        <div class="floating-card card-1">
                            <i class="bi bi-graph-up text-primary"></i>
                            <span>Croissance</span>
                        </div>
                        <div class="floating-card card-2">
                            <i class="bi bi-people text-primary"></i>
                            <span>Performance</span>
                        </div>
                        <div class="floating-card card-3">
                            <i class="bi bi-shield-check text-primary"></i>
                            <span>Sécurité</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator"><a href="#services"><i class="bi bi-chevron-down"></i></a></div>
    </section>

    <!-- Missions Section -->
    <section id="missions" class="services-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-badge">Nos Missions</span>
                <h2 class="section-title">Notre engagement pour le développement de l'Afrique</h2>
                <p class="section-description">Des programmes innovants pour faciliter l'accès au financement et promouvoir l'investissement en Afrique</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-cash-stack"></i></div>
                        <h3 class="service-title">Levée de Fonds Communautaire</h3>
                        <p class="service-description">Le Financement Solidaire des Entreprises. Grâce à une garantie collective et une avalisation des membres, nous facilitons l'obtention d'emprunts.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h3 class="service-title">Accompagnement à la Préparation aux Financements</h3>
                        <p class="service-description">Nous aidons à rédiger des business plans solides, à évaluer les besoins en financement, et à suivre des formations pratiques.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-people-fill"></i></div>
                        <h3 class="service-title">Connecter les Opportunités</h3>
                        <p class="service-description">Forums, Conférences et Réseautage avec les Investisseurs. Nous organisons des rencontres entre entrepreneurs africains et bailleurs de fonds.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-award"></i></div>
                        <h3 class="service-title">Valoriser les Entreprises Africaines</h3>
                        <p class="service-description">Promotion Internationale, Label de Qualité et Présence Mondiale. Nous mettons en lumière les entreprises africaines à l'échelle internationale.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-diagram-3"></i></div>
                        <h3 class="service-title">Partenariats Stratégiques</h3>
                        <p class="service-description">Nous favorisons la collaboration avec des institutions financières et créons des synergies sectorielles pour renforcer les capacités de financement.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-clipboard-check"></i></div>
                        <h3 class="service-title">Suivi et Évaluation des Projets</h3>
                        <p class="service-description">Assurer la Performance et la Durabilité. Nous assurons un suivi post-financement rigoureux pour garantir l'utilisation efficace des fonds.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="expertise-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="expertise-visual">
                        <div class="expertise-image-wrapper">
                            <div class="expertise-badge badge-1"><i class="bi bi-heart-fill"></i><span>Altruisme</span></div>
                            <div class="expertise-badge badge-2"><i class="bi bi-globe-africa"></i><span>Afrique</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="expertise-content">
                        <span class="section-badge">À propos</span>
                        <h2 class="section-title mb-4">La Chambre des Investisseurs Africains</h2>
                        <p class="mb-4">La Chambre des Investisseurs Africains (CIA) est une force collective du financement, du développement et de l'innovation sur le continent. L'accès inclusif au financement constitue sa motivation principale.</p>
                        
                        <p class="mb-4">L'altruisme est au cœur de la CIA, car elle transcende les frontières culturelles, religieuses, politiques et sociales, montrant le désir d'aider et de lutter contre la pauvreté. Elle réunit expertises et finances de toutes les entreprises pour freiner la précarité des entreprises africaines.</p>
                        
                        <p class="mb-4">Il est important de rejoindre la Chambre des Investisseurs Africains pour participer activement au développement du continent et avoir un impact plus important sur sa communauté, tout en occupant une position décisionnelle significative.</p>
                        
                        <a href="devenir-membre.php" class="btn btn-primary btn-lg mt-4">Rejoindre la CIA <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="process-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-badge">Notre Méthode</span>
                <h2 class="section-title">Un processus simple et efficace</h2>
                <p class="section-description">En 4 étapes, nous construisons ensemble votre stratégie d'investissement</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-card">
                        <div class="process-number">01</div>
                        <div class="process-icon"><i class="bi bi-chat-dots"></i></div>
                        <h3 class="process-title">Échange initial</h3>
                        <p class="process-description">Nous écoutons vos besoins et analysons votre situation</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-card">
                        <div class="process-number">02</div>
                        <div class="process-icon"><i class="bi bi-graph-up"></i></div>
                        <h3 class="process-title">Analyse approfondie</h3>
                        <p class="process-description">Étude détaillée de votre patrimoine et de vos objectifs</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-card">
                        <div class="process-number">03</div>
                        <div class="process-icon"><i class="bi bi-lightbulb"></i></div>
                        <h3 class="process-title">Stratégie sur mesure</h3>
                        <p class="process-description">Élaboration d'une stratégie personnalisée et adaptée</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="process-card">
                        <div class="process-number">04</div>
                        <div class="process-icon"><i class="bi bi-rocket-takeoff"></i></div>
                        <h3 class="process-title">Mise en œuvre</h3>
                        <p class="process-description">Déploiement et suivi régulier de votre stratégie</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-badge">Témoignages</span>
                <h2 class="section-title">Ce que disent nos clients</h2>
                <p class="section-description">Découvrez les expériences de ceux qui nous font confiance</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testimonial-text">"Grâce à la CIA, j'ai pu développer mon entreprise et accéder à des financements que je n'aurais jamais imaginés. L'accompagnement est exceptionnel."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <div class="author-info">
                                <h4 class="author-name">Amadou Diallo</h4>
                                <p class="author-role">Entrepreneur, Sénégal</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testimonial-text">"Une plateforme professionnelle qui facilite vraiment les échanges entre investisseurs et porteurs de projets. Je recommande vivement."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <div class="author-info">
                                <h4 class="author-name">Marie Kouassi</h4>
                                <p class="author-role">Investisseur, Côte d'Ivoire</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testimonial-text">"Le réseau de la CIA m'a permis de trouver des partenaires stratégiques et de faire croître mon activité de manière significative."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <div class="author-info">
                                <h4 class="author-name">Jean-Paul Mbala</h4>
                                <p class="author-role">CEO, Cameroun</p>
                            </div>
                        </div>
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
                        <h2 class="cta-title">Prêt à faire partie de notre réseau ?</h2>
                        <p class="cta-description">Rejoignez des centaines d'entrepreneurs et d'investisseurs qui font confiance à la CIA</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="devenir-membre.php" class="btn btn-light btn-lg">Devenir membre <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-badge">Contact</span>
                <h2 class="section-title">Contactez-nous</h2>
                <p class="section-description">Notre équipe est à votre écoute pour répondre à toutes vos questions</p>
            </div>
            
            <div class="row g-5">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="contact-info">
                        <h3 class="contact-title mb-4">Nos coordonnées</h3>
                        <div class="contact-details">
                            <div class="contact-item">
                                <div class="contact-icon"><i class="bi bi-geo-alt-fill"></i></div>
                                <div class="contact-content">
                                    <h4>Adresse</h4>
                                    <p>ANGRE - Soleil 3 - Villa 105<br>Abidjan - Côte d'Ivoire</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon"><i class="bi bi-telephone-fill"></i></div>
                                <div class="contact-content">
                                    <h4>Téléphone</h4>
                                    <p>(+225) 27 22 21 83 33<br>05 96 79 08 02</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon"><i class="bi bi-envelope-fill"></i></div>
                                <div class="contact-content">
                                    <h4>Email</h4>
                                    <p>contact@cia-invest.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8" data-aos="fade-left">
                    <div class="contact-form-wrapper">
                        <form id="contactForm" class="contact-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="contactName" class="form-label">Nom complet</label>
                                    <input type="text" class="form-control" id="contactName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="contactEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="contactEmail" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="contactPhone" class="form-label">Téléphone</label>
                                    <input type="tel" class="form-control" id="contactPhone">
                                </div>
                                <div class="col-md-6">
                                    <label for="contactSubject" class="form-label">Sujet</label>
                                    <select class="form-select" id="contactSubject" required>
                                        <option value="">Choisir un sujet</option>
                                        <option value="information">Demande d'information</option>
                                        <option value="membre">Devenir membre</option>
                                        <option value="investisseur">Devenir investisseur</option>
                                        <option value="partenariat">Partenariat</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="contactMessage" class="form-label">Message</label>
                                    <textarea class="form-control" id="contactMessage" rows="5" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="bi bi-send me-2"></i> Envoyer le message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include 'partials/footer.php';
?>
