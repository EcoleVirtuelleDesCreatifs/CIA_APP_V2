<?php
$current_page = 'rdv';
$page_title = 'Rendez-vous avec la CIA';
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
            <a href="dashboard-gold-v2.php" class="back-btn"><i class="bi bi-arrow-left"></i> Retour au Dashboard</a>
            <h1 class="page-title">📅 Rendez-vous avec la CIA</h1>
            <p class="page-subtitle">Service exclusif Gold - Planifiez un entretien avec nos experts</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-8">
                <div class="form-section">
                    <div class="section-header">
                        <div class="section-icon"><i class="bi bi-calendar-plus"></i></div>
                        <div>
                            <h2 class="section-title">Demander un Rendez-vous</h2>
                            <p class="section-description">Nos experts vous accompagnent dans votre projet</p>
                        </div>
                    </div>
                    
                    <form>
                        <div class="form-group">
                            <label class="form-label">Type de Rendez-vous<span class="required">*</span></label>
                            <select class="form-control-modern" required>
                                <option value="">Sélectionnez un type</option>
                                <option value="conseil">Conseil Stratégique</option>
                                <option value="pitch">Préparation Pitch</option>
                                <option value="financement">Stratégie de Financement</option>
                                <option value="legal">Aspects Juridiques</option>
                                <option value="marketing">Marketing & Communication</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Date Souhaitée<span class="required">*</span></label>
                                    <input type="date" class="form-control-modern" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Heure Souhaitée<span class="required">*</span></label>
                                    <select class="form-control-modern" required>
                                        <option value="">Choisir un créneau</option>
                                        <option value="09:00">09:00 - 10:00</option>
                                        <option value="10:00">10:00 - 11:00</option>
                                        <option value="11:00">11:00 - 12:00</option>
                                        <option value="14:00">14:00 - 15:00</option>
                                        <option value="15:00">15:00 - 16:00</option>
                                        <option value="16:00">16:00 - 17:00</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Mode de Rendez-vous<span class="required">*</span></label>
                            <div class="d-flex gap-3">
                                <label style="flex: 1; padding: 1.5rem; border: 2px solid #e2e8f0; border-radius: 16px; cursor: pointer; transition: all 0.3s;">
                                    <input type="radio" name="mode" value="visio" style="margin-right: 0.75rem;">
                                    <i class="bi bi-camera-video" style="font-size: 1.5rem; color: var(--primary);"></i>
                                    <strong style="display: block; margin-top: 0.5rem;">Visioconférence</strong>
                                </label>
                                <label style="flex: 1; padding: 1.5rem; border: 2px solid #e2e8f0; border-radius: 16px; cursor: pointer; transition: all 0.3s;">
                                    <input type="radio" name="mode" value="presentiel" style="margin-right: 0.75rem;">
                                    <i class="bi bi-building" style="font-size: 1.5rem; color: var(--info);"></i>
                                    <strong style="display: block; margin-top: 0.5rem;">Présentiel</strong>
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Sujet du Rendez-vous<span class="required">*</span></label>
                            <input type="text" class="form-control-modern" placeholder="Ex: Validation du business model" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Description / Questions</label>
                            <textarea class="form-control-modern" rows="5" placeholder="Décrivez ce que vous souhaitez aborder lors du rendez-vous..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn-save"><i class="bi bi-check-circle"></i> Envoyer la Demande</button>
                    </form>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-section">
                    <h3 style="font-weight: 800; margin-bottom: 1.5rem;"><i class="bi bi-info-circle"></i> Informations</h3>
                    <div style="padding: 1rem; background: rgba(25, 135, 84, 0.1); border-radius: 12px; margin-bottom: 1rem;">
                        <h5 style="font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">✅ Service Exclusif Gold</h5>
                        <p style="color: #64748b; font-size: 0.875rem; margin: 0;">Accès illimité aux experts CIA</p>
                    </div>
                    
                    <div style="padding: 1rem; background: rgba(59, 130, 246, 0.1); border-radius: 12px; margin-bottom: 1rem;">
                        <h5 style="font-weight: 700; color: var(--info); margin-bottom: 0.5rem;">⏱️ Durée</h5>
                        <p style="color: #64748b; font-size: 0.875rem; margin: 0;">Séances de 60 minutes</p>
                    </div>
                    
                    <div style="padding: 1rem; background: rgba(139, 92, 246, 0.1); border-radius: 12px;">
                        <h5 style="font-weight: 700; color: var(--purple); margin-bottom: 0.5rem;">📞 Réponse</h5>
                        <p style="color: #64748b; font-size: 0.875rem; margin: 0;">Sous 24h ouvrées</p>
                    </div>
                </div>
                
                <div class="form-section">
                    <h3 style="font-weight: 800; margin-bottom: 1.5rem;"><i class="bi bi-clock-history"></i> Mes Rendez-vous</h3>
                    <div style="padding: 1rem; border: 2px solid #e2e8f0; border-radius: 12px; margin-bottom: 1rem;">
                        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 0.5rem;">
                            <strong style="color: #0a0e27;">Conseil Stratégique</strong>
                            <span style="padding: 0.25rem 0.75rem; background: rgba(245, 158, 11, 0.1); color: var(--warning); border-radius: 50px; font-size: 0.75rem; font-weight: 700;">En attente</span>
                        </div>
                        <p style="color: #64748b; font-size: 0.875rem; margin: 0;"><i class="bi bi-calendar"></i> 15 Nov 2024 - 14:00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
