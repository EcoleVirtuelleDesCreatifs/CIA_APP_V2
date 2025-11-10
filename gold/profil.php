<?php
/**
 * Mon Profil - CIA Invest Gold V2
 * Page de profil ultra-moderne et persuasive
 */

$current_page = 'profil';
$page_title = 'Mon Profil';
$user_name = 'Jean Dupont';
$user_email = 'jean.dupont@example.com';
$user_plan = 'Gold';
$user_avatar = 'https://ui-avatars.com/api/?name=Jean+Dupont&background=198754&color=fff&size=200';
$member_since = 'Janvier 2024';
$projects_count = 2;
$connections_count = 24;
$profile_completion = 85;
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
</head>
<body>
    <div class="bg-animated"></div>
    
    <div class="profile-container">
        <div class="profile-header">
            <a href="dashboard.php" class="back-btn"><i class="bi bi-arrow-left"></i> Retour au Dashboard</a>
            <h1 class="page-title">Mon Profil Complet</h1>
            <p class="page-subtitle">Gérez toutes vos informations professionnelles</p>
        </div>
        
        <div class="profile-banner">
            <div class="banner-cover">
                <button class="banner-edit-btn"><i class="bi bi-camera"></i> Modifier la couverture</button>
            </div>
            
            <div class="profile-info-section">
                <div class="avatar-wrapper">
                    <img src="<?php echo $user_avatar; ?>" alt="<?php echo $user_name; ?>" class="profile-avatar-large">
                    <div class="avatar-edit-overlay"><i class="bi bi-camera-fill"></i></div>
                </div>
                
                <div class="profile-main-info">
                    <h2 class="profile-name-large"><?php echo $user_name; ?></h2>
                    <p class="profile-title">Fondateur & CEO • Tech Solutions CI</p>
                    
                    <div class="profile-badges">
                        <span class="badge-modern badge-gold"><i class="bi bi-star-fill"></i> Membre <?php echo $user_plan; ?></span>
                        <span class="badge-modern badge-verified"><i class="bi bi-patch-check-fill"></i> Profil Vérifié</span>
                        <span class="badge-modern badge-member"><i class="bi bi-calendar-check"></i> Membre depuis <?php echo $member_since; ?></span>
                    </div>
                    
                    <div class="profile-actions">
                        <a href="modifier-profil.php" class="btn-action btn-primary-action"><i class="bi bi-pencil-square"></i> Modifier le profil</a>
                        <button class="btn-action btn-secondary-action"><i class="bi bi-share"></i> Partager</button>
                        <button class="btn-action btn-secondary-action"><i class="bi bi-download"></i> Télécharger CV</button>
                    </div>
                </div>
                
                <div class="stats-grid">
                    <div class="stat-box"><div class="stat-number"><?php echo $projects_count; ?></div><div class="stat-label">Projets Actifs</div></div>
                    <div class="stat-box"><div class="stat-number"><?php echo $connections_count; ?></div><div class="stat-label">Connexions</div></div>
                    <div class="stat-box"><div class="stat-number">12</div><div class="stat-label">Événements</div></div>
                    <div class="stat-box"><div class="stat-number">5</div><div class="stat-label">Formations</div></div>
                    <div class="stat-box"><div class="stat-number"><?php echo $profile_completion; ?>%</div><div class="stat-label">Profil Complété</div></div>
                </div>
            </div>
        </div>
        
        <div class="tabs-nav">
            <button class="tab-btn active" onclick="showTab('overview')"><i class="bi bi-grid-fill"></i> Vue d'ensemble</button>
            <button class="tab-btn" onclick="showTab('about')"><i class="bi bi-person-fill"></i> À propos</button>
            <button class="tab-btn" onclick="showTab('experience')"><i class="bi bi-briefcase-fill"></i> Expérience</button>
            <button class="tab-btn" onclick="showTab('skills')"><i class="bi bi-star-fill"></i> Compétences</button>
            <button class="tab-btn" onclick="showTab('achievements')"><i class="bi bi-trophy-fill"></i> Réalisations</button>
        </div>
        
        <div id="tab-overview" class="tab-content">
            <div class="content-card">
                <h3 class="card-title"><i class="bi bi-graph-up-arrow"></i> Complétez votre profil</h3>
                <p class="card-subtitle">Un profil complet augmente vos chances de connexion de 70%</p>
                <div class="progress-section">
                    <div class="progress-header">
                        <span class="progress-title">Progression du profil</span>
                        <span class="progress-percentage"><?php echo $profile_completion; ?>%</span>
                    </div>
                    <div class="progress-bar-modern"><div class="progress-fill" style="width: <?php echo $profile_completion; ?>%"></div></div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/profil-scripts.js"></script>
</body>
</html>
