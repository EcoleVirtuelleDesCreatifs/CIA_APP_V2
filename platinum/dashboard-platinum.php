<?php
$current_page = 'dashboard';
$page_title = 'Dashboard Platinum';
$user_name = 'Alexandre Koné';
$user_plan = 'Platinum';
$user_avatar = 'https://ui-avatars.com/api/?name=Alexandre+Kone&background=8b5cf6&color=fff&size=400';
$projects_count = 3;
$projects_limit = 3;
$messages_unread = 8;
$total_funding_raised = 95000;
$total_funding_goal = 150000;
$funding_percentage = ($total_funding_raised / $total_funding_goal) * 100;
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
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #1e1b4b 0%, #312e81 50%, #4c1d95 100%);
            color: #0f172a;
            min-height: 100vh;
        }
        /* Sidebar */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 280px;
            height: 100vh;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            border-right: 1px solid rgba(139, 92, 246, 0.2);
            z-index: 1000;
            overflow-y: auto;
            padding: 2rem 0;
        }
        .sidebar-brand {
            padding: 0 2rem 2rem;
            text-align: center;
            border-bottom: 2px solid rgba(139, 92, 246, 0.1);
            margin-bottom: 2rem;
        }
        .sidebar-brand h2 { 
            font-size: 1.75rem;
            font-weight: 900;
            background: linear-gradient(135deg, #8b5cf6, #a78bfa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 0 0 1rem 0;
        }
        .plan-badge-sidebar {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1.25rem;
            background: linear-gradient(135deg, #8b5cf6, #a78bfa);
            color: white;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.875rem;
        }
        .sidebar-menu { padding: 0 1rem; }
        .menu-section { margin-bottom: 2rem; }
        .menu-label {
            color: #94a3b8;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
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
        .menu-item:hover { background: rgba(139, 92, 246, 0.1); color: #8b5cf6; }
        .menu-item.active {
            background: linear-gradient(135deg, #8b5cf6, #a78bfa);
            color: white;
        }
        .menu-item i { font-size: 1.25rem; width: 24px; }
        .badge-count {
            margin-left: auto;
            padding: 0.25rem 0.75rem;
            background: #f1f5f9;
            color: #64748b;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 700;
        }
        .menu-item.active .badge-count { background: rgba(255, 255, 255, 0.2); color: white; }
        .badge-notif {
            margin-left: auto;
            padding: 0.25rem 0.5rem;
            background: #ef4444;
            color: white;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 700;
        }
        /* Main Container */
        .main-container {
            margin-left: 280px;
            padding: 3rem 2rem;
            max-width: 1400px;
        }
        .dashboard-header {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 24px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(139, 92, 246, 0.2);
        }
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .welcome-title { 
            font-size: 2.5rem;
            font-weight: 900;
            background: linear-gradient(135deg, #8b5cf6, #a78bfa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 0;
        }
        .welcome-subtitle { color: #64748b; font-size: 1.125rem; margin: 0.5rem 0 0 0; }
        .header-actions { display: flex; gap: 1rem; }
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
        .btn-icon:hover { border-color: #8b5cf6; color: #8b5cf6; }
        .notif-dot {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 8px;
            height: 8px;
            background: #ef4444;
            border-radius: 50%;
        }
        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid #8b5cf6;
            cursor: pointer;
        }
        .user-avatar img { width: 100%; height: 100%; object-fit: cover; }
        /* Features */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        .feature-card {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 20px;
            padding: 2rem;
            border: 1px solid rgba(139, 92, 246, 0.2);
            transition: all 0.3s;
        }
        .feature-card:hover { transform: translateY(-4px); box-shadow: 0 20px 60px rgba(139, 92, 246, 0.2); }
        .feature-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            background: linear-gradient(135deg, #8b5cf6, #a78bfa);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            color: white;
            margin-bottom: 1.5rem;
        }
        .feature-content h3 { font-size: 1.125rem; font-weight: 700; color: #0f172a; margin-bottom: 0.75rem; }
        .feature-value { font-size: 2.5rem; font-weight: 900; color: #0f172a; margin: 0; }
        .feature-desc { color: #64748b; font-size: 0.9375rem; margin: 0.5rem 0 1rem 0; }
        .progress-bar-mini {
            height: 6px;
            background: #e2e8f0;
            border-radius: 50px;
            overflow: hidden;
            margin-top: 1rem;
        }
        .progress-fill-mini {
            height: 100%;
            border-radius: 50px;
            transition: width 1s ease;
        }
        .badge-urgent { background: #fef2f2; color: #ef4444; padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.75rem; font-weight: 700; display: inline-block; margin-top: 0.5rem; }
        .badge-success { background: #f0fdf4; color: #10b981; padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.75rem; font-weight: 700; display: inline-block; margin-top: 0.5rem; }
        .badge-info { background: #eff6ff; color: #3b82f6; padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.75rem; font-weight: 700; display: inline-block; margin-top: 0.5rem; }
        .badge-warning { background: #fffbeb; color: #f59e0b; padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.75rem; font-weight: 700; display: inline-block; margin-top: 0.5rem; }
        .badge-purple { background: #faf5ff; color: #8b5cf6; padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.75rem; font-weight: 700; display: inline-block; margin-top: 0.5rem; }
        .feature-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            font-weight: 700;
            margin-top: 1rem;
            transition: all 0.3s;
        }
        .feature-link:hover { gap: 1rem; }
        /* Quick Actions */
        .quick-actions-section { margin-bottom: 2rem; }
        .section-title { font-size: 1.75rem; font-weight: 800; color: white; margin-bottom: 1.5rem; }
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
            transition: all 0.3s;
            background: rgba(255, 255, 255, 0.98);
            color: #0f172a;
            border: 1px solid rgba(139, 92, 246, 0.2);
        }
        .quick-action-btn:hover { transform: translateY(-3px); box-shadow: 0 15px 40px rgba(139, 92, 246, 0.3); color: #8b5cf6; }
        .quick-action-btn i { font-size: 1.75rem; }
        /* Activity */
        .activity-section {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 24px;
            padding: 2.5rem;
            border: 1px solid rgba(139, 92, 246, 0.2);
        }
        .activity-section .section-title { color: #0f172a; }
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
            width: 3px;
            background: linear-gradient(180deg, #8b5cf6, #a78bfa);
        }
        .activity-item {
            position: relative;
            margin-bottom: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid #f1f5f9;
        }
        .activity-item:last-child { border-bottom: none; }
        .activity-icon {
            position: absolute;
            left: -3.25rem;
            top: 0;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            border: 4px solid white;
        }
        .activity-icon.success { background: #10b981; }
        .activity-icon.info { background: #3b82f6; }
        .activity-icon.warning { background: #f59e0b; }
        .activity-content h4 { font-weight: 700; color: #0f172a; margin-bottom: 0.5rem; }
        .activity-content p { color: #64748b; margin: 0; }
        .activity-time { color: #94a3b8; font-size: 0.875rem; font-weight: 600; }
        .funding-barometer {
            background: rgba(255, 255, 255, 0.98);
            border: 2px solid rgba(139, 92, 246, 0.3);
            border-radius: 24px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            position: relative;
        }
        .funding-barometer::before {
            content: '⭐ EXCLUSIF PLATINUM';
            position: absolute;
            top: 1rem;
            right: 1rem;
            padding: 0.5rem 1rem;
            background: linear-gradient(135deg, #8b5cf6, #a78bfa);
            color: white;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 700;
        }
        .funding-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-bottom: 2rem;
        }
        .funding-stat-value {
            font-size: 2.5rem;
            font-weight: 900;
            background: linear-gradient(135deg, #8b5cf6, #a78bfa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .funding-stat-label { color: #64748b; font-weight: 600; }
        .funding-progress {
            height: 20px;
            background: rgba(139, 92, 246, 0.1);
            border-radius: 50px;
            overflow: hidden;
            margin-bottom: 1rem;
        }
        .funding-progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #8b5cf6, #a78bfa);
            border-radius: 50px;
            transition: width 2s ease;
            position: relative;
        }
        .funding-progress-fill::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            animation: shimmer 2s infinite;
        }
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        .badge-platinum { background: linear-gradient(135deg, #8b5cf6, #a78bfa); color: white; }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2>CIA Invest</h2>
            <div class="plan-badge-sidebar"><i class="bi bi-gem"></i> Platinum</div>
        </div>
        <div class="sidebar-menu">
            <div class="menu-section">
                <div class="menu-label">Menu Principal</div>
                <a href="dashboard-platinum.php" class="menu-item active"><i class="bi bi-grid-fill"></i> Dashboard</a>
                <a href="#" class="menu-item"><i class="bi bi-folder-fill"></i> Mes Projets <span class="badge-count"><?php echo $projects_count; ?>/<?php echo $projects_limit; ?></span></a>
                <a href="#" class="menu-item"><i class="bi bi-graph-up-arrow"></i> Baromètre <span class="badge-platinum">NEW</span></a>
                <a href="#" class="menu-item"><i class="bi bi-people-fill"></i> Investisseurs</a>
                <a href="#" class="menu-item"><i class="bi bi-chat-dots-fill"></i> Messagerie <?php if($messages_unread > 0): ?><span class="badge-notif"><?php echo $messages_unread; ?></span><?php endif; ?></a>
            </div>
            <div class="menu-section">
                <div class="menu-label">Événements & Formations</div>
                <a href="#" class="menu-item"><i class="bi bi-calendar-event-fill"></i> Événements</a>
                <a href="#" class="menu-item"><i class="bi bi-mortarboard-fill"></i> Formations</a>
            </div>
            <div class="menu-section">
                <div class="menu-label">Services CIA</div>
                <a href="#" class="menu-item"><i class="bi bi-camera-video-fill"></i> Rendez-vous CIA</a>
                <a href="#" class="menu-item"><i class="bi bi-headset"></i> Support VIP 24/7</a>
            </div>
        </div>
    </div>
    
    <div class="main-container">
        <div class="dashboard-header">
            <div class="header-content">
                <div>
                    <h1 class="welcome-title">Bonjour, <?php echo explode(' ', $user_name)[0]; ?> 👋</h1>
                    <p class="welcome-subtitle">Bienvenue sur votre tableau de bord Platinum</p>
                </div>
                <div class="header-actions">
                    <button class="btn-icon"><i class="bi bi-chat-dots"></i><?php if($messages_unread > 0): ?><span class="notif-dot"></span><?php endif; ?></button>
                    <button class="btn-icon"><i class="bi bi-bell"></i><span class="notif-dot"></span></button>
                    <div class="user-avatar"><img src="<?php echo $user_avatar; ?>" alt="<?php echo $user_name; ?>"></div>
                </div>
            </div>
        </div>
        
        <!-- Baromètre de Financement - EXCLUSIF PLATINUM -->
        <div class="funding-barometer">
            <h2 style="font-size: 1.75rem; font-weight: 800; margin-bottom: 2rem;">📊 Baromètre de Financement</h2>
            <div class="funding-stats">
                <div class="funding-stat" style="text-align: center;">
                    <div class="funding-stat-value"><?php echo number_format($total_funding_raised, 0, ',', ' '); ?> €</div>
                    <div class="funding-stat-label">Fonds Collectés</div>
                </div>
                <div class="funding-stat" style="text-align: center;">
                    <div class="funding-stat-value"><?php echo number_format($total_funding_goal, 0, ',', ' '); ?> €</div>
                    <div class="funding-stat-label">Objectif Total</div>
                </div>
                <div class="funding-stat" style="text-align: center;">
                    <div class="funding-stat-value"><?php echo round($funding_percentage); ?>%</div>
                    <div class="funding-stat-label">Progression</div>
                </div>
            </div>
            <div class="funding-progress">
                <div class="funding-progress-fill" style="width: <?php echo $funding_percentage; ?>%"></div>
            </div>
            <div style="display: flex; justify-content: space-between; color: #64748b; font-size: 0.9375rem; font-weight: 600;">
                <span>Démarré il y a 45 jours</span>
                <span><?php echo number_format($total_funding_goal - $total_funding_raised, 0, ',', ' '); ?> € restants</span>
            </div>
        </div>
        
        <!-- Features Grid -->
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-folder-fill"></i></div>
                <div class="feature-content">
                    <h3>Mes Projets</h3>
                    <p class="feature-value"><?php echo $projects_count; ?>/<?php echo $projects_limit; ?></p>
                    <p class="feature-desc">Projets publiés</p>
                    <div class="progress-bar-mini">
                        <div class="progress-fill-mini" style="width: 100%; background: linear-gradient(90deg, #8b5cf6, #a78bfa);"></div>
                    </div>
                    <span class="badge-platinum">Plan Platinum</span>
                </div>
                <a href="#" class="feature-link" style="color: #8b5cf6;">Gérer <i class="bi bi-arrow-right"></i></a>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-chat-dots-fill"></i></div>
                <div class="feature-content">
                    <h3>Messagerie</h3>
                    <p class="feature-value"><?php echo $messages_unread; ?></p>
                    <p class="feature-desc">Messages non lus</p>
                    <span class="badge-urgent">Nouveaux messages</span>
                </div>
                <a href="#" class="feature-link" style="color: #8b5cf6;">Ouvrir <i class="bi bi-arrow-right"></i></a>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-graph-up-arrow"></i></div>
                <div class="feature-content">
                    <h3>Baromètre</h3>
                    <p class="feature-value"><?php echo round($funding_percentage); ?>%</p>
                    <p class="feature-desc">Financement atteint</p>
                    <span class="badge-success">En progression</span>
                </div>
                <a href="#" class="feature-link" style="color: #8b5cf6;">Détails <i class="bi bi-arrow-right"></i></a>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-calendar-event-fill"></i></div>
                <div class="feature-content">
                    <h3>Événements</h3>
                    <p class="feature-value">5</p>
                    <p class="feature-desc">À venir</p>
                    <span class="badge-info">En ligne & Présentiel</span>
                </div>
                <a href="#" class="feature-link" style="color: #8b5cf6;">Voir tout <i class="bi bi-arrow-right"></i></a>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-mortarboard-fill"></i></div>
                <div class="feature-content">
                    <h3>Formations</h3>
                    <p class="feature-value">12</p>
                    <p class="feature-desc">Disponibles</p>
                    <span class="badge-warning">Accès illimité</span>
                </div>
                <a href="#" class="feature-link" style="color: #8b5cf6;">Explorer <i class="bi bi-arrow-right"></i></a>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-people-fill"></i></div>
                <div class="feature-content">
                    <h3>Investisseurs</h3>
                    <p class="feature-value">2 types</p>
                    <p class="feature-desc">Obligataires & Actionnaires</p>
                    <span class="badge-purple">Choix flexible</span>
                </div>
                <a href="#" class="feature-link" style="color: #8b5cf6;">Découvrir <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        
        <!-- Quick Actions -->
        <div class="quick-actions-section">
            <h2 class="section-title">🚀 Actions Rapides</h2>
            <div class="quick-actions-grid">
                <a href="#" class="quick-action-btn"><i class="bi bi-plus-circle-fill" style="color: #8b5cf6;"></i> Publier un Projet</a>
                <a href="#" class="quick-action-btn"><i class="bi bi-calendar-plus" style="color: #8b5cf6;"></i> Demander un RDV</a>
                <a href="#" class="quick-action-btn"><i class="bi bi-send-fill" style="color: #8b5cf6;"></i> Envoyer un Message</a>
                <a href="#" class="quick-action-btn"><i class="bi bi-ticket-perforated" style="color: #8b5cf6;"></i> Réserver un Événement</a>
            </div>
        </div>
        
        <!-- Activity Timeline -->
        <div class="activity-section">
            <h2 class="section-title">📊 Activité Récente</h2>
            <div class="activity-timeline">
                <div class="activity-item">
                    <div class="activity-icon success"><i class="bi bi-check-circle-fill"></i></div>
                    <div class="activity-content">
                        <h4>Financement atteint 63%</h4>
                        <p>Votre campagne progresse excellemment</p>
                        <span class="activity-time">Il y a 1 heure</span>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon info"><i class="bi bi-person-plus-fill"></i></div>
                    <div class="activity-content">
                        <h4>Nouvel investisseur</h4>
                        <p>Sophie Martin a investi 5 000 € dans votre projet</p>
                        <span class="activity-time">Il y a 3 heures</span>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon warning"><i class="bi bi-calendar-check-fill"></i></div>
                    <div class="activity-content">
                        <h4>Événement à venir</h4>
                        <p>Masterclass Financement - Demain à 10h00</p>
                        <span class="activity-time">Demain</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
