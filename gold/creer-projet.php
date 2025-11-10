<?php
$current_page = 'projets';
$page_title = 'Créer un Projet';
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
    <style>
        .step-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 3rem;
            position: relative;
        }
        .step-indicator::before {
            content: '';
            position: absolute;
            top: 25px;
            left: 0;
            right: 0;
            height: 3px;
            background: #e2e8f0;
            z-index: 0;
        }
        .step {
            flex: 1;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        .step-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: white;
            border: 3px solid #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 0.75rem;
            font-weight: 700;
            color: #94a3b8;
            transition: all 0.3s;
        }
        .step.active .step-circle {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            border-color: var(--primary);
            color: white;
            box-shadow: 0 10px 30px rgba(25, 135, 84, 0.3);
        }
        .step.completed .step-circle {
            background: var(--success);
            border-color: var(--success);
            color: white;
        }
        .step-label {
            font-size: 0.875rem;
            font-weight: 600;
            color: #94a3b8;
        }
        .step.active .step-label {
            color: var(--primary);
        }
        .form-step {
            display: none;
        }
        .form-step.active {
            display: block;
        }
        .image-upload-zone {
            border: 3px dashed #e2e8f0;
            border-radius: 20px;
            padding: 3rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            background: rgba(255, 255, 255, 0.5);
        }
        .image-upload-zone:hover {
            border-color: var(--primary);
            background: rgba(25, 135, 84, 0.05);
        }
        .image-upload-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: white;
        }
        .tag-input-container {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            padding: 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 16px;
            min-height: 120px;
            background: white;
        }
        .tag {
            padding: 0.5rem 1rem;
            background: linear-gradient(135deg, rgba(25, 135, 84, 0.1), rgba(32, 201, 151, 0.05));
            color: var(--primary);
            border-radius: 50px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        .tag-remove {
            cursor: pointer;
            font-size: 1.125rem;
        }
    </style>
</head>
<body>
    <div class="bg-animated"></div>
    <div class="profile-container">
        <div class="profile-header">
            <a href="mes-projets.php" class="back-btn"><i class="bi bi-arrow-left"></i> Retour aux Projets</a>
            <h1 class="page-title">Créer un Nouveau Projet</h1>
            <p class="page-subtitle">Présentez votre projet aux investisseurs</p>
        </div>
        
        <div class="form-section">
            <div class="step-indicator">
                <div class="step active">
                    <div class="step-circle">1</div>
                    <div class="step-label">Informations</div>
                </div>
                <div class="step">
                    <div class="step-circle">2</div>
                    <div class="step-label">Description</div>
                </div>
                <div class="step">
                    <div class="step-circle">3</div>
                    <div class="step-label">Financement</div>
                </div>
                <div class="step">
                    <div class="step-circle">4</div>
                    <div class="step-label">Médias</div>
                </div>
            </div>
            
            <form id="projectForm">
                <!-- Step 1: Informations de base -->
                <div class="form-step active" id="step1">
                    <h3 class="section-title"><i class="bi bi-info-circle"></i> Informations de Base</h3>
                    <div class="form-group">
                        <label class="form-label">Nom du Projet<span class="required">*</span></label>
                        <input type="text" class="form-control-modern" placeholder="Ex: Application Mobile E-commerce" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Catégorie<span class="required">*</span></label>
                                <select class="form-control-modern" required>
                                    <option value="">Sélectionnez une catégorie</option>
                                    <option value="tech">Technologie & Innovation</option>
                                    <option value="ecommerce">E-commerce</option>
                                    <option value="fintech">Fintech</option>
                                    <option value="health">Santé</option>
                                    <option value="education">Éducation</option>
                                    <option value="agritech">Agritech</option>
                                    <option value="energy">Énergie</option>
                                    <option value="transport">Transport & Logistique</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Stade du Projet<span class="required">*</span></label>
                                <select class="form-control-modern" required>
                                    <option value="">Sélectionnez un stade</option>
                                    <option value="idea">Idée</option>
                                    <option value="prototype">Prototype</option>
                                    <option value="mvp">MVP</option>
                                    <option value="launched">Lancé</option>
                                    <option value="growth">En croissance</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Résumé du Projet (Pitch Elevator)<span class="required">*</span></label>
                        <textarea class="form-control-modern" rows="3" placeholder="Décrivez votre projet en une phrase percutante..." required></textarea>
                        <small class="form-help">Maximum 200 caractères</small>
                    </div>
                </div>
                
                <!-- Step 2: Description détaillée -->
                <div class="form-step" id="step2">
                    <h3 class="section-title"><i class="bi bi-file-text"></i> Description Détaillée</h3>
                    <div class="form-group">
                        <label class="form-label">Description Complète<span class="required">*</span></label>
                        <textarea class="form-control-modern" rows="8" placeholder="Décrivez votre projet en détail..." required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Problème Résolu</label>
                        <textarea class="form-control-modern" rows="4" placeholder="Quel problème votre projet résout-il ?"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Solution Proposée</label>
                        <textarea class="form-control-modern" rows="4" placeholder="Comment votre projet résout ce problème ?"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Marché Cible</label>
                        <input type="text" class="form-control-modern" placeholder="Ex: PME africaines, Consommateurs urbains...">
                    </div>
                </div>
                
                <!-- Step 3: Financement -->
                <div class="form-step" id="step3">
                    <h3 class="section-title"><i class="bi bi-cash-stack"></i> Financement</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Montant Recherché<span class="required">*</span></label>
                                <input type="number" class="form-control-modern" placeholder="50000" required>
                                <small class="form-help">En Euros (€)</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Type de Financement</label>
                                <select class="form-control-modern">
                                    <option value="equity">Equity (Actions)</option>
                                    <option value="loan">Prêt</option>
                                    <option value="grant">Subvention</option>
                                    <option value="crowdfunding">Crowdfunding</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Utilisation des Fonds</label>
                        <textarea class="form-control-modern" rows="5" placeholder="Comment allez-vous utiliser les fonds ?"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Revenus Actuels (Mensuel)</label>
                                <input type="number" class="form-control-modern" placeholder="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Revenus Projetés (12 mois)</label>
                                <input type="number" class="form-control-modern" placeholder="100000">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Step 4: Médias -->
                <div class="form-step" id="step4">
                    <h3 class="section-title"><i class="bi bi-images"></i> Médias et Documents</h3>
                    <div class="form-group">
                        <label class="form-label">Image de Couverture</label>
                        <div class="image-upload-zone" onclick="document.getElementById('coverImage').click()">
                            <div class="image-upload-icon"><i class="bi bi-image"></i></div>
                            <h5 style="font-weight: 700; color: #0a0e27; margin-bottom: 0.5rem;">Cliquez pour télécharger</h5>
                            <p style="color: #64748b; margin: 0;">PNG, JPG jusqu'à 5MB</p>
                        </div>
                        <input type="file" id="coverImage" style="display: none;" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Pitch Deck (PDF)</label>
                        <div class="image-upload-zone" onclick="document.getElementById('pitchDeck').click()">
                            <div class="image-upload-icon"><i class="bi bi-file-pdf"></i></div>
                            <h5 style="font-weight: 700; color: #0a0e27; margin-bottom: 0.5rem;">Télécharger votre Pitch Deck</h5>
                            <p style="color: #64748b; margin: 0;">PDF jusqu'à 10MB</p>
                        </div>
                        <input type="file" id="pitchDeck" style="display: none;" accept=".pdf">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Vidéo de Présentation (URL)</label>
                        <input type="url" class="form-control-modern" placeholder="https://youtube.com/watch?v=...">
                    </div>
                </div>
                
                <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn-cancel" id="prevBtn" onclick="changeStep(-1)" style="display: none;">
                        <i class="bi bi-arrow-left"></i> Précédent
                    </button>
                    <button type="button" class="btn-save" id="nextBtn" onclick="changeStep(1)">
                        Suivant <i class="bi bi-arrow-right"></i>
                    </button>
                    <button type="submit" class="btn-save" id="submitBtn" style="display: none;">
                        <i class="bi bi-check-circle"></i> Créer le Projet
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let currentStep = 1;
        const totalSteps = 4;
        
        function changeStep(direction) {
            currentStep += direction;
            if (currentStep < 1) currentStep = 1;
            if (currentStep > totalSteps) currentStep = totalSteps;
            
            // Update steps
            document.querySelectorAll('.form-step').forEach(step => step.classList.remove('active'));
            document.getElementById('step' + currentStep).classList.add('active');
            
            // Update indicators
            document.querySelectorAll('.step').forEach((step, index) => {
                step.classList.remove('active', 'completed');
                if (index + 1 < currentStep) step.classList.add('completed');
                if (index + 1 === currentStep) step.classList.add('active');
            });
            
            // Update buttons
            document.getElementById('prevBtn').style.display = currentStep === 1 ? 'none' : 'inline-flex';
            document.getElementById('nextBtn').style.display = currentStep === totalSteps ? 'none' : 'inline-flex';
            document.getElementById('submitBtn').style.display = currentStep === totalSteps ? 'inline-flex' : 'none';
            
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
        
        document.getElementById('projectForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Projet créé avec succès !');
            window.location.href = 'mes-projets.php';
        });
    </script>
</body>
</html>
