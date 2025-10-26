<?php
/**
 * Formations - CIA Invest Gold V2
 * Catalogue de formations et ressources éducatives
 */

$current_page = 'formations';
$page_title = 'Formations';
$custom_styles = '
<style>
    .course-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .course-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    }
    
    .course-image {
        height: 200px;
        background: linear-gradient(135deg, var(--course-color-1), var(--course-color-2));
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 4rem;
    }
    
    .course-body {
        padding: 2rem;
    }
    
    .course-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 0.5rem;
    }
    
    .course-level {
        display: inline-block;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }
    
    .course-level.beginner {
        background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(5, 150, 105, 0.05));
        color: #10b981;
    }
    
    .course-level.intermediate {
        background: linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(217, 119, 6, 0.05));
        color: #f59e0b;
    }
    
    .course-description {
        color: #64748b;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }
    
    .course-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        margin-bottom: 1.5rem;
        padding: 1rem;
        background: linear-gradient(135deg, #f8fafc, #f1f5f9);
        border-radius: 12px;
    }
    
    .meta-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #64748b;
        font-size: 0.875rem;
    }
    
    .meta-item i {
        color: var(--primary);
    }
    
    .progress-label {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.5rem;
        font-size: 0.875rem;
        color: #64748b;
    }
    
    .progress-bar-container {
        height: 8px;
        background: #e2e8f0;
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 1.5rem;
    }
    
    .progress-bar-fill {
        height: 100%;
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        transition: width 0.3s ease;
    }
    
    .btn-modern {
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        margin-right: 1rem;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        color: white;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(25, 135, 84, 0.3);
        color: white;
    }
    
    .btn-outline {
        background: transparent;
        border: 2px solid #e2e8f0;
        color: #64748b;
    }
    
    .btn-outline:hover {
        background: #f8fafc;
        border-color: var(--primary);
        color: var(--primary);
    }
</style>
';

include 'includes/header.php';
?>

<div class="page-header">
    <h1 class="page-title">📚 Formations</h1>
    <p class="page-subtitle">Développez vos compétences entrepreneuriales</p>
</div>

<div class="row">
    <!-- Course 1 -->
    <div class="col-lg-6">
        <div class="course-card" style="--course-color-1: #3b82f6; --course-color-2: #2563eb;">
            <div class="course-image">
                <i class="bi bi-lightbulb"></i>
            </div>
            <div class="course-body">
                <h3 class="course-title">Fondamentaux de l'Entrepreneuriat</h3>
                <span class="course-level beginner">
                    <i class="bi bi-star"></i> Débutant
                </span>
                
                <p class="course-description">
                    Apprenez les bases essentielles pour lancer votre entreprise : idéation, validation de marché, 
                    business model et premières étapes de création.
                </p>
                
                <div class="course-meta">
                    <div class="meta-item">
                        <i class="bi bi-clock"></i>
                        <span>12 heures</span>
                    </div>
                    <div class="meta-item">
                        <i class="bi bi-collection-play"></i>
                        <span>24 leçons</span>
                    </div>
                    <div class="meta-item">
                        <i class="bi bi-people"></i>
                        <span>345 étudiants</span>
                    </div>
                </div>
                
                <div class="progress-label">
                    <span>Progression</span>
                    <span>65%</span>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-bar-fill" style="width: 65%;"></div>
                </div>
                
                <a href="#" class="btn-modern btn-primary">
                    <i class="bi bi-play-circle"></i>
                    Continuer
                </a>
                <a href="#" class="btn-modern btn-outline">
                    <i class="bi bi-info-circle"></i>
                    Détails
                </a>
            </div>
        </div>
    </div>
    
    <!-- Course 2 -->
    <div class="col-lg-6">
        <div class="course-card" style="--course-color-1: #8b5cf6; --course-color-2: #7c3aed;">
            <div class="course-image">
                <i class="bi bi-graph-up-arrow"></i>
            </div>
            <div class="course-body">
                <h3 class="course-title">Pitch Deck & Levée de Fonds</h3>
                <span class="course-level intermediate">
                    <i class="bi bi-star-fill"></i> Intermédiaire
                </span>
                
                <p class="course-description">
                    Maîtrisez l'art du pitch et apprenez à créer un deck convaincant pour séduire les investisseurs 
                    et lever des fonds efficacement.
                </p>
                
                <div class="course-meta">
                    <div class="meta-item">
                        <i class="bi bi-clock"></i>
                        <span>8 heures</span>
                    </div>
                    <div class="meta-item">
                        <i class="bi bi-collection-play"></i>
                        <span>16 leçons</span>
                    </div>
                    <div class="meta-item">
                        <i class="bi bi-people"></i>
                        <span>228 étudiants</span>
                    </div>
                </div>
                
                <div class="progress-label">
                    <span>Progression</span>
                    <span>30%</span>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-bar-fill" style="width: 30%;"></div>
                </div>
                
                <a href="#" class="btn-modern btn-primary">
                    <i class="bi bi-play-circle"></i>
                    Continuer
                </a>
                <a href="#" class="btn-modern btn-outline">
                    <i class="bi bi-info-circle"></i>
                    Détails
                </a>
            </div>
        </div>
    </div>
    
    <!-- Course 3 -->
    <div class="col-lg-6">
        <div class="course-card" style="--course-color-1: #10b981; --course-color-2: #059669;">
            <div class="course-image">
                <i class="bi bi-trophy"></i>
            </div>
            <div class="course-body">
                <h3 class="course-title">Marketing Digital pour Startups</h3>
                <span class="course-level intermediate">
                    <i class="bi bi-star-fill"></i> Intermédiaire
                </span>
                
                <p class="course-description">
                    Développez votre présence en ligne et apprenez les stratégies marketing digitales 
                    efficaces pour faire croître votre startup.
                </p>
                
                <div class="course-meta">
                    <div class="meta-item">
                        <i class="bi bi-clock"></i>
                        <span>15 heures</span>
                    </div>
                    <div class="meta-item">
                        <i class="bi bi-collection-play"></i>
                        <span>30 leçons</span>
                    </div>
                    <div class="meta-item">
                        <i class="bi bi-people"></i>
                        <span>412 étudiants</span>
                    </div>
                </div>
                
                <div class="progress-label">
                    <span>Non démarré</span>
                    <span>0%</span>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-bar-fill" style="width: 0%;"></div>
                </div>
                
                <a href="#" class="btn-modern btn-primary">
                    <i class="bi bi-play-circle"></i>
                    Commencer
                </a>
                <a href="#" class="btn-modern btn-outline">
                    <i class="bi bi-info-circle"></i>
                    Détails
                </a>
            </div>
        </div>
    </div>
    
    <!-- Course 4 -->
    <div class="col-lg-6">
        <div class="course-card" style="--course-color-1: #f59e0b; --course-color-2: #d97706;">
            <div class="course-image">
                <i class="bi bi-calculator"></i>
            </div>
            <div class="course-body">
                <h3 class="course-title">Finance & Gestion pour Entrepreneurs</h3>
                <span class="course-level intermediate">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> Avancé
                </span>
                
                <p class="course-description">
                    Maîtrisez la gestion financière de votre entreprise : comptabilité, prévisions financières, 
                    tableaux de bord et indicateurs clés.
                </p>
                
                <div class="course-meta">
                    <div class="meta-item">
                        <i class="bi bi-clock"></i>
                        <span>20 heures</span>
                    </div>
                    <div class="meta-item">
                        <i class="bi bi-collection-play"></i>
                        <span>40 leçons</span>
                    </div>
                    <div class="meta-item">
                        <i class="bi bi-people"></i>
                        <span>189 étudiants</span>
                    </div>
                </div>
                
                <div class="progress-label">
                    <span>Non démarré</span>
                    <span>0%</span>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-bar-fill" style="width: 0%;"></div>
                </div>
                
                <a href="#" class="btn-modern btn-primary">
                    <i class="bi bi-play-circle"></i>
                    Commencer
                </a>
                <a href="#" class="btn-modern btn-outline">
                    <i class="bi bi-info-circle"></i>
                    Détails
                </a>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
