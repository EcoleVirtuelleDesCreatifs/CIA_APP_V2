<?php
/**
 * Dashboard Silver - CIA Invest
 * Fonctionnalités Silver : 1 projet, RDV CIA, Événements, Messagerie, Investisseurs
 */

$current_page = 'dashboard';
$page_title = 'Dashboard Silver';
$user_name = 'Marie Kouadio';
$user_email = 'marie.kouadio@example.com';
$user_plan = 'Silver';
$user_avatar = 'https://ui-avatars.com/api/?name=Marie+Kouadio&background=6366f1&color=fff&size=200';
$projects_count = 1;
$projects_limit = 1; // Limite Silver
$messages_unread = 3;
$events_upcoming = 2;
$rdv_pending = 0;
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
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: #f8fafc;
            color: #0f172a;
        }
        
        /* Sidebar épurée */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 280px;
            height: 100vh;
            background: white;
            border-right: 1px solid #e2e8f0;
            z-index: 1000;
            overflow-y: auto;
            padding: 2rem 0;
        }
        
        .sidebar-brand {
            padding: 0 2rem 2rem;
            text-align: center;
            border-bottom: 1px solid #e2e8f0;
            margin-bottom: 2rem;
        }
        
        .sidebar-brand h2 {
            font-size: 1.75rem;
            font-weight: 900;
            color: #6366f1;
            margin: 0 0 1rem 0;
        }
        
        .plan-badge-sidebar {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1.25rem;
            background: #6366f1;
            color: white;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.875rem;
        }
        
        .sidebar-menu {
            padding: 0 1rem;
        }
        
        .menu-section {
            margin-bottom: 2rem;
        }
        
        .menu-label {
            color: #94a3b8;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 0 1rem;
            margin-bottom: 0.75rem;
        }
        
        .menu-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            color: #64748b;
            text-decoration: none;
            border-radius: 12px;
            margin-bottom: 0.5rem;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .menu-item:hover {
            background: #f8fafc;
            color: #6366f1;
        }
        
        .menu-item.active {
            background: #6366f1;
            color: white;
        }
        
        .menu-item i {
            font-size: 1.25rem;
            width: 24px;
        }
        
        .badge-count {
            margin-left: auto;
            padding: 0.25rem 0.75rem;
            background: #f1f5f9;
            color: #64748b;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 700;
        }
        
        .menu-item.active .badge-count {
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }
        
        .badge-notif {
            margin-left: auto;
            padding: 0.25rem 0.5rem;
            min-width: 20px;
            background: #ef4444;
            color: white;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 700;
            text-align: center;
        }
        
        /* Main Container épuré */
        .main-container {
            margin-left: 280px;
            padding: 3rem 2rem;
            max-width: 1400px;
        }
        
        /* Header épuré */
        .dashboard-header {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            border: 1px solid #e2e8f0;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .welcome-title {
            font-size: 2.5rem;
            font-weight: 900;
            color: #0f172a;
            margin: 0;
        }
        
        .welcome-subtitle {
            color: #64748b;
            font-size: 1.125rem;
            margin: 0.5rem 0 0 0;
        }
        
        .header-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .btn-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 1px solid #e2e8f0;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            color: #64748b;
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
        }
        
        .btn-icon:hover {
            border-color: #6366f1;
            color: #6366f1;
        }
        
        .notif-dot {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 8px;
            height: 8px;
            background: #ef4444;
            border-radius: 50%;
            border: 2px solid white;
        }
        
        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid #6366f1;
            cursor: pointer;
        }
        
        .user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        /* Upgrade Banner épuré */
        .upgrade-banner {
            background: white;
            border: 2px solid #f59e0b;
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .upgrade-banner h4 {
            font-weight: 700;
            color: #0f172a;
            margin: 0 0 0.5rem 0;
        }
        
        .upgrade-banner p {
            color: #64748b;
            margin: 0;
        }
        
        .btn-upgrade {
            padding: 0.75rem 1.5rem;
            background: #f59e0b;
            color: white;
            border-radius: 12px;
            border: none;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-upgrade:hover {
            background: #d97706;
            transform: translateY(-2px);
            color: white;
        }
        
        /* Features Grid épuré */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .feature-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            border: 1px solid #e2e8f0;
            transition: all 0.3s;
        }
        
        .feature-card:hover {
            box-shadow: 0 20px 60px rgba(15, 23, 42, 0.08);
            transform: translateY(-4px);
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            background: #6366f1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            color: white;
            margin-bottom: 1.5rem;
        }
        
        .feature-content h3 {
            font-size: 1.125rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.75rem;
        }
        
        .feature-value {
            font-size: 2.5rem;
            font-weight: 900;
            color: #0f172a;
            margin: 0;
        }
        
        .feature-desc {
            color: #64748b;
            font-size: 0.9375rem;
            margin: 0.5rem 0 1rem 0;
        }
        
        .progress-bar-mini {
            height: 6px;
            background: #e2e8f0;
            border-radius: 50px;
            overflow: hidden;
            margin-top: 1rem;
        }
        
        .progress-fill-mini {
            height: 100%;
            background: #6366f1;
            border-radius: 50px;
            transition: width 1s ease;
        }
        
        .badge-urgent, .badge-success, .badge-info, .badge-purple {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 700;
            margin-top: 0.5rem;
        }
        
        .badge-urgent { background: #fef2f2; color: #ef4444; }
        .badge-success { background: #f0fdf4; color: #10b981; }
        .badge-info { background: #eff6ff; color: #3b82f6; }
        .badge-purple { background: #faf5ff; color: #8b5cf6; }
        
        .silver-badge {
            background: #f8fafc;
            color: #6366f1;
            border: 1px solid #e2e8f0;
        }
        
        .feature-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: #6366f1;
            text-decoration: none;
            font-weight: 700;
            margin-top: 1rem;
            transition: all 0.3s;
        }
        
        .feature-link:hover {
            gap: 1rem;
        }
        
        /* Quick Actions épuré */
        .quick-actions-section {
            margin-bottom: 2rem;
        }
        
        .section-title {
            font-size: 1.75rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 1.5rem;
        }
        
        .quick-actions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }
        
        .quick-action-btn {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.5rem;
            border-radius: 16px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.0625rem;
            transition: all 0.3s;
            background: white;
            color: #0f172a;
            border: 1px solid #e2e8f0;
        }
        
        .quick-action-btn i {
            font-size: 1.75rem;
            color: #6366f1;
        }
        
        .quick-action-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(15, 23, 42, 0.1);
            border-color: #6366f1;
            color: #6366f1;
        }
        
        /* Activity Section épurée */
        .activity-section {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            border: 1px solid #e2e8f0;
            margin-bottom: 2rem;
        }
        
        .activity-timeline {
            position: relative;
            padding-left: 3rem;
        }
        
        .activity-timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #e2e8f0;
        }
        
        .activity-item {
            position: relative;
            margin-bottom: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid #f1f5f9;
        }
        
        .activity-item:last-child {
            border-bottom: none;
        }
        
        .activity-icon {
            position: absolute;
            left: -3.25rem;
            top: 0;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.125rem;
            color: white;
            border: 3px solid white;
        }
        
        .activity-icon.success { background: #10b981; }
        .activity-icon.info { background: #3b82f6; }
        .activity-icon.warning { background: #f59e0b; }
        
        .activity-content h4 {
            font-size: 1.0625rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.5rem;
        }
        
        .activity-content p {
            color: #64748b;
            margin: 0 0 0.5rem 0;
        }
        
        .activity-time {
            color: #94a3b8;
            font-size: 0.875rem;
            font-weight: 600;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s;
            }
            
            .sidebar.active {
                transform: translateX(0);
            }
            
            .main-container {
                margin-left: 0;
                padding: 1.5rem;
            }
            
            .welcome-title {
                font-size: 1.75rem;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
            }
            
            .upgrade-banner {
                flex-direction: column;
                text-align: center;
                gap: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2>CIA Invest</h2>
            <div class="plan-badge-sidebar">
                <i class="bi bi-award-fill"></i> Silver
            </div>
        </div>
        
        <div class="sidebar-menu">
            <div class="menu-section">
                <div class="menu-label">Menu Principal</div>
                <a href="dashboard-silver.php" class="menu-item active">
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
                <a href="mes-projets-silver.php" class="menu-item">
                    <i class="bi bi-folder-fill"></i>
                    <span>Mon Projet</span>
                    <span class="badge-count"><?php echo $projects_count; ?>/<?php echo $projects_limit; ?></span>
                </a>
                <a href="investisseurs-silver.php" class="menu-item">
                    <i class="bi bi-people-fill"></i>
                    <span>Investisseurs</span>
                </a>
                <a href="messagerie-silver.php" class="menu-item">
                    <i class="bi bi-chat-dots-fill"></i>
                    <span>Messagerie</span>
                    <?php if($messages_unread > 0): ?>
                    <span class="badge-notif"><?php echo $messages_unread; ?></span>
                    <?php endif; ?>
                </a>
            </div>
            
            <div class="menu-section">
                <div class="menu-label">Événements</div>
                <a href="evenements-silver.php" class="menu-item">
                    <i class="bi bi-calendar-event-fill"></i>
                    <span>Événements</span>
                    <span class="badge-count"><?php echo $events_upcoming; ?></span>
                </a>
            </div>
            
            <div class="menu-section">
                <div class="menu-label">Services CIA</div>
                <a href="rendez-vous-cia-silver.php" class="menu-item">
                    <i class="bi bi-camera-video-fill"></i>
                    <span>Rendez-vous CIA</span>
                    <?php if($rdv_pending > 0): ?>
                    <span class="badge-notif"><?php echo $rdv_pending; ?></span>
                    <?php endif; ?>
                </a>
                <a href="support-silver.php" class="menu-item">
                    <i class="bi bi-headset"></i>
                    <span>Support</span>
                </a>
            </div>
            
            <div class="menu-section">
                <div class="menu-label">Compte</div>
                <a href="profil-silver.php" class="menu-item">
                    <i class="bi bi-person-fill"></i>
                    <span>Mon Profil</span>
                </a>
                <a href="parametres-silver.php" class="menu-item">
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
                    <p class="welcome-subtitle">Bienvenue sur votre tableau de bord Silver</p>
                </div>
                <div class="header-actions">
                    <button class="btn-icon" onclick="window.location.href='messagerie-silver.php'">
                        <i class="bi bi-chat-dots"></i>
                        <?php if($messages_unread > 0): ?>
                        <span class="notif-dot"></span>
                        <?php endif; ?>
                    </button>
                    <button class="btn-icon" onclick="window.location.href='notifications-silver.php'">
                        <i class="bi bi-bell"></i>
                    </button>
                    <div class="user-avatar" onclick="window.location.href='profil-silver.php'">
                        <img src="<?php echo $user_avatar; ?>" alt="<?php echo $user_name; ?>">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Upgrade Banner -->
        <div class="upgrade-banner">
            <div>
                <h4>🚀 Passez au plan Gold !</h4>
                <p>Publiez 2 projets, accédez aux formations exclusives et bénéficiez du support prioritaire 24/7</p>
            </div>
            <a href="upgrade-gold.php" class="btn-upgrade">
                <i class="bi bi-star-fill"></i>
                Passer à Gold
            </a>
        </div>
        
        <!-- Silver Features Overview -->
        <div class="features-grid">
            <!-- Projet -->
            <div class="feature-card projects-card">
                <div class="feature-icon">
                    <i class="bi bi-folder-fill"></i>
                </div>
                <div class="feature-content">
                    <h3>Mon Projet</h3>
                    <p class="feature-value"><?php echo $projects_count; ?>/<?php echo $projects_limit; ?></p>
                    <p class="feature-desc">Projet publié</p>
                    <div class="progress-bar-mini">
                        <div class="progress-fill-mini" style="width: <?php echo ($projects_count/$projects_limit)*100; ?>%"></div>
                    </div>
                    <span class="silver-badge">Plan Silver</span>
                </div>
                <a href="mes-projets-silver.php" class="feature-link">
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
                <a href="messagerie-silver.php" class="feature-link">
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
                    <span class="badge-success">Disponible</span>
                </div>
                <a href="rendez-vous-cia-silver.php" class="feature-link">
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
                <a href="evenements-silver.php" class="feature-link">
                    Voir tout <i class="bi bi-arrow-right"></i>
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
                <a href="investisseurs-silver.php" class="feature-link">
                    Découvrir <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
        
        <!-- Quick Actions -->
        <div class="quick-actions-section">
            <h2 class="section-title">🚀 Actions Rapides</h2>
            <div class="quick-actions-grid">
                <?php if($projects_count < $projects_limit): ?>
                <a href="creer-projet-silver.php" class="quick-action-btn primary">
                    <i class="bi bi-plus-circle-fill"></i>
                    <span>Publier mon Projet</span>
                </a>
                <?php else: ?>
                <a href="upgrade-gold.php" class="quick-action-btn quaternary">
                    <i class="bi bi-star-fill"></i>
                    <span>Publier plus de projets</span>
                </a>
                <?php endif; ?>
                <a href="rendez-vous-cia-silver.php" class="quick-action-btn secondary">
                    <i class="bi bi-calendar-plus"></i>
                    <span>Demander un RDV</span>
                </a>
                <a href="messagerie-silver.php" class="quick-action-btn tertiary">
                    <i class="bi bi-send-fill"></i>
                    <span>Envoyer un Message</span>
                </a>
                <a href="evenements-silver.php" class="quick-action-btn quaternary">
                    <i class="bi bi-ticket-perforated"></i>
                    <span>Réserver un Événement</span>
                </a>
            </div>
        </div>
        
        <!-- Activity Timeline -->
        <div class="activity-section">
            <h2 class="section-title">📊 Activité Récente</h2>
            <div class="activity-timeline">
                <div class="activity-item">
                    <div class="activity-icon success">
                        <i class="bi bi-check-circle-fill"></i>
                    </div>
                    <div class="activity-content">
                        <h4>Projet publié avec succès</h4>
                        <p>Votre projet "Boutique Bio en Ligne" est maintenant visible</p>
                        <span class="activity-time">Il y a 1 jour</span>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon info">
                        <i class="bi bi-person-plus-fill"></i>
                    </div>
                    <div class="activity-content">
                        <h4>Nouvel investisseur intéressé</h4>
                        <p>Amadou Diallo a manifesté son intérêt pour votre projet</p>
                        <span class="activity-time">Il y a 2 jours</span>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon warning">
                        <i class="bi bi-calendar-check-fill"></i>
                    </div>
                    <div class="activity-content">
                        <h4>Événement à venir</h4>
                        <p>Atelier Business Model Canvas - 05 Nov 2025</p>
                        <span class="activity-time">Dans 3 jours</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Silver vs Gold Comparison -->
        <div class="activity-section">
            <h2 class="section-title">⭐ Comparez les Plans</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div style="padding: 2rem; background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(129, 140, 248, 0.05)); border-radius: 20px; border: 2px solid rgba(99, 102, 241, 0.3);">
                        <h4 style="font-weight: 800; color: #6366f1; margin-bottom: 1.5rem;">
                            <i class="bi bi-award-fill"></i> Plan Silver (Actuel)
                        </h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="padding: 0.75rem 0; display: flex; align-items: center; gap: 0.75rem;">
                                <i class="bi bi-check-circle-fill" style="color: var(--success);"></i>
                                <span>1 projet</span>
                            </li>
                            <li style="padding: 0.75rem 0; display: flex; align-items: center; gap: 0.75rem;">
                                <i class="bi bi-check-circle-fill" style="color: var(--success);"></i>
                                <span>Messagerie</span>
                            </li>
                            <li style="padding: 0.75rem 0; display: flex; align-items: center; gap: 0.75rem;">
                                <i class="bi bi-check-circle-fill" style="color: var(--success);"></i>
                                <span>Rendez-vous CIA</span>
                            </li>
                            <li style="padding: 0.75rem 0; display: flex; align-items: center; gap: 0.75rem;">
                                <i class="bi bi-check-circle-fill" style="color: var(--success);"></i>
                                <span>Événements</span>
                            </li>
                            <li style="padding: 0.75rem 0; display: flex; align-items: center; gap: 0.75rem;">
                                <i class="bi bi-x-circle-fill" style="color: #cbd5e1;"></i>
                                <span style="color: #94a3b8;">Formations</span>
                            </li>
                            <li style="padding: 0.75rem 0; display: flex; align-items: center; gap: 0.75rem;">
                                <i class="bi bi-x-circle-fill" style="color: #cbd5e1;"></i>
                                <span style="color: #94a3b8;">Support 24/7</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="padding: 2rem; background: linear-gradient(135deg, rgba(25, 135, 84, 0.1), rgba(32, 201, 151, 0.05)); border-radius: 20px; border: 2px solid rgba(25, 135, 84, 0.3);">
                        <h4 style="font-weight: 800; color: var(--primary); margin-bottom: 1.5rem;">
                            <i class="bi bi-star-fill"></i> Plan Gold
                        </h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="padding: 0.75rem 0; display: flex; align-items: center; gap: 0.75rem;">
                                <i class="bi bi-check-circle-fill" style="color: var(--success);"></i>
                                <span><strong>2 projets</strong></span>
                            </li>
                            <li style="padding: 0.75rem 0; display: flex; align-items: center; gap: 0.75rem;">
                                <i class="bi bi-check-circle-fill" style="color: var(--success);"></i>
                                <span>Messagerie</span>
                            </li>
                            <li style="padding: 0.75rem 0; display: flex; align-items: center; gap: 0.75rem;">
                                <i class="bi bi-check-circle-fill" style="color: var(--success);"></i>
                                <span>Rendez-vous CIA</span>
                            </li>
                            <li style="padding: 0.75rem 0; display: flex; align-items: center; gap: 0.75rem;">
                                <i class="bi bi-check-circle-fill" style="color: var(--success);"></i>
                                <span>Événements</span>
                            </li>
                            <li style="padding: 0.75rem 0; display: flex; align-items: center; gap: 0.75rem;">
                                <i class="bi bi-check-circle-fill" style="color: var(--success);"></i>
                                <span><strong>Formations illimitées</strong></span>
                            </li>
                            <li style="padding: 0.75rem 0; display: flex; align-items: center; gap: 0.75rem;">
                                <i class="bi bi-check-circle-fill" style="color: var(--success);"></i>
                                <span><strong>Support prioritaire 24/7</strong></span>
                            </li>
                        </ul>
                        <a href="upgrade-gold.php" class="btn-upgrade w-100 mt-3" style="justify-content: center;">
                            <i class="bi bi-arrow-up-circle"></i>
                            Passer à Gold
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../gold/assets/js/dashboard-gold.js"></script>
</body>
</html>
