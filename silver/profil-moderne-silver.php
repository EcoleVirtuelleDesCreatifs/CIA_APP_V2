<?php
$current_page = 'profil';
$page_title = 'Mon Profil';
$user_name = 'Marie Kouadio';
$user_email = 'marie.kouadio@example.com';
$user_phone = '+225 07 11 22 33 44';
$user_plan = 'Silver';
$user_avatar = 'https://ui-avatars.com/api/?name=Marie+Kouadio&background=6366f1&color=fff&size=400';
$member_since = 'Mars 2024';
$projects_count = 1;
$connections_count = 23;
$profile_completion = 75;
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
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: #f8fafc;
            color: #0f172a;
            line-height: 1.6;
        }
        
        .profile-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }
        
        .profile-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 3rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: #64748b;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .back-link:hover {
            color: #0f172a;
            transform: translateX(-4px);
        }
        
        .header-actions {
            display: flex;
            gap: 1rem;
        }
        
        .btn-clean {
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-primary-clean {
            background: #6366f1;
            color: white;
        }
        
        .btn-primary-clean:hover {
            background: #4f46e5;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.3);
        }
        
        .btn-secondary-clean {
            background: white;
            color: #64748b;
            border: 1px solid #e2e8f0;
        }
        
        .btn-secondary-clean:hover {
            border-color: #6366f1;
            color: #6366f1;
        }
        
        .card-clean {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            border: 1px solid #e2e8f0;
            transition: all 0.3s;
        }
        
        .card-clean:hover {
            box-shadow: 0 20px 60px rgba(15, 23, 42, 0.08);
            transform: translateY(-2px);
        }
        
        .profile-hero {
            display: grid;
            grid-template-columns: auto 1fr auto;
            gap: 2.5rem;
            align-items: center;
        }
        
        .avatar-large {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid white;
            box-shadow: 0 10px 40px rgba(99, 102, 241, 0.2);
        }
        
        .profile-info h1 {
            font-size: 2.5rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 0.5rem;
        }
        
        .profile-meta {
            display: flex;
            gap: 2rem;
            color: #64748b;
            font-size: 0.9375rem;
            margin-top: 1rem;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .badge-clean {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            background: #6366f1;
            color: white;
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 600;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
        }
        
        .stat-box-clean {
            text-align: center;
            padding: 2rem;
            background: #f8fafc;
            border-radius: 16px;
            transition: all 0.3s;
        }
        
        .stat-box-clean:hover {
            background: #f1f5f9;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 900;
            color: #0f172a;
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            color: #64748b;
            font-size: 0.9375rem;
            font-weight: 500;
        }
        
        .progress-clean {
            margin-top: 2rem;
        }
        
        .progress-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
        }
        
        .progress-title {
            font-weight: 600;
            color: #0f172a;
        }
        
        .progress-value {
            font-weight: 700;
            color: #6366f1;
        }
        
        .progress-bar-clean {
            height: 8px;
            background: #e2e8f0;
            border-radius: 50px;
            overflow: hidden;
        }
        
        .progress-fill-clean {
            height: 100%;
            background: linear-gradient(90deg, #6366f1, #818cf8);
            border-radius: 50px;
            transition: width 1s ease;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .info-section h3 {
            font-size: 1.125rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .info-item {
            display: flex;
            justify-content: space-between;
            padding: 1rem 0;
            border-bottom: 1px solid #f1f5f9;
        }
        
        .info-item:last-child {
            border-bottom: none;
        }
        
        .info-label {
            color: #64748b;
            font-weight: 500;
        }
        
        .info-value {
            color: #0f172a;
            font-weight: 600;
            text-align: right;
        }
        
        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-top: 1.5rem;
        }
        
        .skill-tag {
            padding: 0.5rem 1.25rem;
            background: #f8fafc;
            color: #0f172a;
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 600;
            border: 1px solid #e2e8f0;
            transition: all 0.3s;
        }
        
        .skill-tag:hover {
            background: #6366f1;
            color: white;
            border-color: #6366f1;
        }
        
        .upgrade-banner {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(217, 119, 6, 0.05));
            border: 2px solid rgba(245, 158, 11, 0.3);
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .upgrade-banner h4 {
            font-weight: 700;
            color: #0f172a;
            margin: 0 0 0.5rem 0;
        }
        
        .upgrade-banner p {
            color: #64748b;
            margin: 0;
        }
        
        .btn-upgrade {
            padding: 0.75rem 1.5rem;
            background: linear-gradient(135deg, #f59e0b, #d97706);
            color: white;
            border-radius: 12px;
            border: none;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-upgrade:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(245, 158, 11, 0.3);
            color: white;
        }
        
        @media (max-width: 768px) {
            .profile-hero {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .profile-info h1 {
                font-size: 2rem;
            }
            
            .profile-meta {
                flex-direction: column;
                gap: 0.75rem;
            }
            
            .header-actions {
                flex-direction: column;
            }
            
            .upgrade-banner {
                flex-direction: column;
                text-align: center;
                gap: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="profile-wrapper">
        <!-- Header -->
        <div class="profile-header">
            <a href="dashboard-silver.php" class="back-link">
                <i class="bi bi-arrow-left"></i>
                Retour au Dashboard
            </a>
            <div class="header-actions">
                <a href="modifier-profil-silver.php" class="btn-clean btn-primary-clean">
                    <i class="bi bi-pencil"></i>
                    Modifier
                </a>
                <button class="btn-clean btn-secondary-clean">
                    <i class="bi bi-share"></i>
                    Partager
                </button>
            </div>
        </div>
        
        <!-- Upgrade Banner -->
        <div class="upgrade-banner">
            <div>
                <h4>🚀 Passez au plan Gold pour débloquer plus de fonctionnalités</h4>
                <p>2 projets, formations illimitées, support prioritaire 24/7</p>
            </div>
            <a href="upgrade-gold.php" class="btn-upgrade">
                <i class="bi bi-star-fill"></i>
                Passer à Gold
            </a>
        </div>
        
        <!-- Profile Hero -->
        <div class="card-clean">
            <div class="profile-hero">
                <img src="<?php echo $user_avatar; ?>" alt="<?php echo $user_name; ?>" class="avatar-large">
                
                <div class="profile-info">
                    <h1><?php echo $user_name; ?></h1>
                    <p style="color: #64748b; font-size: 1.125rem; margin: 0;">Entrepreneure • Commerce Bio</p>
                    
                    <div class="profile-meta">
                        <div class="meta-item">
                            <i class="bi bi-envelope"></i>
                            <?php echo $user_email; ?>
                        </div>
                        <div class="meta-item">
                            <i class="bi bi-telephone"></i>
                            <?php echo $user_phone; ?>
                        </div>
                        <div class="meta-item">
                            <i class="bi bi-calendar"></i>
                            Membre depuis <?php echo $member_since; ?>
                        </div>
                    </div>
                </div>
                
                <span class="badge-clean">
                    <i class="bi bi-award-fill"></i>
                    <?php echo $user_plan; ?>
                </span>
            </div>
            
            <!-- Progress -->
            <div class="progress-clean">
                <div class="progress-header">
                    <span class="progress-title">Complétude du profil</span>
                    <span class="progress-value"><?php echo $profile_completion; ?>%</span>
                </div>
                <div class="progress-bar-clean">
                    <div class="progress-fill-clean" style="width: <?php echo $profile_completion; ?>%"></div>
                </div>
            </div>
        </div>
        
        <!-- Stats -->
        <div class="card-clean">
            <div class="stats-grid">
                <div class="stat-box-clean">
                    <div class="stat-number"><?php echo $projects_count; ?></div>
                    <div class="stat-label">Projet Actif</div>
                </div>
                <div class="stat-box-clean">
                    <div class="stat-number"><?php echo $connections_count; ?></div>
                    <div class="stat-label">Connexions</div>
                </div>
                <div class="stat-box-clean">
                    <div class="stat-number">8</div>
                    <div class="stat-label">Événements</div>
                </div>
            </div>
        </div>
        
        <!-- Info Grid -->
        <div class="info-grid">
            <!-- Informations Professionnelles -->
            <div class="card-clean">
                <div class="info-section">
                    <h3>Informations Professionnelles</h3>
                    <div class="info-item">
                        <span class="info-label">Entreprise</span>
                        <span class="info-value">Bio Market CI</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Poste</span>
                        <span class="info-value">Fondatrice</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Secteur</span>
                        <span class="info-value">Commerce Bio</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Expérience</span>
                        <span class="info-value">5 ans</span>
                    </div>
                </div>
            </div>
            
            <!-- Informations Personnelles -->
            <div class="card-clean">
                <div class="info-section">
                    <h3>Informations Personnelles</h3>
                    <div class="info-item">
                        <span class="info-label">Localisation</span>
                        <span class="info-value">Abidjan, Côte d'Ivoire</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Langue</span>
                        <span class="info-value">Français</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Site Web</span>
                        <span class="info-value">biomarket.ci</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">LinkedIn</span>
                        <span class="info-value">@mariekouadio</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Compétences -->
        <div class="card-clean">
            <h3 style="font-size: 1.5rem; font-weight: 700; color: #0f172a; margin-bottom: 1.5rem;">Compétences</h3>
            <div class="skills-list">
                <span class="skill-tag">E-commerce</span>
                <span class="skill-tag">Marketing</span>
                <span class="skill-tag">Gestion de projet</span>
                <span class="skill-tag">Agriculture Bio</span>
                <span class="skill-tag">Logistique</span>
                <span class="skill-tag">Service Client</span>
            </div>
        </div>
        
        <!-- Bio -->
        <div class="card-clean">
            <h3 style="font-size: 1.5rem; font-weight: 700; color: #0f172a; margin-bottom: 1.5rem;">À propos</h3>
            <p style="color: #64748b; line-height: 1.8; font-size: 1.0625rem;">
                Passionnée par l'agriculture biologique et le commerce équitable, j'ai fondé Bio Market CI 
                pour connecter les producteurs locaux aux consommateurs urbains. Mon objectif est de 
                promouvoir une alimentation saine et durable tout en soutenant l'économie locale.
            </p>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const progressBar = document.querySelector('.progress-fill-clean');
            const width = progressBar.style.width;
            progressBar.style.width = '0%';
            setTimeout(() => {
                progressBar.style.width = width;
            }, 300);
        });
    </script>
</body>
</html>
