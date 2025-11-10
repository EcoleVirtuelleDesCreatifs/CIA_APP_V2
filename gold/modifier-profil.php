<?php
$current_page = 'profil';
$page_title = 'Modifier mon Profil';
$user_name = 'Jean Dupont';
$user_email = 'jean.dupont@example.com';
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
            <a href="profil.php" class="back-btn"><i class="bi bi-arrow-left"></i> Retour au Profil</a>
            <h1 class="page-title">Modifier mon Profil</h1>
            <p class="page-subtitle">Mettez à jour vos informations</p>
        </div>
        
        <div class="success-message" id="successMessage">
            <i class="bi bi-check-circle-fill"></i>
            <span>Modifications enregistrées avec succès !</span>
        </div>
        
        <form id="profileForm">
            <div class="form-section">
                <div class="section-header">
                    <div class="section-icon"><i class="bi bi-person-fill"></i></div>
                    <div>
                        <h2 class="section-title">Informations Personnelles</h2>
                        <p class="section-description">Vos informations de base</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Prénom<span class="required">*</span></label>
                            <input type="text" class="form-control-modern" value="Jean" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Nom<span class="required">*</span></label>
                            <input type="text" class="form-control-modern" value="Dupont" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Email<span class="required">*</span></label>
                            <input type="email" class="form-control-modern" value="jean.dupont@example.com" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Téléphone<span class="required">*</span></label>
                            <input type="tel" class="form-control-modern" value="+225 07 12 34 56 78" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Bio / Présentation</label>
                    <textarea class="form-control-modern">Entrepreneur passionné par l'innovation technologique en Afrique.</textarea>
                </div>
            </div>
            
            <div class="form-section">
                <div class="section-header">
                    <div class="section-icon"><i class="bi bi-briefcase-fill"></i></div>
                    <div>
                        <h2 class="section-title">Informations Professionnelles</h2>
                        <p class="section-description">Votre activité professionnelle</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Entreprise</label>
                            <input type="text" class="form-control-modern" value="Tech Solutions CI">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Poste</label>
                            <input type="text" class="form-control-modern" value="Fondateur & CEO">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="action-buttons">
                <button type="submit" class="btn-save">
                    <i class="bi bi-check-circle-fill"></i> Enregistrer
                </button>
                <button type="button" class="btn-cancel" onclick="window.location.href='profil.php'">
                    <i class="bi bi-x-circle-fill"></i> Annuler
                </button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/form-scripts.js"></script>
</body>
</html>
