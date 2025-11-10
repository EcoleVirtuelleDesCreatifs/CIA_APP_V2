<?php
$current_page = 'profil';
$page_title = 'Sécurité & Confidentialité';
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
            <h1 class="page-title">Sécurité & Confidentialité</h1>
            <p class="page-subtitle">Gérez la sécurité de votre compte</p>
        </div>
        
        <div class="form-section">
            <div class="section-header">
                <div class="section-icon"><i class="bi bi-shield-lock-fill"></i></div>
                <div>
                    <h2 class="section-title">Changer le mot de passe</h2>
                    <p class="section-description">Mettez à jour votre mot de passe</p>
                </div>
            </div>
            <form>
                <div class="form-group">
                    <label class="form-label">Mot de passe actuel<span class="required">*</span></label>
                    <input type="password" class="form-control-modern" placeholder="Entrez votre mot de passe actuel" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Nouveau mot de passe<span class="required">*</span></label>
                            <input type="password" class="form-control-modern" placeholder="Minimum 8 caractères" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Confirmer le mot de passe<span class="required">*</span></label>
                            <input type="password" class="form-control-modern" placeholder="Confirmez le mot de passe" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn-save"><i class="bi bi-check-circle-fill"></i> Mettre à jour</button>
            </form>
        </div>
        
        <div class="form-section">
            <div class="section-header">
                <div class="section-icon"><i class="bi bi-phone-fill"></i></div>
                <div>
                    <h2 class="section-title">Authentification à deux facteurs</h2>
                    <p class="section-description">Renforcez la sécurité de votre compte</p>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h5 style="font-weight: 700; color: #0a0e27;">Activer l'authentification 2FA</h5>
                    <p style="color: #64748b; margin: 0;">Recevez un code par SMS à chaque connexion</p>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" style="width: 60px; height: 30px; cursor: pointer;">
                </div>
            </div>
        </div>
        
        <div class="form-section">
            <div class="section-header">
                <div class="section-icon"><i class="bi bi-eye-slash-fill"></i></div>
                <div>
                    <h2 class="section-title">Confidentialité</h2>
                    <p class="section-description">Contrôlez la visibilité de vos informations</p>
                </div>
            </div>
            <div class="mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h6 style="font-weight: 600; color: #0a0e27; margin: 0;">Profil public</h6>
                        <small style="color: #64748b;">Votre profil est visible par tous</small>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" checked style="width: 50px; height: 25px; cursor: pointer;">
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h6 style="font-weight: 600; color: #0a0e27; margin: 0;">Afficher l'email</h6>
                        <small style="color: #64748b;">Votre email est visible sur votre profil</small>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" style="width: 50px; height: 25px; cursor: pointer;">
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 style="font-weight: 600; color: #0a0e27; margin: 0;">Afficher le téléphone</h6>
                        <small style="color: #64748b;">Votre numéro est visible sur votre profil</small>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" style="width: 50px; height: 25px; cursor: pointer;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
