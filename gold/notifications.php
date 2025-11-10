<?php
$current_page = 'profil';
$page_title = 'Préférences & Notifications';
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
    <link rel="stylesheet" href="assets/css/form-styles.css">
</head>
<body>
    <div class="bg-animated"></div>
    <div class="profile-container">
        <div class="profile-header">
            <a href="dashboard.php" class="back-btn"><i class="bi bi-arrow-left"></i> Retour au Dashboard</a>
            <h1 class="page-title">Préférences & Notifications</h1>
            <p class="page-subtitle">Personnalisez vos notifications</p>
        </div>
        
        <div class="form-section">
            <div class="section-header">
                <div class="section-icon"><i class="bi bi-bell-fill"></i></div>
                <div>
                    <h2 class="section-title">Notifications Email</h2>
                    <p class="section-description">Choisissez les emails que vous souhaitez recevoir</p>
                </div>
            </div>
            <div class="mb-3 pb-3" style="border-bottom: 1px solid rgba(0,0,0,0.05);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 style="font-weight: 600; color: #0a0e27; margin: 0;">Nouveaux projets</h6>
                        <small style="color: #64748b;">Recevez un email pour chaque nouveau projet</small>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" checked style="width: 50px; height: 25px; cursor: pointer;">
                    </div>
                </div>
            </div>
            <div class="mb-3 pb-3" style="border-bottom: 1px solid rgba(0,0,0,0.05);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 style="font-weight: 600; color: #0a0e27; margin: 0;">Messages</h6>
                        <small style="color: #64748b;">Notifications pour les nouveaux messages</small>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" checked style="width: 50px; height: 25px; cursor: pointer;">
                    </div>
                </div>
            </div>
            <div class="mb-3 pb-3" style="border-bottom: 1px solid rgba(0,0,0,0.05);">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 style="font-weight: 600; color: #0a0e27; margin: 0;">Événements</h6>
                        <small style="color: #64748b;">Rappels pour les événements à venir</small>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" checked style="width: 50px; height: 25px; cursor: pointer;">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 style="font-weight: 600; color: #0a0e27; margin: 0;">Newsletter</h6>
                        <small style="color: #64748b;">Actualités et conseils hebdomadaires</small>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" style="width: 50px; height: 25px; cursor: pointer;">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-section">
            <div class="section-header">
                <div class="section-icon"><i class="bi bi-palette-fill"></i></div>
                <div>
                    <h2 class="section-title">Préférences d'affichage</h2>
                    <p class="section-description">Personnalisez l'apparence de votre interface</p>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Langue</label>
                <select class="form-control-modern">
                    <option value="fr" selected>Français</option>
                    <option value="en">English</option>
                    <option value="es">Español</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Fuseau horaire</label>
                <select class="form-control-modern">
                    <option value="Africa/Abidjan" selected>GMT (Abidjan)</option>
                    <option value="Africa/Lagos">WAT (Lagos)</option>
                    <option value="Africa/Dakar">GMT (Dakar)</option>
                </select>
            </div>
        </div>
        
        <div class="action-buttons">
            <button type="submit" class="btn-save"><i class="bi bi-check-circle-fill"></i> Enregistrer les préférences</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
