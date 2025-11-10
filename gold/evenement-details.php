<?php
$current_page = 'evenements';
$page_title = 'Détails de l\'Événement';
$event_id = $_GET['id'] ?? 1;
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
        .event-hero {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            border-radius: 24px;
            padding: 3rem;
            color: white;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }
        .event-hero::before {
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
        .event-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .event-title-large {
            font-size: 2.5rem;
            font-weight: 900;
            margin-bottom: 1rem;
        }
        .event-date-large {
            font-size: 1.25rem;
            opacity: 0.9;
            display: flex;
            align-items: center;
            gap: 0.75rem;
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
            font-size: 1.5rem;
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
        .speaker-card {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            padding: 1.5rem;
            background: white;
            border-radius: 16px;
            margin-bottom: 1rem;
            border: 2px solid #e2e8f0;
        }
        .speaker-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 3px solid var(--primary);
        }
        .speaker-info h5 {
            font-weight: 700;
            color: #0a0e27;
            margin-bottom: 0.25rem;
        }
        .speaker-info p {
            color: #64748b;
            font-size: 0.875rem;
            margin: 0;
        }
        .agenda-item {
            display: flex;
            gap: 1.5rem;
            padding: 1.5rem;
            border-left: 3px solid var(--primary);
            background: rgba(25, 135, 84, 0.05);
            border-radius: 0 12px 12px 0;
            margin-bottom: 1rem;
        }
        .agenda-time {
            font-weight: 700;
            color: var(--primary);
            min-width: 100px;
        }
        .agenda-content h5 {
            font-weight: 700;
            color: #0a0e27;
            margin-bottom: 0.5rem;
        }
        .agenda-content p {
            color: #64748b;
            margin: 0;
        }
        .registration-box {
            position: sticky;
            top: 2rem;
            background: linear-gradient(135deg, rgba(25, 135, 84, 0.1), rgba(32, 201, 151, 0.05));
            border: 2px solid rgba(25, 135, 84, 0.3);
            border-radius: 24px;
            padding: 2rem;
        }
        .price-tag {
            font-size: 2.5rem;
            font-weight: 900;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }
        .registration-list {
            list-style: none;
            padding: 0;
            margin: 1.5rem 0;
        }
        .registration-list li {
            padding: 0.75rem 0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: #475569;
        }
        .registration-list li i {
            color: var(--success);
            font-size: 1.25rem;
        }
    </style>
</head>
<body>
    <div class="bg-animated"></div>
    <div class="profile-container">
        <div class="profile-header">
            <a href="evenements.php" class="back-btn"><i class="bi bi-arrow-left"></i> Retour aux Événements</a>
            <h1 class="page-title">Détails de l'Événement</h1>
            <p class="page-subtitle">Toutes les informations sur cet événement</p>
        </div>
        
        <div class="event-hero">
            <span class="event-badge"><i class="bi bi-camera-video"></i> Webinaire</span>
            <h1 class="event-title-large">Séminaire de Formation sur le Pitch</h1>
            <div class="event-date-large">
                <i class="bi bi-calendar-event"></i>
                <span>28 Octobre 2025 • 14h00 - 16h00</span>
            </div>
        </div>
        
        <div class="info-grid">
            <div class="info-card">
                <div class="info-icon"><i class="bi bi-people"></i></div>
                <div class="info-title">Participants</div>
                <div class="info-value">45 inscrits</div>
            </div>
            <div class="info-card">
                <div class="info-icon"><i class="bi bi-geo-alt"></i></div>
                <div class="info-title">Lieu</div>
                <div class="info-value">En ligne</div>
            </div>
            <div class="info-card">
                <div class="info-icon"><i class="bi bi-clock"></i></div>
                <div class="info-title">Durée</div>
                <div class="info-value">2 heures</div>
            </div>
            <div class="info-card">
                <div class="info-icon"><i class="bi bi-tag"></i></div>
                <div class="info-title">Tarif</div>
                <div class="info-value">Gratuit</div>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-8">
                <div class="section-card">
                    <h3 class="section-title"><i class="bi bi-file-text"></i> Description</h3>
                    <p style="color: #64748b; line-height: 1.8; font-size: 1.0625rem;">
                        Apprenez à créer un pitch percutant qui capte l'attention des investisseurs dès les premières secondes. Ce séminaire interactif vous donnera toutes les clés pour structurer votre présentation, mettre en valeur votre proposition de valeur et répondre efficacement aux questions des investisseurs.
                    </p>
                    <p style="color: #64748b; line-height: 1.8; font-size: 1.0625rem; margin-top: 1rem;">
                        Vous découvrirez les erreurs courantes à éviter, les techniques de storytelling qui fonctionnent, et comment adapter votre pitch selon votre audience. Des exercices pratiques et des retours personnalisés vous permettront de perfectionner votre présentation.
                    </p>
                </div>
                
                <div class="section-card">
                    <h3 class="section-title"><i class="bi bi-list-check"></i> Programme</h3>
                    <div class="agenda-item">
                        <div class="agenda-time">14:00</div>
                        <div class="agenda-content">
                            <h5>Introduction et Bienvenue</h5>
                            <p>Présentation des objectifs et tour de table</p>
                        </div>
                    </div>
                    <div class="agenda-item">
                        <div class="agenda-time">14:15</div>
                        <div class="agenda-content">
                            <h5>Les Fondamentaux du Pitch</h5>
                            <p>Structure, timing et éléments clés d'un pitch réussi</p>
                        </div>
                    </div>
                    <div class="agenda-item">
                        <div class="agenda-time">15:00</div>
                        <div class="agenda-content">
                            <h5>Atelier Pratique</h5>
                            <p>Exercices en groupe et retours personnalisés</p>
                        </div>
                    </div>
                    <div class="agenda-item">
                        <div class="agenda-time">15:45</div>
                        <div class="agenda-content">
                            <h5>Questions & Réponses</h5>
                            <p>Session interactive avec les participants</p>
                        </div>
                    </div>
                </div>
                
                <div class="section-card">
                    <h3 class="section-title"><i class="bi bi-person-badge"></i> Intervenants</h3>
                    <div class="speaker-card">
                        <img src="https://ui-avatars.com/api/?name=Sophie+Martin&background=3b82f6&color=fff" class="speaker-avatar">
                        <div class="speaker-info">
                            <h5>Sophie Martin</h5>
                            <p>Experte en Levée de Fonds • 15 ans d'expérience</p>
                            <p style="margin-top: 0.5rem;">Ancienne directrice chez Venture Capital Partners, Sophie a accompagné plus de 100 startups dans leur levée de fonds.</p>
                        </div>
                    </div>
                    <div class="speaker-card">
                        <img src="https://ui-avatars.com/api/?name=Thomas+Kouassi&background=10b981&color=fff" class="speaker-avatar">
                        <div class="speaker-info">
                            <h5>Thomas Kouassi</h5>
                            <p>Coach en Communication • Entrepreneur</p>
                            <p style="margin-top: 0.5rem;">Fondateur de 3 startups à succès, Thomas partage ses techniques de pitch qui ont convaincu des investisseurs internationaux.</p>
                        </div>
                    </div>
                </div>
                
                <div class="section-card">
                    <h3 class="section-title"><i class="bi bi-lightbulb"></i> Ce que vous apprendrez</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid #e2e8f0; display: flex; align-items: center; gap: 1rem;">
                            <i class="bi bi-check-circle-fill" style="color: var(--success); font-size: 1.25rem;"></i>
                            <span style="color: #475569;">Structurer un pitch de 3, 5 et 10 minutes</span>
                        </li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid #e2e8f0; display: flex; align-items: center; gap: 1rem;">
                            <i class="bi bi-check-circle-fill" style="color: var(--success); font-size: 1.25rem;"></i>
                            <span style="color: #475569;">Captiver votre audience dès les premières secondes</span>
                        </li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid #e2e8f0; display: flex; align-items: center; gap: 1rem;">
                            <i class="bi bi-check-circle-fill" style="color: var(--success); font-size: 1.25rem;"></i>
                            <span style="color: #475569;">Gérer les questions difficiles des investisseurs</span>
                        </li>
                        <li style="padding: 0.75rem 0; display: flex; align-items: center; gap: 1rem;">
                            <i class="bi bi-check-circle-fill" style="color: var(--success); font-size: 1.25rem;"></i>
                            <span style="color: #475569;">Utiliser le storytelling pour convaincre</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="registration-box">
                    <h3 style="font-weight: 800; margin-bottom: 1rem;">Inscription</h3>
                    <div class="price-tag">Gratuit</div>
                    <p style="color: #64748b; margin-bottom: 1.5rem;">Accès exclusif membres Gold</p>
                    
                    <ul class="registration-list">
                        <li><i class="bi bi-check-circle-fill"></i> Accès au webinaire</li>
                        <li><i class="bi bi-check-circle-fill"></i> Support de présentation</li>
                        <li><i class="bi bi-check-circle-fill"></i> Certificat de participation</li>
                        <li><i class="bi bi-check-circle-fill"></i> Replay disponible 30 jours</li>
                    </ul>
                    
                    <button class="btn-action btn-primary-action w-100 mb-3">
                        <i class="bi bi-calendar-check"></i> S'inscrire Maintenant
                    </button>
                    
                    <button class="btn-action btn-secondary-action w-100">
                        <i class="bi bi-calendar-plus"></i> Ajouter au Calendrier
                    </button>
                    
                    <div style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 2px solid rgba(0, 0, 0, 0.05);">
                        <p style="font-size: 0.875rem; color: #64748b; margin: 0;">
                            <i class="bi bi-info-circle"></i> Places limitées à 50 participants
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
