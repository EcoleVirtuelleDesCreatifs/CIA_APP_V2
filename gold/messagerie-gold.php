<?php
$current_page = 'messagerie';
$page_title = 'Messagerie Gold';
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
    <link rel="stylesheet" href="assets/css/profil-styles.css">
    <style>
        .messagerie-container { display: flex; height: calc(100vh - 200px); gap: 1rem; }
        .conversations-list { width: 350px; background: white; border-radius: 24px; padding: 1.5rem; overflow-y: auto; }
        .chat-window { flex: 1; background: white; border-radius: 24px; display: flex; flex-direction: column; }
        .conversation-item { padding: 1rem; border-radius: 12px; margin-bottom: 0.5rem; cursor: pointer; transition: all 0.3s; display: flex; gap: 1rem; align-items: center; }
        .conversation-item:hover { background: rgba(25, 135, 84, 0.05); }
        .conversation-item.active { background: linear-gradient(135deg, rgba(25, 135, 84, 0.1), rgba(32, 201, 151, 0.05)); }
        .conversation-avatar { width: 50px; height: 50px; border-radius: 50%; }
        .conversation-info h5 { font-weight: 700; color: #0a0e27; margin: 0; font-size: 0.9375rem; }
        .conversation-info p { color: #64748b; margin: 0; font-size: 0.875rem; }
        .unread-badge { width: 24px; height: 24px; background: var(--danger); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; font-weight: 700; margin-left: auto; }
        .chat-header { padding: 1.5rem; border-bottom: 2px solid #e2e8f0; display: flex; align-items: center; gap: 1rem; }
        .chat-messages { flex: 1; padding: 1.5rem; overflow-y: auto; }
        .message { display: flex; gap: 1rem; margin-bottom: 1.5rem; }
        .message.sent { flex-direction: row-reverse; }
        .message-avatar { width: 40px; height: 40px; border-radius: 50%; }
        .message-content { max-width: 60%; }
        .message-bubble { padding: 1rem 1.25rem; border-radius: 16px; }
        .message.received .message-bubble { background: #f1f5f9; color: #0a0e27; }
        .message.sent .message-bubble { background: linear-gradient(135deg, var(--primary), var(--primary-light)); color: white; }
        .message-time { font-size: 0.75rem; color: #94a3b8; margin-top: 0.5rem; }
        .chat-input { padding: 1.5rem; border-top: 2px solid #e2e8f0; display: flex; gap: 1rem; }
        .chat-input input { flex: 1; padding: 1rem 1.5rem; border: 2px solid #e2e8f0; border-radius: 50px; font-size: 1rem; }
        .chat-input input:focus { outline: none; border-color: var(--primary); }
        .btn-send { width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(135deg, var(--primary), var(--primary-light)); color: white; border: none; font-size: 1.25rem; cursor: pointer; transition: all 0.3s; }
        .btn-send:hover { transform: scale(1.1); }
    </style>
</head>
<body>
    <div class="bg-animated"></div>
    <div class="profile-container">
        <div class="profile-header">
            <a href="dashboard-gold-v2.php" class="back-btn"><i class="bi bi-arrow-left"></i> Retour au Dashboard</a>
            <h1 class="page-title">💬 Messagerie</h1>
            <p class="page-subtitle">Communiquez avec les investisseurs et l'équipe CIA</p>
        </div>
        
        <div class="messagerie-container">
            <div class="conversations-list">
                <h3 style="font-weight: 800; margin-bottom: 1.5rem;">Conversations</h3>
                <div class="conversation-item active">
                    <img src="https://ui-avatars.com/api/?name=Marie+Kouadio&background=3b82f6&color=fff" class="conversation-avatar">
                    <div class="conversation-info">
                        <h5>Marie Kouadio</h5>
                        <p>Intéressée par votre projet...</p>
                    </div>
                    <span class="unread-badge">3</span>
                </div>
                <div class="conversation-item">
                    <img src="https://ui-avatars.com/api/?name=Amadou+Diallo&background=10b981&color=fff" class="conversation-avatar">
                    <div class="conversation-info">
                        <h5>Amadou Diallo</h5>
                        <p>Merci pour les informations</p>
                    </div>
                </div>
                <div class="conversation-item">
                    <img src="https://ui-avatars.com/api/?name=CIA+Support&background=8b5cf6&color=fff" class="conversation-avatar">
                    <div class="conversation-info">
                        <h5>Support CIA</h5>
                        <p>Comment pouvons-nous vous aider?</p>
                    </div>
                    <span class="unread-badge">1</span>
                </div>
            </div>
            
            <div class="chat-window">
                <div class="chat-header">
                    <img src="https://ui-avatars.com/api/?name=Marie+Kouadio&background=3b82f6&color=fff" class="conversation-avatar">
                    <div>
                        <h4 style="font-weight: 700; margin: 0;">Marie Kouadio</h4>
                        <p style="color: #64748b; margin: 0; font-size: 0.875rem;">En ligne</p>
                    </div>
                </div>
                
                <div class="chat-messages">
                    <div class="message received">
                        <img src="https://ui-avatars.com/api/?name=Marie+Kouadio&background=3b82f6&color=fff" class="message-avatar">
                        <div class="message-content">
                            <div class="message-bubble">Bonjour! J'ai vu votre projet d'application e-commerce et je suis très intéressée.</div>
                            <div class="message-time">Il y a 10 min</div>
                        </div>
                    </div>
                    
                    <div class="message sent">
                        <img src="https://ui-avatars.com/api/?name=Jean+Dupont&background=198754&color=fff" class="message-avatar">
                        <div class="message-content">
                            <div class="message-bubble">Bonjour Marie! Merci pour votre intérêt. Je serais ravi d'en discuter avec vous.</div>
                            <div class="message-time">Il y a 8 min</div>
                        </div>
                    </div>
                    
                    <div class="message received">
                        <img src="https://ui-avatars.com/api/?name=Marie+Kouadio&background=3b82f6&color=fff" class="message-avatar">
                        <div class="message-content">
                            <div class="message-bubble">Parfait! Pouvez-vous m'envoyer plus de détails sur le modèle économique?</div>
                            <div class="message-time">Il y a 5 min</div>
                        </div>
                    </div>
                </div>
                
                <div class="chat-input">
                    <input type="text" placeholder="Écrivez votre message...">
                    <button class="btn-send"><i class="bi bi-send-fill"></i></button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
