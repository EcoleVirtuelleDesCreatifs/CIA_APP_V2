<?php
/**
 * Dashboard Gold V2 - CIA Invest
 * Interface ultra-moderne, colorée et dynamique avec profil complet
 * 
 * @package CIA_Invest
 * @version 2.0
 */

// Configuration
$current_page = 'dashboard';
$page_title = 'Dashboard Gold';
$user_name = 'Jean Dupont';
$user_email = 'jean.dupont@example.com';
$user_plan = 'Gold';
$user_avatar = 'https://ui-avatars.com/api/?name=Jean+Dupont&background=198754&color=fff&size=200';
$member_since = 'Janvier 2024';
$projects_count = 2;
$connections_count = 24;
$profile_completion = 95;
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary: #198754;
            --primary-light: #20c997;
            --primary-dark: #146c43;
            --secondary: #6366f1;
            --accent: #f59e0b;
            --danger: #ef4444;
            --success: #10b981;
            --warning: #f59e0b;
            --info: #3b82f6;
            --purple: #8b5cf6;
            --pink: #ec4899;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0d4a2e 0%, #146c43 100%);
            min-height: 100vh;
            overflow-x: hidden;
        }
        
        /* Animated Background */
        .bg-animated {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0d4a2e 0%, #146c43 50%, #198754 100%);
            z-index: -1;
        }
        
        .bg-animated::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: 
                radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.08) 0%, transparent 50%);
            animation: float 20s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            50% { transform: translate(-50px, -50px) rotate(180deg); }
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
            box-shadow: 4px 0 30px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            overflow-y: auto;
            padding: 2rem 0;
        }
        
        .sidebar::-webkit-scrollbar {
            width: 6px;
        }
        
        .sidebar::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            border-radius: 10px;
        }
        
        .sidebar-brand {
            padding: 0 2rem 2rem;
            text-align: center;
            border-bottom: 2px solid rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
        }
        
        .sidebar-brand h2 {
            font-size: 1.75rem;
            font-weight: 900;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 0;
        }
        
        .sidebar-brand p {
            color: #64748b;
            font-size: 0.875rem;
            font-weight: 600;
            margin: 0.5rem 0 0;
        }
        
        .sidebar-menu {
            padding: 0 1rem;
        }
        
        .menu-section {
            margin-bottom: 2rem;
        }
        
        .menu-label {
            padding: 0 1rem 0.75rem;
            font-size: 0.75rem;
            font-weight: 800;
            text-transform: uppercase;
            color: #94a3b8;
            letter-spacing: 0.1em;
        }
        
        .menu-item {
            display: flex;
            align-items: center;
            padding: 1rem 1.5rem;
            margin-bottom: 0.5rem;
            border-radius: 16px;
            color: #64748b;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9375rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .menu-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(135deg, var(--item-color-1), var(--item-color-2));
            transform: scaleY(0);
            transition: transform 0.3s;
            border-radius: 0 4px 4px 0;
        }
        
        .menu-item:hover {
            background: linear-gradient(135deg, rgba(var(--item-rgb), 0.1), rgba(var(--item-rgb), 0.05));
            color: var(--item-color-1);
            transform: translateX(4px);
        }
        
        .menu-item.active {
            background: linear-gradient(135deg, rgba(var(--item-rgb), 0.15), rgba(var(--item-rgb), 0.08));
            color: var(--item-color-1);
            font-weight: 700;
        }
        
        .menu-item.active::before {
            transform: scaleY(1);
        }
        
        .menu-item i {
            width: 24px;
            margin-right: 1rem;
            font-size: 1.25rem;
        }
        
        .menu-item.green {
            --item-color-1: #10b981;
            --item-color-2: #059669;
            --item-rgb: 16, 185, 129;
        }
        
        .menu-item.blue {
            --item-color-1: #3b82f6;
            --item-color-2: #2563eb;
            --item-rgb: 59, 130, 246;
        }
        
        .menu-item.purple {
            --item-color-1: #8b5cf6;
            --item-color-2: #7c3aed;
            --item-rgb: 139, 92, 246;
        }
        
        .menu-item.orange {
            --item-color-1: #f59e0b;
            --item-color-2: #d97706;
            --item-rgb: 245, 158, 11;
        }
        
        .menu-item.pink {
            --item-color-1: #ec4899;
            --item-color-2: #db2777;
            --item-rgb: 236, 72, 153;
        }
        
        /* Container */
        .dashboard-container {
            max-width: 1400px;
            margin-left: 300px;
            padding: 2rem;
        }
        
        /* Header */
        .dashboard-header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .welcome-text {
            font-size: 2.5rem;
            font-weight: 900;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }
        
        .subtitle {
            color: #64748b;
            font-size: 1.125rem;
        }
        
        /* Profile Card - Ultra Modern */
        .profile-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(255, 255, 255, 0.9) 100%);
            backdrop-filter: blur(20px);
            border-radius: 32px;
            padding: 3rem;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.4);
            position: relative;
            overflow: hidden;
        }
        
        .profile-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 150px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            opacity: 0.1;
        }
        
        .profile-avatar-wrapper {
            position: relative;
            width: 140px;
            height: 140px;
            margin: 0 auto 2rem;
        }
        
        .profile-avatar {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 5px solid white;
            box-shadow: 0 10px 40px rgba(25, 135, 84, 0.3);
            position: relative;
            z-index: 2;
        }
        
        .avatar-ring {
            position: absolute;
            top: -10px;
            left: -10px;
            width: 160px;
            height: 160px;
            border-radius: 50%;
            border: 3px solid transparent;
            background: linear-gradient(135deg, var(--primary), var(--primary-light)) border-box;
            -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            animation: rotate 3s linear infinite;
        }
        
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .profile-name {
            font-size: 2rem;
            font-weight: 900;
            color: #0a0e27;
            margin-bottom: 0.5rem;
            text-align: center;
        }
        
        .profile-email {
            color: #64748b;
            font-size: 1rem;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        
        .plan-badge-large {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            border-radius: 50px;
            font-weight: 800;
            font-size: 1.125rem;
            box-shadow: 0 10px 30px rgba(25, 135, 84, 0.4);
            margin-bottom: 2rem;
        }
        
        .profile-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 2px solid rgba(0, 0, 0, 0.05);
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-value {
            font-size: 2rem;
            font-weight: 900;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .stat-label {
            color: #64748b;
            font-size: 0.875rem;
            font-weight: 600;
            margin-top: 0.5rem;
        }
        
        .progress-ring {
            width: 120px;
            height: 120px;
            margin: 0 auto 1rem;
            position: relative;
        }
        
        .progress-ring svg {
            transform: rotate(-90deg);
        }
        
        .progress-ring circle {
            fill: none;
            stroke-width: 8;
        }
        
        .progress-ring .bg {
            stroke: #e2e8f0;
        }
        
        .progress-ring .progress {
            stroke: url(#gradient);
            stroke-linecap: round;
            transition: stroke-dashoffset 1s ease;
        }
        
        .progress-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 1.5rem;
            font-weight: 900;
            color: var(--primary);
        }
        
        /* Stats Cards - Colorful */
        .stat-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 2rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, var(--card-color-1), var(--card-color-2));
        }
        
        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.25);
        }
        
        .stat-card.green {
            --card-color-1: #10b981;
            --card-color-2: #059669;
        }
        
        .stat-card.blue {
            --card-color-1: #3b82f6;
            --card-color-2: #2563eb;
        }
        
        .stat-card.purple {
            --card-color-1: #8b5cf6;
            --card-color-2: #7c3aed;
        }
        
        .stat-card.orange {
            --card-color-1: #f59e0b;
            --card-color-2: #d97706;
        }
        
        .stat-icon {
            width: 70px;
            height: 70px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .stat-icon::before {
            content: '';
            position: absolute;
            inset: -5px;
            border-radius: 20px;
            background: linear-gradient(135deg, var(--card-color-1), var(--card-color-2));
            opacity: 0.2;
            z-index: -1;
        }
        
        .stat-card.green .stat-icon {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
        }
        
        .stat-card.blue .stat-icon {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            color: white;
        }
        
        .stat-card.purple .stat-icon {
            background: linear-gradient(135deg, #8b5cf6, #7c3aed);
            color: white;
        }
        
        .stat-card.orange .stat-icon {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            color: white;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 900;
            color: #0a0e27;
            margin-bottom: 0.5rem;
        }
        
        .stat-title {
            color: #64748b;
            font-size: 1rem;
            font-weight: 600;
        }
        
        .stat-change {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 700;
            margin-top: 1rem;
        }
        
        .stat-change.up {
            background: rgba(16, 185, 129, 0.1);
            color: #059669;
        }
        
        .stat-change.down {
            background: rgba(239, 68, 68, 0.1);
            color: #dc2626;
        }
        
        /* Activity Card */
        .activity-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 2rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .activity-title {
            font-size: 1.5rem;
            font-weight: 800;
            color: #0a0e27;
            margin-bottom: 2rem;
        }
        
        .activity-item {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            padding: 1.25rem;
            border-radius: 16px;
            transition: all 0.3s;
            margin-bottom: 1rem;
        }
        
        .activity-item:hover {
            background: rgba(0, 0, 0, 0.02);
        }
        
        .activity-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
        }
        
        .activity-content h5 {
            font-size: 1.125rem;
            font-weight: 700;
            color: #0a0e27;
            margin-bottom: 0.25rem;
        }
        
        .activity-content p {
            color: #64748b;
            font-size: 0.9375rem;
            margin: 0;
        }
        
        .activity-time {
            color: #94a3b8;
            font-size: 0.875rem;
            font-weight: 600;
            margin-left: auto;
        }
        
        /* Buttons */
        .btn-modern {
            padding: 1rem 2rem;
            border-radius: 16px;
            font-weight: 700;
            font-size: 1rem;
            border: none;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .btn-primary-modern {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            box-shadow: 0 10px 30px rgba(25, 135, 84, 0.3);
        }
        
        .btn-primary-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(25, 135, 84, 0.4);
        }
        
        /* Chart Card */
        .chart-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 2rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            height: 100%;
        }
        
        .chart-title {
            font-size: 1.25rem;
            font-weight: 800;
            color: #0a0e27;
            margin-bottom: 1.5rem;
        }
        
        /* Mobile Menu Toggle */
        .mobile-menu-toggle {
            display: none;
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            border: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            z-index: 1001;
            font-size: 1.5rem;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .mobile-menu-toggle:active {
            transform: scale(0.95);
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }
            
            .sidebar.active {
                transform: translateX(0);
            }
            
            .dashboard-container {
                margin-left: 0;
                padding: 1rem;
            }
            
            .mobile-menu-toggle {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            .dashboard-header {
                padding: 1.5rem;
            }
            
            .welcome-text {
                font-size: 1.75rem;
            }
            
            .subtitle {
                font-size: 1rem;
            }
            
            .profile-card {
                padding: 2rem;
            }
            
            .stat-card {
                padding: 1.5rem;
            }
            
            .stat-number {
                font-size: 2.5rem;
            }
            
            .activity-card {
                padding: 1.5rem;
            }
        }
        
        @media (max-width: 576px) {
            .dashboard-container {
                padding: 0.5rem;
            }
            
            .dashboard-header {
                padding: 1rem;
                border-radius: 16px;
            }
            
            .welcome-text {
                font-size: 1.5rem;
            }
            
            .subtitle {
                font-size: 0.875rem;
            }
            
            .profile-card {
                padding: 1.5rem;
                border-radius: 24px;
            }
            
            .profile-avatar-wrapper {
                width: 100px;
                height: 100px;
            }
            
            .profile-avatar {
                width: 100px;
                height: 100px;
            }
            
            .avatar-ring {
                width: 120px;
                height: 120px;
            }
            
            .profile-name {
                font-size: 1.5rem;
            }
            
            .plan-badge-large {
                padding: 0.75rem 1.5rem;
                font-size: 1rem;
            }
            
            .stat-card {
                padding: 1.25rem;
                border-radius: 16px;
            }
            
            .stat-icon {
                width: 60px;
                height: 60px;
            }
            
            .stat-number {
                font-size: 2rem;
            }
            
            .activity-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            
            .activity-time {
                margin-left: 0;
            }
            
            .btn-modern {
                padding: 0.875rem 1.5rem;
                font-size: 0.9375rem;
            }
        }
    </style>
</head>
<body>
    <div class="bg-animated"></div>
    
    <!-- Mobile Menu Toggle -->
    <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">
        <i class="bi bi-list"></i>
    </button>
    
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2>CIA Invest</h2>
            <p>Dashboard Gold</p>
        </div>
        
        <div class="sidebar-menu">
            <div class="menu-section">
                <div class="menu-label">Menu Principal</div>
                <a href="dashboard.php" class="menu-item green active">
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
                <a href="mes-projets.php" class="menu-item blue">
                    <i class="bi bi-folder-fill"></i>
                    <span>Mes Projets</span>
                </a>
                <a href="investisseurs.php" class="menu-item purple">
                    <i class="bi bi-people-fill"></i>
                    <span>Investisseurs</span>
                </a>
                <a href="evenements.php" class="menu-item orange">
                    <i class="bi bi-calendar-check-fill"></i>
                    <span>Événements</span>
                </a>
                <a href="messages.php" class="menu-item pink">
                    <i class="bi bi-chat-dots-fill"></i>
                    <span>Messages</span>
                </a>
            </div>
            
            <div class="menu-section">
                <div class="menu-label">Ressources</div>
                <a href="formations.php" class="menu-item green">
                    <i class="bi bi-book-fill"></i>
                    <span>Formations</span>
                </a>
                <a href="rendez-vous.php" class="menu-item blue">
                    <i class="bi bi-camera-video-fill"></i>
                    <span>Rendez-vous</span>
                </a>
                <a href="statistiques.php" class="menu-item purple">
                    <i class="bi bi-graph-up-arrow"></i>
                    <span>Statistiques</span>
                </a>
            </div>
            
            <div class="menu-section">
                <div class="menu-label">Compte</div>
                <a href="profil.php" class="menu-item orange">
                    <i class="bi bi-person-fill"></i>
                    <span>Mon Profil</span>
                </a>
                <a href="parametres.php" class="menu-item pink">
                    <i class="bi bi-gear-fill"></i>
                    <span>Paramètres</span>
                </a>
                <a href="../index.php" class="menu-item green">
                    <i class="bi bi-arrow-left-circle-fill"></i>
                    <span>Retour au site</span>
                </a>
            </div>
        </div>
    </div>
    
    <div class="dashboard-container">
        <!-- Header -->
        <div class="dashboard-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="welcome-text">Bonjour, <?php echo explode(' ', $user_name)[0]; ?> 👋</h1>
                    <p class="subtitle">Bienvenue sur votre tableau de bord Gold</p>
                </div>
                <a href="index.php" class="btn btn-primary-modern">
                    <i class="bi bi-house-door"></i>
                    Retour au site
                </a>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Profile Card -->
            <div class="col-lg-4">
                <div class="profile-card">
                    <div class="profile-avatar-wrapper">
                        <div class="avatar-ring"></div>
                        <img src="<?php echo $user_avatar; ?>" alt="<?php echo $user_name; ?>" class="profile-avatar">
                    </div>
                    
                    <h2 class="profile-name"><?php echo $user_name; ?></h2>
                    <p class="profile-email"><?php echo $user_email; ?></p>
                    
                    <div class="text-center">
                        <span class="plan-badge-large">
                            <i class="bi bi-star-fill"></i>
                            Membre <?php echo $user_plan; ?>
                        </span>
                    </div>
                    
                    <div class="text-center mb-4">
                        <small class="text-muted">Membre depuis <?php echo $member_since; ?></small>
                    </div>
                    
                    <!-- Profile Completion -->
                    <div class="text-center mb-4">
                        <div class="progress-ring">
                            <svg width="120" height="120">
                                <defs>
                                    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#198754" />
                                        <stop offset="100%" style="stop-color:#20c997" />
                                    </linearGradient>
                                </defs>
                                <circle class="bg" cx="60" cy="60" r="52"></circle>
                                <circle class="progress" cx="60" cy="60" r="52" 
                                        stroke-dasharray="327" 
                                        stroke-dashoffset="<?php echo 327 - (327 * $profile_completion / 100); ?>">
                                </circle>
                            </svg>
                            <div class="progress-text"><?php echo $profile_completion; ?>%</div>
                        </div>
                        <p class="text-muted fw-semibold">Profil Complété</p>
                    </div>
                    
                    <div class="profile-stats">
                        <div class="stat-item">
                            <div class="stat-value"><?php echo $projects_count; ?></div>
                            <div class="stat-label">Projets</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value"><?php echo $connections_count; ?></div>
                            <div class="stat-label">Connexions</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">12</div>
                            <div class="stat-label">Événements</div>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary-modern w-100 mt-4">
                        <i class="bi bi-pencil"></i>
                        Éditer le Profil
                    </button>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Stats Cards -->
                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <div class="stat-card green">
                            <div class="stat-icon">
                                <i class="bi bi-folder-fill"></i>
                            </div>
                            <div class="stat-number">2</div>
                            <div class="stat-title">Projets Actifs</div>
                            <div class="stat-change up">
                                <i class="bi bi-arrow-up"></i>
                                <span>+100% ce mois</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="stat-card blue">
                            <div class="stat-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <div class="stat-number">24</div>
                            <div class="stat-title">Investisseurs</div>
                            <div class="stat-change up">
                                <i class="bi bi-arrow-up"></i>
                                <span>+12% cette semaine</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="stat-card purple">
                            <div class="stat-icon">
                                <i class="bi bi-calendar-check-fill"></i>
                            </div>
                            <div class="stat-number">3</div>
                            <div class="stat-title">Événements</div>
                            <div class="stat-change up">
                                <i class="bi bi-arrow-up"></i>
                                <span>2 cette semaine</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="stat-card orange">
                            <div class="stat-icon">
                                <i class="bi bi-chat-dots-fill"></i>
                            </div>
                            <div class="stat-number">5</div>
                            <div class="stat-title">Messages</div>
                            <div class="stat-change down">
                                <i class="bi bi-arrow-down"></i>
                                <span>-20% vs hier</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Activity Card -->
                <div class="activity-card">
                    <h3 class="activity-title">Activité Récente</h3>
                    
                    <div class="activity-item">
                        <div class="activity-icon" style="background: linear-gradient(135deg, #10b981, #059669); color: white;">
                            <i class="bi bi-folder-plus"></i>
                        </div>
                        <div class="activity-content">
                            <h5>Nouveau projet créé</h5>
                            <p>Vous avez publié "Application Mobile E-commerce"</p>
                        </div>
                        <span class="activity-time">Il y a 2h</span>
                    </div>
                    
                    <div class="activity-item">
                        <div class="activity-icon" style="background: linear-gradient(135deg, #3b82f6, #2563eb); color: white;">
                            <i class="bi bi-person-plus"></i>
                        </div>
                        <div class="activity-content">
                            <h5>Nouvel investisseur</h5>
                            <p>Marie Kouadio est intéressée par votre projet</p>
                        </div>
                        <span class="activity-time">Il y a 4h</span>
                    </div>
                    
                    <div class="activity-item">
                        <div class="activity-icon" style="background: linear-gradient(135deg, #8b5cf6, #7c3aed); color: white;">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                        <div class="activity-content">
                            <h5>Événement à venir</h5>
                            <p>Séminaire de formation sur le pitch - 28 Oct 2025</p>
                        </div>
                        <span class="activity-time">Demain</span>
                    </div>
                    
                    <div class="activity-item">
                        <div class="activity-icon" style="background: linear-gradient(135deg, #f59e0b, #d97706); color: white;">
                            <i class="bi bi-chat-dots"></i>
                        </div>
                        <div class="activity-content">
                            <h5>Nouveau message</h5>
                            <p>L'équipe CIA vous a envoyé un message</p>
                        </div>
                        <span class="activity-time">Hier</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Mobile Menu Script -->
    <script>
        function toggleMobileMenu() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('active');
        }
        
        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.querySelector('.sidebar');
            const toggle = document.querySelector('.mobile-menu-toggle');
            
            if (window.innerWidth <= 992) {
                if (!sidebar.contains(event.target) && !toggle.contains(event.target)) {
                    sidebar.classList.remove('active');
                }
            }
        });
        
        // Close sidebar when clicking on a menu item on mobile
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function() {
                if (window.innerWidth <= 992) {
                    document.querySelector('.sidebar').classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>
