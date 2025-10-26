<?php
/**
 * Paramètres - CIA Invest Gold V2
 * Configuration du compte et préférences
 */

$current_page = 'parametres';
$page_title = 'Paramètres';
$custom_styles = '
<style>
    .settings-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 24px;
        padding: 2rem;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
    }
    
    .settings-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .settings-section {
        border-bottom: 2px solid rgba(0, 0, 0, 0.05);
        padding-bottom: 1.5rem;
        margin-bottom: 1.5rem;
    }
    
    .settings-section:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }
    
    .setting-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
        border-radius: 12px;
        margin-bottom: 0.5rem;
        transition: all 0.3s ease;
    }
    
    .setting-item:hover {
        background: #f8fafc;
    }
    
    .setting-info {
        flex: 1;
    }
    
    .setting-label {
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 0.25rem;
    }
    
    .setting-description {
        font-size: 0.875rem;
        color: #64748b;
    }
    
    .toggle-switch {
        position: relative;
        width: 60px;
        height: 32px;
        background: #e2e8f0;
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .toggle-switch.active {
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
    }
    
    .toggle-switch::after {
        content: "";
        position: absolute;
        top: 4px;
        left: 4px;
        width: 24px;
        height: 24px;
        background: white;
        border-radius: 50%;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }
    
    .toggle-switch.active::after {
        left: 32px;
    }
    
    .form-group {
        margin-bottom: 1.5rem;
    }
    
    .form-label {
        display: block;
        font-weight: 600;
        color: #475569;
        margin-bottom: 0.5rem;
    }
    
    .form-control {
        width: 100%;
        padding: 0.875rem 1.25rem;
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        font-size: 1rem;
        transition: all 0.3s ease;
        font-family: "Inter", sans-serif;
    }
    
    .form-control:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(25, 135, 84, 0.1);
    }
    
    .btn-modern {
        padding: 0.875rem 2rem;
        border-radius: 12px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        margin-right: 1rem;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        color: white;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(25, 135, 84, 0.3);
    }
    
    .btn-danger {
        background: linear-gradient(135deg, #ef4444, #dc2626);
        color: white;
    }
    
    .btn-danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(239, 68, 68, 0.3);
    }
    
    .btn-outline {
        background: transparent;
        border: 2px solid #e2e8f0;
        color: #64748b;
    }
    
    .btn-outline:hover {
        background: #f8fafc;
        border-color: var(--primary);
        color: var(--primary);
    }
    
    .alert-warning {
        background: linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(217, 119, 6, 0.05));
        border: 2px solid #f59e0b;
        border-radius: 12px;
        padding: 1rem 1.5rem;
        color: #92400e;
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }
    
    .alert-warning i {
        font-size: 1.5rem;
        color: #f59e0b;
    }
</style>
';

include 'includes/header.php';
?>

<div class="page-header">
    <h1 class="page-title">⚙️ Paramètres</h1>
    <p class="page-subtitle">Configurez votre compte et vos préférences</p>
</div>

<!-- Account Settings -->
<div class="settings-card">
    <h3 class="settings-title">
        <i class="bi bi-person-gear"></i>
        Compte
    </h3>
    
    <div class="settings-section">
        <div class="form-group">
            <label class="form-label">Abonnement actuel</label>
            <div class="d-flex align-items-center gap-3">
                <div class="flex-grow-1">
                    <div class="setting-label">Plan Gold</div>
                    <div class="setting-description">Accès complet à toutes les fonctionnalités premium</div>
                </div>
                <button class="btn-modern btn-primary">
                    <i class="bi bi-arrow-up-circle"></i>
                    Améliorer
                </button>
            </div>
        </div>
    </div>
    
    <div class="settings-section">
        <h4 style="font-weight: 600; color: #1e293b; margin-bottom: 1rem;">Changer le mot de passe</h4>
        <div class="form-group">
            <label class="form-label">Mot de passe actuel</label>
            <input type="password" class="form-control" placeholder="••••••••">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Nouveau mot de passe</label>
                    <input type="password" class="form-control" placeholder="••••••••">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Confirmer le mot de passe</label>
                    <input type="password" class="form-control" placeholder="••••••••">
                </div>
            </div>
        </div>
        <button class="btn-modern btn-primary">
            <i class="bi bi-shield-check"></i>
            Mettre à jour le mot de passe
        </button>
    </div>
</div>

<!-- Notification Settings -->
<div class="settings-card">
    <h3 class="settings-title">
        <i class="bi bi-bell"></i>
        Notifications
    </h3>
    
    <div class="setting-item">
        <div class="setting-info">
            <div class="setting-label">Notifications par email</div>
            <div class="setting-description">Recevoir des emails sur les activités importantes</div>
        </div>
        <div class="toggle-switch active" onclick="this.classList.toggle('active')"></div>
    </div>
    
    <div class="setting-item">
        <div class="setting-info">
            <div class="setting-label">Nouveaux investisseurs</div>
            <div class="setting-description">Être notifié quand un investisseur consulte vos projets</div>
        </div>
        <div class="toggle-switch active" onclick="this.classList.toggle('active')"></div>
    </div>
    
    <div class="setting-item">
        <div class="setting-info">
            <div class="setting-label">Messages</div>
            <div class="setting-description">Notifications pour les nouveaux messages</div>
        </div>
        <div class="toggle-switch active" onclick="this.classList.toggle('active')"></div>
    </div>
    
    <div class="setting-item">
        <div class="setting-info">
            <div class="setting-label">Événements</div>
            <div class="setting-description">Rappels pour les événements et rendez-vous</div>
        </div>
        <div class="toggle-switch active" onclick="this.classList.toggle('active')"></div>
    </div>
    
    <div class="setting-item">
        <div class="setting-info">
            <div class="setting-label">Newsletter</div>
            <div class="setting-description">Recevoir les actualités et conseils CIA Invest</div>
        </div>
        <div class="toggle-switch" onclick="this.classList.toggle('active')"></div>
    </div>
</div>

<!-- Privacy Settings -->
<div class="settings-card">
    <h3 class="settings-title">
        <i class="bi bi-shield-lock"></i>
        Confidentialité
    </h3>
    
    <div class="setting-item">
        <div class="setting-info">
            <div class="setting-label">Profil public</div>
            <div class="setting-description">Votre profil est visible par tous les membres</div>
        </div>
        <div class="toggle-switch active" onclick="this.classList.toggle('active')"></div>
    </div>
    
    <div class="setting-item">
        <div class="setting-info">
            <div class="setting-label">Afficher l'email</div>
            <div class="setting-description">Les autres membres peuvent voir votre email</div>
        </div>
        <div class="toggle-switch" onclick="this.classList.toggle('active')"></div>
    </div>
    
    <div class="setting-item">
        <div class="setting-info">
            <div class="setting-label">Afficher le téléphone</div>
            <div class="setting-description">Les investisseurs peuvent voir votre numéro</div>
        </div>
        <div class="toggle-switch" onclick="this.classList.toggle('active')"></div>
    </div>
    
    <div class="setting-item">
        <div class="setting-info">
            <div class="setting-label">Authentification à deux facteurs</div>
            <div class="setting-description">Sécurité renforcée pour votre compte</div>
        </div>
        <div class="toggle-switch active" onclick="this.classList.toggle('active')"></div>
    </div>
</div>

<!-- Language & Region -->
<div class="settings-card">
    <h3 class="settings-title">
        <i class="bi bi-globe"></i>
        Langue & Région
    </h3>
    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Langue</label>
                <select class="form-control">
                    <option>Français</option>
                    <option>English</option>
                    <option>Español</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Fuseau horaire</label>
                <select class="form-control">
                    <option>GMT+0 (Abidjan)</option>
                    <option>GMT+1 (Paris)</option>
                    <option>GMT-5 (New York)</option>
                </select>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <label class="form-label">Devise</label>
        <select class="form-control">
            <option>Euro (€)</option>
            <option>Franc CFA (FCFA)</option>
            <option>Dollar US ($)</option>
        </select>
    </div>
</div>

<!-- Danger Zone -->
<div class="settings-card" style="border: 2px solid #ef4444;">
    <h3 class="settings-title" style="color: #ef4444;">
        <i class="bi bi-exclamation-triangle"></i>
        Zone dangereuse
    </h3>
    
    <div class="alert-warning">
        <i class="bi bi-shield-exclamation"></i>
        <div>
            <strong>Attention :</strong> Ces actions sont irréversibles. Assurez-vous de bien comprendre les conséquences avant de continuer.
        </div>
    </div>
    
    <div class="settings-section">
        <div class="setting-item">
            <div class="setting-info">
                <div class="setting-label">Désactiver le compte</div>
                <div class="setting-description">Votre compte sera temporairement désactivé</div>
            </div>
            <button class="btn-modern btn-outline">
                <i class="bi bi-pause-circle"></i>
                Désactiver
            </button>
        </div>
        
        <div class="setting-item">
            <div class="setting-info">
                <div class="setting-label">Supprimer le compte</div>
                <div class="setting-description">Suppression permanente de toutes vos données</div>
            </div>
            <button class="btn-modern btn-danger">
                <i class="bi bi-trash"></i>
                Supprimer
            </button>
        </div>
    </div>
</div>

<!-- Save Button -->
<div class="text-center mb-4">
    <button type="button" class="btn-modern btn-primary">
        <i class="bi bi-check-circle"></i>
        Enregistrer tous les paramètres
    </button>
    <button type="button" class="btn-modern btn-outline">
        <i class="bi bi-arrow-counterclockwise"></i>
        Réinitialiser
    </button>
</div>

<?php include 'includes/footer.php'; ?>
