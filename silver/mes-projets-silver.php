<?php
$current_page = 'projets';
$page_title = 'Mon Projet';
$user_plan = 'Silver';
$projects_count = 1;
$projects_limit = 1;
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
    <link rel="stylesheet" href="../gold/assets/css/profil-styles.css">
    <style>
        :root {
            --primary: #6366f1;
            --primary-light: #818cf8;
        }
        .upgrade-card {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(217, 119, 6, 0.05));
            border: 2px solid rgba(245, 158, 11, 0.3);
            border-radius: 24px;
            padding: 2.5rem;
            text-align: center;
            margin-bottom: 2rem;
        }
        .upgrade-card h3 {
            font-weight: 800;
            color: #0a0e27;
            margin-bottom: 1rem;
        }
        .upgrade-card p {
            color: #64748b;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
    <div class="bg-animated"></div>
    <div class="profile-container">
        <div class="profile-header">
            <a href="dashboard-silver.php" class="back-btn"><i class="bi bi-arrow-left"></i> Retour au Dashboard</a>
            <h1 class="page-title">📁 Mon Projet</h1>
            <p class="page-subtitle">Gérez votre projet entrepreneurial (Limite Silver: 1 projet)</p>
        </div>
        
        <?php if($projects_count >= $projects_limit): ?>
        <div class="upgrade-card">
            <h3>🚀 Vous avez atteint la limite Silver</h3>
            <p>Passez au plan Gold pour publier jusqu'à 2 projets et accéder à des fonctionnalités exclusives</p>
            <a href="upgrade-gold.php" class="btn-action btn-primary-action">
                <i class="bi bi-star-fill"></i> Passer à Gold
            </a>
        </div>
        <?php endif; ?>
        
        <div class="form-section">
            <div class="section-header">
                <div class="section-icon" style="background: linear-gradient(135deg, #6366f1, #818cf8);"><i class="bi bi-folder-fill"></i></div>
                <div>
                    <h2 class="section-title">Boutique Bio en Ligne</h2>
                    <p class="section-description">E-commerce spécialisé dans les produits biologiques</p>
                </div>
            </div>
            
            <div class="row g-4 mb-4">
                <div class="col-md-3">
                    <div style="padding: 1.5rem; background: rgba(99, 102, 241, 0.1); border-radius: 16px; text-align: center;">
                        <div style="font-size: 2rem; font-weight: 900; color: #6366f1;">8</div>
                        <div style="color: #64748b; font-size: 0.875rem;">Investisseurs intéressés</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div style="padding: 1.5rem; background: rgba(16, 185, 129, 0.1); border-radius: 16px; text-align: center;">
                        <div style="font-size: 2rem; font-weight: 900; color: var(--success);">30K €</div>
                        <div style="color: #64748b; font-size: 0.875rem;">Financement recherché</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div style="padding: 1.5rem; background: rgba(245, 158, 11, 0.1); border-radius: 16px; text-align: center;">
                        <div style="font-size: 2rem; font-weight: 900; color: var(--warning);">90%</div>
                        <div style="color: #64748b; font-size: 0.875rem;">Complétion</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div style="padding: 1.5rem; background: rgba(236, 72, 153, 0.1); border-radius: 16px; text-align: center;">
                        <div style="font-size: 2rem; font-weight: 900; color: var(--pink);">30j</div>
                        <div style="color: #64748b; font-size: 0.875rem;">Date limite</div>
                    </div>
                </div>
            </div>
            
            <div class="d-flex gap-3 flex-wrap">
                <a href="projet-details-silver.php?id=1" class="btn-action btn-primary-action">
                    <i class="bi bi-eye"></i> Voir les Détails
                </a>
                <a href="modifier-projet-silver.php?id=1" class="btn-action btn-secondary-action">
                    <i class="bi bi-pencil"></i> Modifier
                </a>
                <button class="btn-action btn-secondary-action" onclick="alert('Lien de partage copié!')">
                    <i class="bi bi-share"></i> Partager
                </button>
            </div>
        </div>
        
        <div class="form-section">
            <h3 style="font-weight: 800; margin-bottom: 1.5rem;"><i class="bi bi-lightbulb"></i> Conseils pour Optimiser votre Projet</h3>
            <div class="row g-3">
                <div class="col-md-6">
                    <div style="padding: 1.5rem; background: rgba(59, 130, 246, 0.05); border-left: 4px solid var(--info); border-radius: 12px;">
                        <h5 style="font-weight: 700; color: #0a0e27; margin-bottom: 0.5rem;">📝 Complétez votre profil</h5>
                        <p style="color: #64748b; margin: 0; font-size: 0.9375rem;">Un profil complet augmente vos chances de 70%</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="padding: 1.5rem; background: rgba(139, 92, 246, 0.05); border-left: 4px solid var(--purple); border-radius: 12px;">
                        <h5 style="font-weight: 700; color: #0a0e27; margin-bottom: 0.5rem;">📊 Ajoutez des visuels</h5>
                        <p style="color: #64748b; margin: 0; font-size: 0.9375rem;">Photos et vidéos attirent plus d'investisseurs</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="padding: 1.5rem; background: rgba(16, 185, 129, 0.05); border-left: 4px solid var(--success); border-radius: 12px;">
                        <h5 style="font-weight: 700; color: #0a0e27; margin-bottom: 0.5rem;">💬 Répondez rapidement</h5>
                        <p style="color: #64748b; margin: 0; font-size: 0.9375rem;">Réactivité = crédibilité auprès des investisseurs</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="padding: 1.5rem; background: rgba(245, 158, 11, 0.05); border-left: 4px solid var(--warning); border-radius: 12px;">
                        <h5 style="font-weight: 700; color: #0a0e27; margin-bottom: 0.5rem;">⭐ Passez à Gold</h5>
                        <p style="color: #64748b; margin: 0; font-size: 0.9375rem;">Publiez 2 projets et accédez aux formations</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
