<?php
/**
 * Investisseurs - CIA Invest Gold V2
 * Réseau d'investisseurs et partenaires financiers
 * 
 * @package CIA_Invest
 * @version 2.0
 */

// Configuration
$current_page = 'investisseurs';
$page_title = 'Investisseurs';
$user_name = 'Jean Dupont';
$user_email = 'jean.dupont@example.com';
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
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
            color: #475569;
            text-decoration: none;
            border-radius: 12px;
            margin-bottom: 0.5rem;
            font-weight: 600;
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
            box-shadow: 0 4px 12px rgba(var(--item-rgb), 0.2);
        }
        
        .menu-item.active::before {
            transform: scaleY(1);
        }
        
        .menu-item i {
            font-size: 1.25rem;
            width: 24px;
            text-align: center;
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
        
        .dashboard-container {
            max-width: 1400px;
            margin-left: 300px;
            padding: 2rem;
        }
        
        .page-header {
            margin-bottom: 2rem;
        }
        
        .page-title {
            font-size: 2.5rem;
            font-weight: 900;
            background: linear-gradient(135deg, white, rgba(255, 255, 255, 0.8));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }
        
        .page-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.125rem;
        }
        
        .investor-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 2rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .investor-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }
        
        .investor-header {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .investor-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 4px solid white;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }
        
        .investor-info h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.25rem;
        }
        
        .investor-role {
            color: #64748b;
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }
        
        .investor-badges {
            display: flex;
            gap: 0.5rem;
        }
        
        .badge-investor {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .badge-verified {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            color: white;
        }
        
        .badge-active {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
        }
        
        .investor-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 1rem;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: linear-gradient(135deg, #f8fafc, #f1f5f9);
            border-radius: 12px;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-value {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--purple);
        }
        
        .stat-label {
            font-size: 0.75rem;
            color: #64748b;
            margin-top: 0.25rem;
        }
        
        .investor-bio {
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }
        
        .investor-interests {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }
        
        .interest-tag {
            padding: 0.5rem 1rem;
            background: linear-gradient(135deg, rgba(139, 92, 246, 0.1), rgba(124, 58, 237, 0.05));
            color: var(--purple);
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
        }
        
        .investor-actions {
            display: flex;
            gap: 1rem;
        }
        
        .btn-modern {
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--purple), #7c3aed);
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(139, 92, 246, 0.3);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid #e2e8f0;
            color: #64748b;
        }
        
        .btn-outline:hover {
            background: #f8fafc;
            border-color: var(--purple);
            color: var(--purple);
        }
        
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
            }
        }
        
        .mobile-menu-toggle {
            display: none;
            position: fixed;
            top: 1rem;
            left: 1rem;
            z-index: 1001;
            background: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 12px;
            font-size: 1.5rem;
            color: var(--primary);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }
        
        @media (max-width: 992px) {
            .mobile-menu-toggle {
                display: block;
            }
        }
    </style>
</head>
<body>
    <div class="bg-animated"></div>
    
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
                <a href="dashboard.php" class="menu-item green">
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
                <a href="mes-projets.php" class="menu-item blue">
                    <i class="bi bi-folder-fill"></i>
                    <span>Mes Projets</span>
                </a>
                <a href="investisseurs.php" class="menu-item purple active">
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
        <div class="page-header">
            <h1 class="page-title">👥 Investisseurs</h1>
            <p class="page-subtitle">Connectez-vous avec des investisseurs potentiels</p>
        </div>
        
        <div class="row">
            <!-- Investor 1 -->
            <div class="col-12">
                <div class="investor-card">
                    <div class="investor-header">
                        <img src="https://ui-avatars.com/api/?name=Marie+Kouadio&background=8b5cf6&color=fff&size=160" 
                             alt="Marie Kouadio" class="investor-avatar">
                        <div class="investor-info">
                            <h3>Marie Kouadio</h3>
                            <p class="investor-role">Investisseuse en Capital Risque</p>
                            <div class="investor-badges">
                                <span class="badge-investor badge-verified">
                                    <i class="bi bi-patch-check-fill"></i> Vérifié
                                </span>
                                <span class="badge-investor badge-active">
                                    <i class="bi bi-circle-fill"></i> Active
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="investor-stats">
                        <div class="stat-item">
                            <div class="stat-value">15</div>
                            <div class="stat-label">Projets financés</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">€2.5M</div>
                            <div class="stat-label">Investissements</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">85%</div>
                            <div class="stat-label">Taux de succès</div>
                        </div>
                    </div>
                    
                    <p class="investor-bio">
                        Passionnée par l'innovation technologique en Afrique, je soutiens les startups à fort impact social.
                        Spécialisée dans les secteurs de la fintech, e-commerce et agritech.
                    </p>
                    
                    <div class="investor-interests">
                        <span class="interest-tag"><i class="bi bi-phone"></i> Tech & Innovation</span>
                        <span class="interest-tag"><i class="bi bi-cart"></i> E-commerce</span>
                        <span class="interest-tag"><i class="bi bi-cash-coin"></i> Fintech</span>
                    </div>
                    
                    <div class="investor-actions">
                        <a href="#" class="btn-modern btn-primary">
                            <i class="bi bi-envelope"></i>
                            Contacter
                        </a>
                        <a href="#" class="btn-modern btn-outline">
                            <i class="bi bi-eye"></i>
                            Voir le profil
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Investor 2 -->
            <div class="col-12">
                <div class="investor-card">
                    <div class="investor-header">
                        <img src="https://ui-avatars.com/api/?name=Amadou+Diallo&background=3b82f6&color=fff&size=160" 
                             alt="Amadou Diallo" class="investor-avatar">
                        <div class="investor-info">
                            <h3>Amadou Diallo</h3>
                            <p class="investor-role">Business Angel</p>
                            <div class="investor-badges">
                                <span class="badge-investor badge-verified">
                                    <i class="bi bi-patch-check-fill"></i> Vérifié
                                </span>
                                <span class="badge-investor badge-active">
                                    <i class="bi bi-circle-fill"></i> Active
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="investor-stats">
                        <div class="stat-item">
                            <div class="stat-value">22</div>
                            <div class="stat-label">Projets financés</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">€1.8M</div>
                            <div class="stat-label">Investissements</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">92%</div>
                            <div class="stat-label">Taux de succès</div>
                        </div>
                    </div>
                    
                    <p class="investor-bio">
                        Entrepreneur expérimenté et investisseur providentiel, j'accompagne les jeunes talents africains dans leur 
                        développement. Expert en retail, logistique et distribution.
                    </p>
                    
                    <div class="investor-interests">
                        <span class="interest-tag"><i class="bi bi-shop"></i> Commerce & Retail</span>
                        <span class="interest-tag"><i class="bi bi-truck"></i> Logistique</span>
                        <span class="interest-tag"><i class="bi bi-building"></i> Immobilier</span>
                    </div>
                    
                    <div class="investor-actions">
                        <a href="#" class="btn-modern btn-primary">
                            <i class="bi bi-envelope"></i>
                            Contacter
                        </a>
                        <a href="#" class="btn-modern btn-outline">
                            <i class="bi bi-eye"></i>
                            Voir le profil
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Investor 3 -->
            <div class="col-12">
                <div class="investor-card">
                    <div class="investor-header">
                        <img src="https://ui-avatars.com/api/?name=Sophie+Martin&background=10b981&color=fff&size=160" 
                             alt="Sophie Martin" class="investor-avatar">
                        <div class="investor-info">
                            <h3>Sophie Martin</h3>
                            <p class="investor-role">Fonds d'Investissement</p>
                            <div class="investor-badges">
                                <span class="badge-investor badge-verified">
                                    <i class="bi bi-patch-check-fill"></i> Vérifié
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="investor-stats">
                        <div class="stat-item">
                            <div class="stat-value">8</div>
                            <div class="stat-label">Projets financés</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">€5M</div>
                            <div class="stat-label">Investissements</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">78%</div>
                            <div class="stat-label">Taux de succès</div>
                        </div>
                    </div>
                    
                    <p class="investor-bio">
                        Représentante d'un fonds d'investissement européen spécialisé dans les projets à impact en Afrique.
                        Focus sur l'énergie renouvelable, l'éducation et la santé.
                    </p>
                    
                    <div class="investor-interests">
                        <span class="interest-tag"><i class="bi bi-lightning"></i> Énergies vertes</span>
                        <span class="interest-tag"><i class="bi bi-book"></i> Éducation</span>
                        <span class="interest-tag"><i class="bi bi-heart-pulse"></i> Santé</span>
                    </div>
                    
                    <div class="investor-actions">
                        <a href="#" class="btn-modern btn-primary">
                            <i class="bi bi-envelope"></i>
                            Contacter
                        </a>
                        <a href="#" class="btn-modern btn-outline">
                            <i class="bi bi-eye"></i>
                            Voir le profil
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function toggleMobileMenu() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('active');
        }
        
        document.addEventListener('click', function(event) {
            const sidebar = document.querySelector('.sidebar');
            const toggle = document.querySelector('.mobile-menu-toggle');
            
            if (window.innerWidth <= 992) {
                if (!sidebar.contains(event.target) && !toggle.contains(event.target)) {
                    sidebar.classList.remove('active');
                }
            }
        });
        
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
