<?php
/**
 * Dashboard Gold V2 - Refonte Complète
 * Toutes les fonctionnalités Gold intégrées
 */

$current_page = 'dashboard';
$page_title = 'Dashboard Gold';
$user_name = 'Jean Dupont';
$user_email = 'jean.dupont@example.com';
$user_plan = 'Gold';
$user_avatar = 'https://ui-avatars.com/api/?name=Jean+Dupont&background=198754&color=fff&size=200';
$projects_count = 2;
$projects_limit = 2; // Limite Gold
$messages_unread = 5;
$events_upcoming = 3;
$formations_available = 8;
$rdv_pending = 1;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?> - CIA Invest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/dashboard-gold.css">
</head>
<body>
    <div class="bg-animated"></div>
    
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2>CIA Invest</h2>
            <div class="plan-badge-sidebar">
                <i class="bi bi-star-fill"></i> Gold
            </div>
        </div>
        
        <div class="sidebar-menu">
            <div class="menu-section">
                <div class="menu-label">Menu Principal</div>
                <a href="dashboard-gold-v2.php" class="menu-item active">
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
                <a href="mes-projets-gold.php" class="menu-item">
                    <i class="bi bi-folder-fill"></i>
                    <span>Mes Projets</span>
                    <span class="badge-count"><?php echo $projects_count; ?>/<?php echo $projects_limit; ?></span>
                </a>
                <a href="investisseurs-gold.php" class="menu-item">
                    <i class="bi bi-people-fill"></i>
                    <span>Investisseurs</span>
                </a>
                <a href="messagerie-gold.php" class="menu-item">
                    <i class="bi bi-chat-dots-fill"></i>
                    <span>Messagerie</span>
                    <?php if($messages_unread > 0): ?>
                    <span class="badge-notif"><?php echo $messages_unread; ?></span>
                    <?php endif; ?>
                </a>
            </div>
            
            <div class="menu-section">
                <div class="menu-label">Événements & Formations</div>
                <a href="evenements-gold.php" class="menu-item">
                    <i class="bi bi-calendar-event-fill"></i>
                    <span>Événements</span>
                    <span class="badge-count"><?php echo $events_upcoming; ?></span>
                </a>
                <a href="formations-gold.php" class="menu-item">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span>Formations</span>
                    <span class="badge-count"><?php echo $formations_available; ?></span>
                </a>
            </div>
            
            <div class="menu-section">
                <div class="menu-label">Services CIA</div>
                <a href="rendez-vous-cia.php" class="menu-item">
                    <i class="bi bi-camera-video-fill"></i>
                    <span>Rendez-vous CIA</span>
                    <?php if($rdv_pending > 0): ?>
                    <span class="badge-notif"><?php echo $rdv_pending; ?></span>
                    <?php endif; ?>
                </a>
                <a href="support-gold.php" class="menu-item">
                    <i class="bi bi-headset"></i>
                    <span>Support 24/7</span>
                </a>
            </div>
            
            <div class="menu-section">
                <div class="menu-label">Compte</div>
                <a href="profil.php" class="menu-item">
                    <i class="bi bi-person-fill"></i>
                    <span>Mon Profil</span>
                </a>
                <a href="parametres.php" class="menu-item">
                    <i class="bi bi-gear-fill"></i>
                    <span>Paramètres</span>
                </a>
            </div>
        </div>
    </div>
    
    <div class="main-container">
        <!-- Header -->
        <div class="dashboard-header">
            <div class="header-content">
                <div>
                    <h1 class="welcome-title">Bonjour, <?php echo explode(' ', $user_name)[0]; ?> 👋</h1>
                    <p class="welcome-subtitle">Voici votre tableau de bord Gold</p>
                </div>
                <div class="header-actions">
                    <button class="btn-icon" onclick="window.location.href='messagerie-gold.php'">
                        <i class="bi bi-chat-dots"></i>
                        <?php if($messages_unread > 0): ?>
                        <span class="notif-dot"></span>
                        <?php endif; ?>
                    </button>
                    <button class="btn-icon" onclick="window.location.href='notifications.php'">
                        <i class="bi bi-bell"></i>
                        <span class="notif-dot"></span>
                    </button>
                    <div class="user-avatar" onclick="window.location.href='profil.php'">
                        <img src="<?php echo $user_avatar; ?>" alt="<?php echo $user_name; ?>">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Gold Features Overview -->
        <div class="features-grid">
            <!-- Projets -->
            <div class="feature-card projects-card">
                <div class="feature-icon">
                    <i class="bi bi-folder-fill"></i>
                </div>
                <div class="feature-content">
                    <h3>Mes Projets</h3>
                    <p class="feature-value"><?php echo $projects_count; ?>/<?php echo $projects_limit; ?></p>
                    <p class="feature-desc">Projets publiés</p>
                    <div class="progress-bar-mini">
                        <div class="progress-fill-mini" style="width: <?php echo ($projects_count/$projects_limit)*100; ?>%"></div>
                    </div>
                </div>
                <a href="mes-projets-gold.php" class="feature-link">
                    Gérer <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            
            <!-- Messagerie -->
            <div class="feature-card messages-card">
                <div class="feature-icon">
                    <i class="bi bi-chat-dots-fill"></i>
                </div>
                <div class="feature-content">
                    <h3>Messagerie</h3>
                    <p class="feature-value"><?php echo $messages_unread; ?></p>
                    <p class="feature-desc">Messages non lus</p>
                    <?php if($messages_unread > 0): ?>
                    <span class="badge-urgent">Nouveaux messages</span>
                    <?php endif; ?>
                </div>
                <a href="messagerie-gold.php" class="feature-link">
                    Ouvrir <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            
            <!-- Rendez-vous CIA -->
            <div class="feature-card rdv-card">
                <div class="feature-icon">
                    <i class="bi bi-camera-video-fill"></i>
                </div>
                <div class="feature-content">
                    <h3>Rendez-vous CIA</h3>
                    <p class="feature-value"><?php echo $rdv_pending; ?></p>
                    <p class="feature-desc">En attente</p>
                    <span class="badge-success">Service exclusif</span>
                </div>
                <a href="rendez-vous-cia.php" class="feature-link">
                    Planifier <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            
            <!-- Événements -->
            <div class="feature-card events-card">
                <div class="feature-icon">
                    <i class="bi bi-calendar-event-fill"></i>
                </div>
                <div class="feature-content">
                    <h3>Événements</h3>
                    <p class="feature-value"><?php echo $events_upcoming; ?></p>
                    <p class="feature-desc">À venir</p>
                    <span class="badge-info">En ligne & Présentiel</span>
                </div>
                <a href="evenements-gold.php" class="feature-link">
                    Voir tout <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            
            <!-- Formations -->
            <div class="feature-card formations-card">
                <div class="feature-icon">
                    <i class="bi bi-mortarboard-fill"></i>
                </div>
                <div class="feature-content">
                    <h3>Formations</h3>
                    <p class="feature-value"><?php echo $formations_available; ?></p>
                    <p class="feature-desc">Disponibles</p>
                    <span class="badge-warning">Accès illimité</span>
                </div>
                <a href="formations-gold.php" class="feature-link">
                    Explorer <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            
            <!-- Investisseurs -->
            <div class="feature-card investors-card">
                <div class="feature-icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="feature-content">
                    <h3>Investisseurs</h3>
                    <p class="feature-value">2 types</p>
                    <p class="feature-desc">Obligataires & Actionnaires</p>
                    <span class="badge-purple">Choix flexible</span>
                </div>
                <a href="investisseurs-gold.php" class="feature-link">
                    Découvrir <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
        
        <!-- Quick Actions -->
        <div class="quick-actions-section">
            <h2 class="section-title">🚀 Actions Rapides</h2>
            <div class="quick-actions-grid">
                <a href="creer-projet.php" class="quick-action-btn primary">
                    <i class="bi bi-plus-circle-fill"></i>
                    <span>Publier un Projet</span>
                </a>
                <a href="rendez-vous-cia.php" class="quick-action-btn secondary">
                    <i class="bi bi-calendar-plus"></i>
                    <span>Demander un RDV</span>
                </a>
                <a href="messagerie-gold.php" class="quick-action-btn tertiary">
                    <i class="bi bi-send-fill"></i>
                    <span>Envoyer un Message</span>
                </a>
                <a href="evenements-gold.php" class="quick-action-btn quaternary">
                    <i class="bi bi-ticket-perforated"></i>
                    <span>Réserver un Événement</span>
                </a>
            </div>
        </div>
        
        <!-- Recent Activity -->
        <div class="activity-section">
            <h2 class="section-title">📊 Activité Récente</h2>
            <div class="activity-timeline">
                <div class="activity-item">
                    <div class="activity-icon success">
                        <i class="bi bi-check-circle-fill"></i>
                    </div>
                    <div class="activity-content">
                        <h4>Projet publié avec succès</h4>
                        <p>Votre projet "Application Mobile E-commerce" est maintenant visible</p>
                        <span class="activity-time">Il y a 2 heures</span>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon info">
                        <i class="bi bi-person-plus-fill"></i>
                    </div>
                    <div class="activity-content">
                        <h4>Nouvel investisseur intéressé</h4>
                        <p>Marie Kouadio a manifesté son intérêt pour votre projet</p>
                        <span class="activity-time">Il y a 5 heures</span>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon warning">
                        <i class="bi bi-calendar-check-fill"></i>
                    </div>
                    <div class="activity-content">
                        <h4>Événement à venir</h4>
                        <p>Séminaire "Pitch Perfect" - Demain à 14h00</p>
                        <span class="activity-time">Demain</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/dashboard-gold.js"></script>
</body>
</html>
