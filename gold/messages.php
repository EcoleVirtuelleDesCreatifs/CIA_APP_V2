<?php
/**
 * Messages - CIA Invest Gold V2
 * Messagerie et communication
 * 
 * @package CIA_Invest
 * @version 2.0
 */

// Configuration
$current_page = 'messages';
$page_title = 'Messages';
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
        
        .messages-container {
            display: grid;
            grid-template-columns: 350px 1fr;
            gap: 1.5rem;
            height: calc(100vh - 200px);
        }
        
        .conversations-list {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 1.5rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
        }
        
        .conversations-list::-webkit-scrollbar {
            width: 6px;
        }
        
        .conversations-list::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            border-radius: 10px;
        }
        
        .search-box {
            margin-bottom: 1.5rem;
        }
        
        .search-box input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 0.875rem;
            transition: all 0.3s ease;
        }
        
        .search-box input:focus {
            outline: none;
            border-color: var(--pink);
            box-shadow: 0 0 0 3px rgba(236, 72, 153, 0.1);
        }
        
        .conversation-item {
            display: flex;
            gap: 1rem;
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 0.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .conversation-item:hover {
            background: linear-gradient(135deg, rgba(236, 72, 153, 0.05), rgba(219, 39, 119, 0.02));
        }
        
        .conversation-item.active {
            background: linear-gradient(135deg, rgba(236, 72, 153, 0.1), rgba(219, 39, 119, 0.05));
        }
        
        .conversation-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            flex-shrink: 0;
        }
        
        .conversation-info {
            flex: 1;
            min-width: 0;
        }
        
        .conversation-name {
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 0.25rem;
        }
        
        .conversation-preview {
            font-size: 0.875rem;
            color: #64748b;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .conversation-time {
            font-size: 0.75rem;
            color: #94a3b8;
        }
        
        .unread-badge {
            width: 20px;
            height: 20px;
            background: linear-gradient(135deg, var(--pink), #db2777);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: 700;
        }
        
        .chat-panel {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }
        
        .chat-header {
            padding: 1.5rem;
            border-bottom: 2px solid rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .chat-header-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        
        .chat-header-info h3 {
            font-size: 1.125rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.25rem;
        }
        
        .chat-header-status {
            font-size: 0.875rem;
            color: #10b981;
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }
        
        .chat-messages {
            flex: 1;
            padding: 1.5rem;
            overflow-y: auto;
        }
        
        .chat-messages::-webkit-scrollbar {
            width: 6px;
        }
        
        .chat-messages::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            border-radius: 10px;
        }
        
        .message {
            margin-bottom: 1.5rem;
            display: flex;
            gap: 1rem;
        }
        
        .message.sent {
            flex-direction: row-reverse;
        }
        
        .message-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            flex-shrink: 0;
        }
        
        .message-content {
            max-width: 60%;
        }
        
        .message-bubble {
            padding: 1rem 1.25rem;
            border-radius: 16px;
            margin-bottom: 0.5rem;
        }
        
        .message.received .message-bubble {
            background: linear-gradient(135deg, #f8fafc, #f1f5f9);
            color: #1e293b;
        }
        
        .message.sent .message-bubble {
            background: linear-gradient(135deg, var(--pink), #db2777);
            color: white;
        }
        
        .message-time {
            font-size: 0.75rem;
            color: #94a3b8;
            padding: 0 0.5rem;
        }
        
        .chat-input {
            padding: 1.5rem;
            border-top: 2px solid rgba(0, 0, 0, 0.05);
            display: flex;
            gap: 1rem;
        }
        
        .chat-input input {
            flex: 1;
            padding: 0.875rem 1.25rem;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 0.875rem;
            transition: all 0.3s ease;
        }
        
        .chat-input input:focus {
            outline: none;
            border-color: var(--pink);
            box-shadow: 0 0 0 3px rgba(236, 72, 153, 0.1);
        }
        
        .send-btn {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--pink), #db2777);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.25rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .send-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(236, 72, 153, 0.3);
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
            
            .messages-container {
                grid-template-columns: 1fr;
            }
            
            .conversations-list {
                display: none;
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
                <a href="investisseurs.php" class="menu-item purple">
                    <i class="bi bi-people-fill"></i>
                    <span>Investisseurs</span>
                </a>
                <a href="evenements.php" class="menu-item orange">
                    <i class="bi bi-calendar-check-fill"></i>
                    <span>Événements</span>
                </a>
                <a href="messages.php" class="menu-item pink active">
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
            <h1 class="page-title">💬 Messages</h1>
            <p class="page-subtitle">Communiquez avec votre réseau</p>
        </div>
        
        <div class="messages-container">
            <!-- Conversations List -->
            <div class="conversations-list">
                <div class="search-box">
                    <input type="text" placeholder="Rechercher une conversation...">
                </div>
                
                <div class="conversation-item active">
                    <img src="https://ui-avatars.com/api/?name=Marie+Kouadio&background=ec4899&color=fff&size=100" 
                         alt="Marie Kouadio" class="conversation-avatar">
                    <div class="conversation-info">
                        <div class="conversation-name">Marie Kouadio</div>
                        <div class="conversation-preview">Merci pour votre projet, c'est très intéressant...</div>
                        <div class="conversation-time">Il y a 5 min</div>
                    </div>
                    <div class="unread-badge">2</div>
                </div>
                
                <div class="conversation-item">
                    <img src="https://ui-avatars.com/api/?name=Amadou+Diallo&background=3b82f6&color=fff&size=100" 
                         alt="Amadou Diallo" class="conversation-avatar">
                    <div class="conversation-info">
                        <div class="conversation-name">Amadou Diallo</div>
                        <div class="conversation-preview">Pouvons-nous planifier un rendez-vous?</div>
                        <div class="conversation-time">Il y a 2h</div>
                    </div>
                </div>
                
                <div class="conversation-item">
                    <img src="https://ui-avatars.com/api/?name=Equipe+CIA&background=10b981&color=fff&size=100" 
                         alt="Équipe CIA" class="conversation-avatar">
                    <div class="conversation-info">
                        <div class="conversation-name">Équipe CIA Invest</div>
                        <div class="conversation-preview">Bienvenue sur la plateforme!</div>
                        <div class="conversation-time">Hier</div>
                    </div>
                    <div class="unread-badge">1</div>
                </div>
                
                <div class="conversation-item">
                    <img src="https://ui-avatars.com/api/?name=Sophie+Martin&background=8b5cf6&color=fff&size=100" 
                         alt="Sophie Martin" class="conversation-avatar">
                    <div class="conversation-info">
                        <div class="conversation-name">Sophie Martin</div>
                        <div class="conversation-preview">J'aimerais en savoir plus sur votre modèle...</div>
                        <div class="conversation-time">Il y a 2j</div>
                    </div>
                </div>
            </div>
            
            <!-- Chat Panel -->
            <div class="chat-panel">
                <div class="chat-header">
                    <img src="https://ui-avatars.com/api/?name=Marie+Kouadio&background=ec4899&color=fff&size=100" 
                         alt="Marie Kouadio" class="chat-header-avatar">
                    <div class="chat-header-info">
                        <h3>Marie Kouadio</h3>
                        <div class="chat-header-status">
                            <i class="bi bi-circle-fill" style="font-size: 0.5rem;"></i>
                            En ligne
                        </div>
                    </div>
                </div>
                
                <div class="chat-messages">
                    <div class="message received">
                        <img src="https://ui-avatars.com/api/?name=Marie+Kouadio&background=ec4899&color=fff&size=80" 
                             alt="Marie" class="message-avatar">
                        <div class="message-content">
                            <div class="message-bubble">
                                Bonjour Jean! J'ai consulté votre projet d'application e-commerce et je trouve le concept vraiment innovant.
                            </div>
                            <div class="message-time">10:30</div>
                        </div>
                    </div>
                    
                    <div class="message sent">
                        <img src="https://ui-avatars.com/api/?name=Jean+Dupont&background=198754&color=fff&size=80" 
                             alt="Moi" class="message-avatar">
                        <div class="message-content">
                            <div class="message-bubble">
                                Merci beaucoup Marie! Je serais ravi d'en discuter avec vous plus en détail.
                            </div>
                            <div class="message-time">10:32</div>
                        </div>
                    </div>
                    
                    <div class="message received">
                        <img src="https://ui-avatars.com/api/?name=Marie+Kouadio&background=ec4899&color=fff&size=80" 
                             alt="Marie" class="message-avatar">
                        <div class="message-content">
                            <div class="message-bubble">
                                Parfait! J'aimerais comprendre davantage votre stratégie de monétisation et votre plan de déploiement sur le marché africain.
                            </div>
                            <div class="message-time">10:35</div>
                        </div>
                    </div>
                    
                    <div class="message sent">
                        <img src="https://ui-avatars.com/api/?name=Jean+Dupont&background=198754&color=fff&size=80" 
                             alt="Moi" class="message-avatar">
                        <div class="message-content">
                            <div class="message-bubble">
                                Avec plaisir! Puis-je vous envoyer notre business plan complet et organiser une visioconférence cette semaine?
                            </div>
                            <div class="message-time">10:38</div>
                        </div>
                    </div>
                    
                    <div class="message received">
                        <img src="https://ui-avatars.com/api/?name=Marie+Kouadio&background=ec4899&color=fff&size=80" 
                             alt="Marie" class="message-avatar">
                        <div class="message-content">
                            <div class="message-bubble">
                                Excellente idée! Je suis disponible jeudi après-midi ou vendredi matin. Quel créneau vous convient?
                            </div>
                            <div class="message-time">10:40</div>
                        </div>
                    </div>
                </div>
                
                <div class="chat-input">
                    <input type="text" placeholder="Tapez votre message...">
                    <button class="send-btn">
                        <i class="bi bi-send-fill"></i>
                    </button>
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
