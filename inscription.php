<?php
/**
 * Page Inscription Membre - CIA Invest
 * 
 * Formulaire d'inscription pour les membres (Silver, Gold, Platinum)
 * 
 * @package CIA_Invest
 * @version 1.0
 */

// Configuration de la page
$current_page = 'inscription';
$page_title = 'Inscription';

// Détecter le plan choisi
$plan = isset($_GET['plan']) ? $_GET['plan'] : 'silver';

// Configuration vendeuse selon le plan
$config = [
    'silver' => [
        'badge_icon' => 'bi-star',
        'badge_text' => 'Formule Essentielle',
        'title' => 'Silver',
        'subtitle' => 'Commencez votre aventure entrepreneuriale avec les outils essentiels pour réussir',
        'benefits' => [
            ['icon' => 'bi-rocket-takeoff', 'title' => 'Lancez Votre Projet', 'desc' => 'Publiez votre premier projet et connectez-vous avec des investisseurs'],
            ['icon' => 'bi-calendar-check', 'title' => 'Accès aux Événements', 'desc' => 'Calendrier exclusif des rencontres et opportunités'],
            ['icon' => 'bi-chat-dots', 'title' => 'Support Direct', 'desc' => 'Rendez-vous en ligne avec l’équipe CIA pour vous guider']
        ],
        'cta' => 'Commencez votre succès dès aujourd’hui',
        'color' => '#6c757d'
    ],
    'gold' => [
        'badge_icon' => 'bi-star-fill',
        'badge_text' => 'Formule Populaire',
        'title' => 'Gold',
        'subtitle' => 'Le choix des entrepreneurs ambitieux qui veulent maximiser leurs opportunités',
        'benefits' => [
            ['icon' => 'bi-lightning-charge', 'title' => 'Double Visibilité', 'desc' => 'Publiez 2 projets et multipliez vos chances de financement'],
            ['icon' => 'bi-mortarboard', 'title' => 'Formations Exclusives', 'desc' => 'Accédez aux formations en ligne et présentiel pour maîtriser votre marché'],
            ['icon' => 'bi-people-fill', 'title' => 'Réseau Premium', 'desc' => 'Participez aux événements VIP et agrandissez votre réseau']
        ],
        'cta' => 'Débloquez tout votre potentiel maintenant',
        'color' => '#ffc107'
    ],
    'platinum' => [
        'badge_icon' => 'bi-gem',
        'badge_text' => 'Formule Élite',
        'title' => 'Platinum',
        'subtitle' => 'La formule ultime pour les leaders qui visent le sommet et veulent tout',
        'benefits' => [
            ['icon' => 'bi-trophy', 'title' => 'Maximum d’Impact', 'desc' => '3 projets publiés pour maximiser votre présence et opportunités'],
            ['icon' => 'bi-graph-up-arrow', 'title' => 'Baromètre Exclusif', 'desc' => 'Accédez aux données du marché et tendances de financement'],
            ['icon' => 'bi-star-fill', 'title' => 'Privilèges VIP', 'desc' => 'Tous les avantages Gold + accès prioritaire et accompagnement premium']
        ],
        'cta' => 'Rejoignez l’élite des entrepreneurs africains',
        'color' => '#b8860b'
    ]
];

$current_config = $config[$plan];

// Inclure le header
include 'partials/header.php';
?>

<!-- Hero Section -->
<section class="registration-hero">
    <div class="hero-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <div class="hero-badge mb-3">
                    <i class="<?php echo $current_config['badge_icon']; ?> me-2"></i><?php echo $current_config['badge_text']; ?>
                </div>
                <h1 class="hero-title text-white mb-3"><?php echo $current_config['title']; ?></h1>
                <p class="hero-subtitle text-white mb-0"><?php echo $current_config['subtitle']; ?></p>
            </div>
        </div>
    </div>
    <div class="hero-wave">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z" fill="#f8fafc"/>
        </svg>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section py-5">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-10 text-center" data-aos="fade-up">
                <h2 class="section-title mb-3">Pourquoi choisir la formule <?php echo ucfirst($plan); ?> ?</h2>
                <p class="section-description"><?php echo $current_config['cta']; ?></p>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <?php foreach ($current_config['benefits'] as $index => $benefit): ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                <div class="benefit-card">
                    <div class="benefit-icon" style="background: linear-gradient(135deg, <?php echo $current_config['color']; ?>15 0%, <?php echo $current_config['color']; ?>05 100%);">
                        <i class="bi <?php echo $benefit['icon']; ?>" style="color: <?php echo $current_config['color']; ?>;"></i>
                    </div>
                    <h4 class="benefit-title"><?php echo $benefit['title']; ?></h4>
                    <p class="benefit-desc"><?php echo $benefit['desc']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Registration Section -->
<section class="registration-section py-5">
    <div class="container">
        <!-- Page Header -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10 text-center" data-aos="fade-up">
                <span class="section-badge">Inscription</span>
                <h2 class="section-title">Rejoignez CIA Invest</h2>
                <p class="section-description">Complétez le formulaire ci-dessous pour devenir membre</p>
            </div>
        </div>

        <!-- Two Column Layout -->
        <div class="row justify-content-center">
            <!-- Left Column - Plan Display (Sticky) -->
            <div class="col-lg-4 col-md-5 mb-4 mb-lg-0" data-aos="fade-right">
                <div class="plan-display-sticky">
                    <div class="card">
                        <div class="card-body text-center" id="selectedPlanDisplay">
                            <!-- Plan details will be inserted here by JavaScript -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Registration Form -->
            <div class="col-lg-7 col-md-7" data-aos="fade-left" data-aos-delay="100">
                <div class="card">
                    <div class="card-body p-4">
                        <!-- Progress Indicator -->
                        <div class="form-progress-wrapper mb-4">
                            <div class="form-progress-steps">
                                <div class="progress-step active" data-step="1">
                                    <div class="step-circle">1</div>
                                    <div class="step-label">Profil</div>
                                </div>
                                <div class="progress-line"></div>
                                <div class="progress-step" data-step="2">
                                    <div class="step-circle">2</div>
                                    <div class="step-label">Informations</div>
                                </div>
                                <div class="progress-line"></div>
                                <div class="progress-step" data-step="3">
                                    <div class="step-circle">3</div>
                                    <div class="step-label">Confirmation</div>
                                </div>
                            </div>
                        </div>

                        <form id="registrationForm">
                            <!-- Profile Type -->
                            <div class="mb-4">
                                <label class="form-label fw-bold mb-3">Type de profil</label>
                                <div class="profile-type-selector">
                                    <div class="profile-card">
                                        <input class="form-check-input" type="radio" name="profileType" id="individual" value="individual" checked>
                                        <label class="profile-card-label" for="individual">
                                            <div class="profile-card-icon">
                                                <i class="bi bi-person-fill"></i>
                                            </div>
                                            <div class="profile-card-content">
                                                <h6 class="profile-card-title">Particulier</h6>
                                                <p class="profile-card-desc">Inscription individuelle</p>
                                            </div>
                                            <div class="profile-card-check">
                                                <i class="bi bi-check-circle-fill"></i>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="profile-card">
                                        <input class="form-check-input" type="radio" name="profileType" id="company" value="company">
                                        <label class="profile-card-label" for="company">
                                            <div class="profile-card-icon">
                                                <i class="bi bi-building"></i>
                                            </div>
                                            <div class="profile-card-content">
                                                <h6 class="profile-card-title">Entreprise</h6>
                                                <p class="profile-card-desc">Inscription professionnelle</p>
                                            </div>
                                            <div class="profile-card-check">
                                                <i class="bi bi-check-circle-fill"></i>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Personal Information -->
                            <h5 class="mb-3"><i class="bi bi-person-lines-fill me-2"></i>Informations personnelles</h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label">Nom <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="lastName" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="firstName" class="form-label">Prénom <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="firstName" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Téléphone <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="phone" placeholder="+225 XX XX XX XX XX" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="whatsapp" class="form-label">WhatsApp</label>
                                    <input type="tel" class="form-control" id="whatsapp" placeholder="+225 XX XX XX XX XX">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="country" class="form-label">Pays <span class="text-danger">*</span></label>
                                    <select class="form-select" id="country" required>
                                        <option value="">Sélectionnez un pays</option>
                                        <option value="CI">Côte d'Ivoire</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="ML">Mali</option>
                                        <option value="SN">Sénégal</option>
                                        <option value="BJ">Bénin</option>
                                        <option value="TG">Togo</option>
                                        <option value="GH">Ghana</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="CM">Cameroun</option>
                                        <option value="Other">Autre</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="address" class="form-label">Adresse <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="address" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="location" class="form-label">Ville <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="location" required>
                                </div>
                            </div>

                            <!-- Company Fields (hidden by default) -->
                            <div id="companyFields" style="display: none;">
                                <h5 class="mb-3 mt-4"><i class="bi bi-building me-2"></i>Informations entreprise</h5>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="companyName" class="form-label">Nom de l'entreprise</label>
                                        <input type="text" class="form-control" id="companyName">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="commerceRegistry" class="form-label">Registre de commerce</label>
                                        <input type="text" class="form-control" id="commerceRegistry">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="taxNumber" class="form-label">Numéro fiscal</label>
                                        <input type="text" class="form-control" id="taxNumber">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="sector" class="form-label">Secteur d'activité</label>
                                        <select class="form-select" id="sector">
                                            <option value="">Sélectionnez un secteur</option>
                                            <option value="agriculture">Agriculture</option>
                                            <option value="industrie">Industrie</option>
                                            <option value="services">Services</option>
                                            <option value="commerce">Commerce</option>
                                            <option value="technologie">Technologie</option>
                                            <option value="finance">Finance</option>
                                            <option value="immobilier">Immobilier</option>
                                            <option value="energie">Énergie</option>
                                            <option value="autre">Autre</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Motivation -->
                            <div class="mb-4 mt-4">
                                <label for="motivation" class="form-label">Motivation <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="motivation" rows="4" placeholder="Expliquez pourquoi vous souhaitez rejoindre CIA Invest..." required></textarea>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms" required>
                                    <label class="form-check-label" for="terms">
                                        J'accepte les <a href="#" class="text-primary">conditions générales</a> et la <a href="#" class="text-primary">politique de confidentialité</a> <span class="text-danger">*</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="bi bi-check-circle me-2"></i>Valider l'inscription
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Back Link -->
                <div class="text-center mt-4">
                    <a href="devenir-membre.php" class="btn btn-link">
                        <i class="bi bi-arrow-left me-2"></i>Retour aux formules
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Scripts supplémentaires spécifiques à cette page
$extra_js = ['inscription'];
// Inclure le footer
include 'partials/footer.php';
?>
