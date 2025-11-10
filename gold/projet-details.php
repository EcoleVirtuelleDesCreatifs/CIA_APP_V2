<?php
$current_page = 'projets';
$page_title = 'Détails du Projet';
$project_id = $_GET['id'] ?? 1;
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
        .project-hero {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            border-radius: 24px;
            padding: 3rem;
            color: white;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }
        .project-hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: translate(50%, -50%);
        }
        .project-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .project-title-large {
            font-size: 2.5rem;
            font-weight: 900;
            margin-bottom: 1rem;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        .info-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }
        .info-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            color: white;
            margin-bottom: 1rem;
        }
        .info-title {
            font-size: 0.875rem;
            color: #64748b;
            margin-bottom: 0.5rem;
        }
        .info-value {
            font-size: 1.75rem;
            font-weight: 900;
            color: #0a0e27;
        }
        .section-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 2.5rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            margin-bottom: 2rem;
        }
        .section-title {
            font-size: 1.5rem;
            font-weight: 800;
            color: #0a0e27;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        .timeline {
            position: relative;
            padding-left: 2rem;
        }
        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(180deg, var(--primary), var(--primary-light));
        }
        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
            padding-left: 1.5rem;
        }
        .timeline-marker {
            position: absolute;
            left: -2.5rem;
            top: 0;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: var(--primary);
            border: 4px solid white;
            box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.2);
        }
        .investor-card {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.5rem;
            background: white;
            border-radius: 16px;
            margin-bottom: 1rem;
            border: 2px solid #e2e8f0;
            transition: all 0.3s;
        }
        .investor-card:hover {
            border-color: var(--primary);
            transform: translateX(5px);
        }
        .investor-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 3px solid var(--primary);
        }
        .investor-info h5 {
            font-weight: 700;
            color: #0a0e27;
            margin-bottom: 0.25rem;
        }
        .investor-info p {
            color: #64748b;
            font-size: 0.875rem;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="bg-animated"></div>
    <div class="profile-container">
        <div class="profile-header">
            <a href="mes-projets.php" class="back-btn"><i class="bi bi-arrow-left"></i> Retour aux Projets</a>
            <h1 class="page-title">Détails du Projet</h1>
            <p class="page-subtitle">Vue complète de votre projet</p>
        </div>
        
        <div class="project-hero">
            <span class="project-badge"><i class="bi bi-phone"></i> Technologie</span>
            <h1 class="project-title-large">Application Mobile E-commerce</h1>
            <p style="font-size: 1.125rem; opacity: 0.9; margin-bottom: 2rem;">Plateforme de commerce électronique mobile innovante pour les PME africaines</p>
            <div class="d-flex gap-3 flex-wrap">
                <button class="btn-action btn-primary-action" style="background: rgba(255, 255, 255, 0.2); border: 2px solid white;">
                    <i class="bi bi-pencil-square"></i> Modifier
                </button>
                <button class="btn-action btn-secondary-action" style="background: rgba(255, 255, 255, 0.2); border: 2px solid white; color: white;">
                    <i class="bi bi-share"></i> Partager
                </button>
                <button class="btn-action btn-secondary-action" style="background: rgba(255, 255, 255, 0.2); border: 2px solid white; color: white;">
                    <i class="bi bi-download"></i> Télécharger
                </button>
            </div>
        </div>
        
        <div class="info-grid">
            <div class="info-card">
                <div class="info-icon"><i class="bi bi-people"></i></div>
                <div class="info-title">Investisseurs Intéressés</div>
                <div class="info-value">12</div>
            </div>
            <div class="info-card">
                <div class="info-icon"><i class="bi bi-cash-stack"></i></div>
                <div class="info-title">Financement Recherché</div>
                <div class="info-value">50K €</div>
            </div>
            <div class="info-card">
                <div class="info-icon"><i class="bi bi-graph-up"></i></div>
                <div class="info-title">Complétion</div>
                <div class="info-value">75%</div>
            </div>
            <div class="info-card">
                <div class="info-icon"><i class="bi bi-calendar"></i></div>
                <div class="info-title">Date Limite</div>
                <div class="info-value">15 jours</div>
            </div>
        </div>
        
        <div class="section-card">
            <h3 class="section-title"><i class="bi bi-file-text"></i> Description Complète</h3>
            <p style="color: #64748b; line-height: 1.8; font-size: 1.0625rem;">
                Notre application mobile révolutionne le commerce électronique en Afrique en offrant une plateforme intuitive et accessible aux petites et moyennes entreprises. Avec un système de paiement mobile intégré compatible avec tous les opérateurs locaux, une logistique simplifiée grâce à des partenariats stratégiques, et une interface utilisateur optimisée pour les connexions à faible débit, nous rendons le e-commerce accessible à tous.
            </p>
            <p style="color: #64748b; line-height: 1.8; font-size: 1.0625rem; margin-top: 1rem;">
                Le projet vise à créer un écosystème complet incluant la formation des vendeurs, l'assistance technique, et un système de notation transparent pour garantir la confiance des acheteurs.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="section-card">
                    <h3 class="section-title"><i class="bi bi-bullseye"></i> Objectifs</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid #e2e8f0; display: flex; align-items: center; gap: 1rem;">
                            <i class="bi bi-check-circle-fill" style="color: var(--success); font-size: 1.25rem;"></i>
                            <span style="color: #475569;">Atteindre 10,000 vendeurs actifs</span>
                        </li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid #e2e8f0; display: flex; align-items: center; gap: 1rem;">
                            <i class="bi bi-check-circle-fill" style="color: var(--success); font-size: 1.25rem;"></i>
                            <span style="color: #475569;">Générer 1M€ de transactions mensuelles</span>
                        </li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid #e2e8f0; display: flex; align-items: center; gap: 1rem;">
                            <i class="bi bi-circle" style="color: #cbd5e1; font-size: 1.25rem;"></i>
                            <span style="color: #475569;">Expansion dans 5 pays africains</span>
                        </li>
                        <li style="padding: 0.75rem 0; display: flex; align-items: center; gap: 1rem;">
                            <i class="bi bi-circle" style="color: #cbd5e1; font-size: 1.25rem;"></i>
                            <span style="color: #475569;">Partenariats avec 50+ banques</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="section-card">
                    <h3 class="section-title"><i class="bi bi-clock-history"></i> Chronologie</h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <h5 style="font-weight: 700; color: #0a0e27; margin-bottom: 0.5rem;">Phase 1 - Développement</h5>
                            <p style="color: #64748b; font-size: 0.9375rem; margin: 0;">Janvier - Mars 2024</p>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <h5 style="font-weight: 700; color: #0a0e27; margin-bottom: 0.5rem;">Phase 2 - Tests Beta</h5>
                            <p style="color: #64748b; font-size: 0.9375rem; margin: 0;">Avril - Mai 2024</p>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <h5 style="font-weight: 700; color: #0a0e27; margin-bottom: 0.5rem;">Phase 3 - Lancement</h5>
                            <p style="color: #64748b; font-size: 0.9375rem; margin: 0;">Juin 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="section-card">
            <h3 class="section-title"><i class="bi bi-people-fill"></i> Investisseurs Intéressés</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="investor-card">
                        <img src="https://ui-avatars.com/api/?name=Marie+Kouadio&background=3b82f6&color=fff" alt="Marie Kouadio" class="investor-avatar">
                        <div class="investor-info">
                            <h5>Marie Kouadio</h5>
                            <p>Investisseur Angel • Fintech</p>
                        </div>
                        <button class="btn-action btn-primary-action" style="margin-left: auto;">
                            <i class="bi bi-chat"></i> Contacter
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="investor-card">
                        <img src="https://ui-avatars.com/api/?name=Amadou+Diallo&background=10b981&color=fff" alt="Amadou Diallo" class="investor-avatar">
                        <div class="investor-info">
                            <h5>Amadou Diallo</h5>
                            <p>Venture Capital • Tech</p>
                        </div>
                        <button class="btn-action btn-primary-action" style="margin-left: auto;">
                            <i class="bi bi-chat"></i> Contacter
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
