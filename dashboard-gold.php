<?php
/**
 * Dashboard Gold Dynamique - CIA Invest
 * 
 * Tableau de bord avec navigation entre différentes sections
 * 
 * @package CIA_Invest
 * @version 1.0
 */

// Configuration
$current_page = 'dashboard';
$page_title = 'Dashboard Gold';
$user_name = 'Jean Dupont';
$user_plan = 'Gold';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?> - CIA Invest</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="dashboard-body">

<!-- Dashboard Top Bar -->
<nav class="dashboard-topbar">
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between align-items-center">
            <div class="topbar-brand">
                <img src="images/logo.png" alt="CIA Invest" class="dashboard-logo">
            </div>
            <div class="topbar-actions">
                <button class="btn-icon" title="Notifications">
                    <i class="bi bi-bell"></i>
                    <span class="notification-badge">3</span>
                </button>
                <button class="btn-icon" title="Messages">
                    <i class="bi bi-chat-dots"></i>
                    <span class="notification-badge">2</span>
                </button>
                <div class="user-menu">
                    <button class="user-menu-btn">
                        <i class="bi bi-person-circle"></i>
                        <span><?php echo $user_name; ?></span>
                        <i class="bi bi-chevron-down"></i>
                    </button>
                    <div class="user-dropdown">
                        <a href="#"><i class="bi bi-person"></i> Mon Profil</a>
                        <a href="#"><i class="bi bi-gear"></i> Paramètres</a>
                        <a href="index.php"><i class="bi bi-house"></i> Retour au site</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="text-danger"><i class="bi bi-box-arrow-right"></i> Déconnexion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Dashboard Hero -->
<section class="dashboard-hero">
    <div class="container-fluid">
        <div class="row align-items-center py-4 px-4">
            <div class="col-lg-8">
                <div class="welcome-section">
                    <h1 class="dashboard-title">Bienvenue, <?php echo $user_name; ?> 👋</h1>
                    <p class="dashboard-subtitle">Espace membre <span class="badge-gold">Gold</span></p>
                </div>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="plan-badge-large">
                    <i class="bi bi-star-fill"></i>
                    <span>Membre Gold</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dashboard Content -->
<section class="dashboard-section">
    <div class="container-fluid">
        <div class="row g-0">
            <!-- Sidebar Navigation -->
            <div class="col-lg-2 dashboard-sidebar-wrapper">
                <div class="dashboard-sidebar">
                    <nav class="sidebar-nav">
                        <a href="#" class="nav-item active" data-section="overview">
                            <i class="bi bi-grid"></i>
                            <span>Vue d'ensemble</span>
                        </a>
                        <a href="#" class="nav-item" data-section="projects">
                            <i class="bi bi-folder"></i>
                            <span>Mes Projets</span>
                            <span class="badge">2</span>
                        </a>
                        <a href="#" class="nav-item" data-section="calendar">
                            <i class="bi bi-calendar-event"></i>
                            <span>Événements</span>
                        </a>
                        <a href="#" class="nav-item" data-section="formations">
                            <i class="bi bi-mortarboard"></i>
                            <span>Formations</span>
                        </a>
                        <a href="#" class="nav-item" data-section="messages">
                            <i class="bi bi-chat-dots"></i>
                            <span>Messages</span>
                            <span class="badge badge-notification">3</span>
                        </a>
                        <a href="#" class="nav-item" data-section="meetings">
                            <i class="bi bi-camera-video"></i>
                            <span>Rendez-vous</span>
                        </a>
                        <a href="#" class="nav-item" data-section="investors">
                            <i class="bi bi-people"></i>
                            <span>Investisseurs</span>
                        </a>
                        <a href="#" class="nav-item" data-section="settings">
                            <i class="bi bi-gear"></i>
                            <span>Paramètres</span>
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="col-lg-10">
                <div class="dashboard-main-content">
                    
                    <!-- OVERVIEW SECTION -->
                    <div class="content-section active" id="overview-section">
                        <div class="section-header-dash mb-4">
                            <h2><i class="bi bi-grid me-2"></i>Vue d'ensemble</h2>
                            <p class="text-muted">Aperçu de votre activité</p>
                        </div>

                        <!-- Stats Cards -->
                        <div class="row g-4 mb-4">
                            <div class="col-md-3">
                                <div class="stat-card">
                                    <div class="stat-icon bg-primary"><i class="bi bi-folder-check"></i></div>
                                    <div class="stat-content">
                                        <h3 class="stat-number">2/2</h3>
                                        <p class="stat-label">Projets Publiés</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="stat-card">
                                    <div class="stat-icon bg-success"><i class="bi bi-eye"></i></div>
                                    <div class="stat-content">
                                        <h3 class="stat-number">1,234</h3>
                                        <p class="stat-label">Vues Totales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="stat-card">
                                    <div class="stat-icon bg-warning"><i class="bi bi-hand-thumbs-up"></i></div>
                                    <div class="stat-content">
                                        <h3 class="stat-number">12</h3>
                                        <p class="stat-label">Intérêts</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="stat-card">
                                    <div class="stat-icon bg-info"><i class="bi bi-calendar-event"></i></div>
                                    <div class="stat-content">
                                        <h3 class="stat-number">4</h3>
                                        <p class="stat-label">Événements</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Actions -->
                        <div class="row g-4">
                            <div class="col-lg-8">
                                <div class="dashboard-card">
                                    <div class="card-header-dashboard">
                                        <h4><i class="bi bi-lightning me-2"></i>Actions Rapides</h4>
                                    </div>
                                    <div class="card-body-dashboard">
                                        <div class="quick-actions-grid">
                                            <button class="quick-action-btn">
                                                <i class="bi bi-plus-circle"></i>
                                                <span>Nouveau Projet</span>
                                            </button>
                                            <button class="quick-action-btn">
                                                <i class="bi bi-calendar-plus"></i>
                                                <span>Réserver Event</span>
                                            </button>
                                            <button class="quick-action-btn">
                                                <i class="bi bi-chat"></i>
                                                <span>Contacter CIA</span>
                                            </button>
                                            <button class="quick-action-btn">
                                                <i class="bi bi-people"></i>
                                                <span>Trouver Investisseurs</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="dashboard-card">
                                    <div class="card-header-dashboard">
                                        <h4><i class="bi bi-trophy me-2"></i>Progrès</h4>
                                    </div>
                                    <div class="card-body-dashboard">
                                        <div class="progress-item mb-3">
                                            <div class="d-flex justify-content-between mb-2">
                                                <span>Profil complété</span>
                                                <strong>85%</strong>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 85%"></div>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <div class="d-flex justify-content-between mb-2">
                                                <span>Projets actifs</span>
                                                <strong>100%</strong>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" style="width: 100%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PROJECTS SECTION -->
                    <div class="content-section" id="projects-section">
                        <div class="section-header-dash mb-4">
                            <div>
                                <h2><i class="bi bi-folder me-2"></i>Mes Projets</h2>
                                <p class="text-muted">Gérez vos 2 projets Gold</p>
                            </div>
                            <button class="btn btn-primary">
                                <i class="bi bi-plus-circle me-2"></i>Nouveau Projet
                            </button>
                        </div>

                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="project-card-full">
                                    <div class="project-header">
                                        <span class="badge bg-success">Actif</span>
                                        <div class="project-actions-dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </div>
                                    </div>
                                    <h3 class="project-title">Application Mobile Fintech</h3>
                                    <p class="project-desc">Solution de paiement mobile innovante pour l'Afrique de l'Ouest avec intégration Mobile Money.</p>
                                    <div class="project-stats">
                                        <div class="stat-item">
                                            <i class="bi bi-eye"></i>
                                            <span>856 vues</span>
                                        </div>
                                        <div class="stat-item">
                                            <i class="bi bi-heart"></i>
                                            <span>24 intérêts</span>
                                        </div>
                                        <div class="stat-item">
                                            <i class="bi bi-chat"></i>
                                            <span>8 messages</span>
                                        </div>
                                    </div>
                                    <div class="project-footer">
                                        <button class="btn btn-sm btn-outline-primary">Voir Détails</button>
                                        <button class="btn btn-sm btn-outline-secondary">Modifier</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="project-card-full">
                                    <div class="project-header">
                                        <span class="badge bg-info">En révision</span>
                                        <div class="project-actions-dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </div>
                                    </div>
                                    <h3 class="project-title">Plateforme E-commerce Bio</h3>
                                    <p class="project-desc">Marketplace de produits biologiques locaux connectant producteurs et consommateurs urbains.</p>
                                    <div class="project-stats">
                                        <div class="stat-item">
                                            <i class="bi bi-eye"></i>
                                            <span>378 vues</span>
                                        </div>
                                        <div class="stat-item">
                                            <i class="bi bi-heart"></i>
                                            <span>9 intérêts</span>
                                        </div>
                                        <div class="stat-item">
                                            <i class="bi bi-chat"></i>
                                            <span>3 messages</span>
                                        </div>
                                    </div>
                                    <div class="project-footer">
                                        <button class="btn btn-sm btn-outline-primary">Voir Détails</button>
                                        <button class="btn btn-sm btn-outline-secondary">Modifier</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CALENDAR SECTION -->
                    <div class="content-section" id="calendar-section">
                        <div class="section-header-dash mb-4">
                            <div>
                                <h2><i class="bi bi-calendar-event me-2"></i>Événements</h2>
                                <p class="text-muted">En ligne et présentiel - Avantage Gold</p>
                            </div>
                            <button class="btn btn-outline-primary">
                                <i class="bi bi-filter me-2"></i>Filtrer
                            </button>
                        </div>

                        <div class="events-list">
                            <div class="event-card-full">
                                <div class="event-date-large">
                                    <span class="day">15</span>
                                    <span class="month">NOV</span>
                                </div>
                                <div class="event-content">
                                    <div class="event-type-badge bg-primary">Présentiel</div>
                                    <h4 class="event-title">Networking Business - Abidjan</h4>
                                    <p class="event-description">Rencontrez investisseurs et entrepreneurs dans un cadre premium. Cocktail networking et pitch sessions.</p>
                                    <div class="event-meta">
                                        <span><i class="bi bi-geo-alt"></i> Sofitel Ivoire, Abidjan</span>
                                        <span><i class="bi bi-clock"></i> 18h00 - 21h00</span>
                                        <span><i class="bi bi-people"></i> 50 participants</span>
                                    </div>
                                </div>
                                <button class="btn btn-success">S'inscrire</button>
                            </div>

                            <div class="event-card-full">
                                <div class="event-date-large">
                                    <span class="day">22</span>
                                    <span class="month">NOV</span>
                                </div>
                                <div class="event-content">
                                    <div class="event-type-badge bg-info">En ligne</div>
                                    <h4 class="event-title">Webinaire : Stratégies de Financement 2024</h4>
                                    <p class="event-description">Apprenez les meilleures stratégies pour lever des fonds auprès d'investisseurs africains.</p>
                                    <div class="event-meta">
                                        <span><i class="bi bi-laptop"></i> Zoom</span>
                                        <span><i class="bi bi-clock"></i> 14h00 - 16h00</span>
                                        <span><i class="bi bi-people"></i> Illimité</span>
                                    </div>
                                </div>
                                <button class="btn btn-success">S'inscrire</button>
                            </div>
                        </div>
                    </div>

                    <!-- FORMATIONS SECTION -->
                    <div class="content-section" id="formations-section">
                        <div class="section-header-dash mb-4">
                            <div>
                                <h2><i class="bi bi-mortarboard me-2"></i>Formations</h2>
                                <p class="text-muted">Accès exclusif membre Gold</p>
                            </div>
                            <button class="btn btn-outline-primary">
                                <i class="bi bi-grid me-2"></i>Catalogue Complet
                            </button>
                        </div>

                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="formation-card-complete">
                                    <div class="formation-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                        <i class="bi bi-file-earmark-text"></i>
                                    </div>
                                    <div class="formation-badge">Nouveau</div>
                                    <div class="formation-content">
                                        <h4 class="formation-title">Business Plan Gagnant</h4>
                                        <p class="formation-desc">Créez un business plan qui convainc les investisseurs</p>
                                        <div class="formation-meta">
                                            <span><i class="bi bi-clock"></i> 4h</span>
                                            <span><i class="bi bi-bar-chart"></i> Intermédiaire</span>
                                            <span><i class="bi bi-star-fill"></i> 4.8</span>
                                        </div>
                                        <button class="btn btn-primary w-100">Commencer</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="formation-card-complete">
                                    <div class="formation-image" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                                        <i class="bi bi-easel"></i>
                                    </div>
                                    <div class="formation-content">
                                        <h4 class="formation-title">Pitch Deck Professionnel</h4>
                                        <p class="formation-desc">Maîtrisez l'art de présenter votre projet</p>
                                        <div class="formation-meta">
                                            <span><i class="bi bi-clock"></i> 3h</span>
                                            <span><i class="bi bi-bar-chart"></i> Débutant</span>
                                            <span><i class="bi bi-star-fill"></i> 4.9</span>
                                        </div>
                                        <button class="btn btn-primary w-100">Commencer</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="formation-card-complete">
                                    <div class="formation-image" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                                        <i class="bi bi-graph-up-arrow"></i>
                                    </div>
                                    <div class="formation-content">
                                        <h4 class="formation-title">Stratégie de Croissance</h4>
                                        <p class="formation-desc">Développez votre entreprise rapidement</p>
                                        <div class="formation-meta">
                                            <span><i class="bi bi-clock"></i> 5h</span>
                                            <span><i class="bi bi-bar-chart"></i> Avancé</span>
                                            <span><i class="bi bi-star-fill"></i> 4.7</span>
                                        </div>
                                        <button class="btn btn-primary w-100">Commencer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MESSAGES SECTION -->
                    <div class="content-section" id="messages-section">
                        <div class="section-header-dash mb-4">
                            <div>
                                <h2><i class="bi bi-chat-dots me-2"></i>Messages</h2>
                                <p class="text-muted">Messagerie intégrée</p>
                            </div>
                            <button class="btn btn-primary">
                                <i class="bi bi-plus-circle me-2"></i>Nouveau Message
                            </button>
                        </div>

                        <div class="messages-container">
                            <div class="messages-list">
                                <div class="message-card active">
                                    <div class="message-avatar-large">
                                        <i class="bi bi-person-circle"></i>
                                    </div>
                                    <div class="message-info">
                                        <h5 class="message-sender-name">Marie Kouassi</h5>
                                        <p class="message-preview-text">Bonjour, je suis très intéressée par...</p>
                                        <span class="message-time-small">Il y a 2h</span>
                                    </div>
                                    <span class="badge bg-primary">3</span>
                                </div>
                                <div class="message-card">
                                    <div class="message-avatar-large">
                                        <i class="bi bi-person-circle"></i>
                                    </div>
                                    <div class="message-info">
                                        <h5 class="message-sender-name">Pierre Mensah</h5>
                                        <p class="message-preview-text">Merci pour les informations...</p>
                                        <span class="message-time-small">Hier</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MEETINGS SECTION -->
                    <div class="content-section" id="meetings-section">
                        <div class="section-header-dash mb-4">
                            <div>
                                <h2><i class="bi bi-camera-video me-2"></i>Rendez-vous</h2>
                                <p class="text-muted">Avec l'équipe CIA Invest</p>
                            </div>
                            <button class="btn btn-primary">
                                <i class="bi bi-calendar-plus me-2"></i>Nouveau RDV
                            </button>
                        </div>

                        <div class="meetings-grid">
                            <div class="meeting-card">
                                <div class="meeting-status upcoming">À venir</div>
                                <h4 class="meeting-title">Consultation Stratégique</h4>
                                <p class="meeting-desc">Discussion sur la stratégie de financement de votre projet Fintech</p>
                                <div class="meeting-details">
                                    <span><i class="bi bi-calendar"></i> 20 Nov 2024</span>
                                    <span><i class="bi bi-clock"></i> 15h00</span>
                                    <span><i class="bi bi-person"></i> Antoine Diop</span>
                                </div>
                                <button class="btn btn-outline-primary w-100 mt-3">Rejoindre (Zoom)</button>
                            </div>
                        </div>
                    </div>

                    <!-- INVESTORS SECTION -->
                    <div class="content-section" id="investors-section">
                        <div class="section-header-dash mb-4">
                            <div>
                                <h2><i class="bi bi-people me-2"></i>Réseau d'Investisseurs</h2>
                                <p class="text-muted">Trouvez les bons investisseurs</p>
                            </div>
                            <button class="btn btn-outline-primary">
                                <i class="bi bi-funnel me-2"></i>Filtres
                            </button>
                        </div>

                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="investor-card">
                                    <div class="investor-avatar">
                                        <i class="bi bi-briefcase-fill"></i>
                                    </div>
                                    <h4 class="investor-name">Tech Ventures Africa</h4>
                                    <p class="investor-type">Fonds d'investissement</p>
                                    <div class="investor-tags">
                                        <span class="tag">Fintech</span>
                                        <span class="tag">E-commerce</span>
                                    </div>
                                    <p class="investor-desc">Spécialisé dans les startups tech africaines en phase seed et série A</p>
                                    <button class="btn btn-primary w-100">Contacter</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SETTINGS SECTION -->
                    <div class="content-section" id="settings-section">
                        <div class="section-header-dash mb-4">
                            <div>
                                <h2><i class="bi bi-gear me-2"></i>Paramètres</h2>
                                <p class="text-muted">Gérez votre compte</p>
                            </div>
                        </div>

                        <div class="row g-4">
                            <div class="col-lg-8">
                                <div class="dashboard-card">
                                    <div class="card-header-dashboard">
                                        <h4>Informations du Compte</h4>
                                    </div>
                                    <div class="card-body-dashboard">
                                        <form>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <label class="form-label">Nom</label>
                                                    <input type="text" class="form-control" value="Dupont">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Prénom</label>
                                                    <input type="text" class="form-control" value="Jean">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" value="jean.dupont@example.com">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="dashboard-card">
                                    <div class="card-header-dashboard">
                                        <h4>Plan Gold</h4>
                                    </div>
                                    <div class="card-body-dashboard">
                                        <div class="plan-info">
                                            <div class="plan-badge-large mb-3">
                                                <i class="bi bi-star-fill"></i>
                                                <span>Gold</span>
                                            </div>
                                            <p><strong>1000$/an</strong></p>
                                            <p class="text-muted">Renouvellement : 15 Jan 2025</p>
                                            <button class="btn btn-outline-primary w-100">Gérer l'abonnement</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dashboard Navigation Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const navItems = document.querySelectorAll('.nav-item');
    const sections = document.querySelectorAll('.content-section');
    
    navItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all nav items
            navItems.forEach(nav => nav.classList.remove('active'));
            
            // Add active class to clicked item
            this.classList.add('active');
            
            // Get target section
            const targetSection = this.dataset.section;
            
            // Hide all sections
            sections.forEach(section => section.classList.remove('active'));
            
            // Show target section
            document.getElementById(targetSection + '-section').classList.add('active');
            
            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    });
});
</script>

<?php
// Inclure le footer
include 'partials/footer.php';
?>
