<?php
/**
 * Mon Profil - CIA Invest Gold V2
 * Profil utilisateur et informations personnelles
 */

$current_page = 'profil';
$page_title = 'Mon Profil';
$custom_styles = '
<style>
    .profile-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 24px;
        padding: 3rem;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
        text-align: center;
    }
    
    .profile-avatar-container {
        position: relative;
        display: inline-block;
        margin-bottom: 2rem;
    }
    
    .profile-avatar {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        border: 5px solid white;
        box-shadow: 0 10px 40px rgba(25, 135, 84, 0.3);
    }
    
    .avatar-edit-btn {
        position: absolute;
        bottom: 5px;
        right: 5px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        color: white;
        border: 3px solid white;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .avatar-edit-btn:hover {
        transform: scale(1.1);
    }
    
    .profile-name {
        font-size: 2rem;
        font-weight: 900;
        color: #1e293b;
        margin-bottom: 0.5rem;
    }
    
    .profile-email {
        color: #64748b;
        font-size: 1.125rem;
        margin-bottom: 1rem;
    }
    
    .profile-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.75rem 1.5rem;
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        color: white;
        border-radius: 20px;
        font-weight: 700;
        font-size: 1.125rem;
    }
    
    .profile-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        margin-top: 2rem;
        padding-top: 2rem;
        border-top: 2px solid rgba(0, 0, 0, 0.05);
    }
    
    .profile-stat {
        text-align: center;
    }
    
    .stat-value {
        font-size: 2rem;
        font-weight: 900;
        color: var(--primary);
        margin-bottom: 0.5rem;
    }
    
    .stat-label {
        color: #64748b;
        font-size: 0.875rem;
    }
    
    .info-section {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 24px;
        padding: 2rem;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
    }
    
    .section-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    
    .form-group {
        margin-bottom: 1.5rem;
    }
    
    .form-label {
        display: block;
        font-weight: 600;
        color: #475569;
        margin-bottom: 0.5rem;
    }
    
    .form-control {
        width: 100%;
        padding: 0.875rem 1.25rem;
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        font-size: 1rem;
        transition: all 0.3s ease;
        font-family: "Inter", sans-serif;
    }
    
    .form-control:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(25, 135, 84, 0.1);
    }
    
    textarea.form-control {
        min-height: 120px;
        resize: vertical;
    }
    
    .btn-modern {
        padding: 0.875rem 2rem;
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
    <h1 class="page-title">👤 Mon Profil</h1>
    <p class="page-subtitle">Gérez vos informations personnelles</p>
</div>

<!-- Profile Header Card -->
<div class="profile-card">
    <div class="profile-avatar-container">
        <img src="<?php echo $user['avatar']; ?>" alt="<?php echo $user['name']; ?>" class="profile-avatar">
        <button class="avatar-edit-btn">
            <i class="bi bi-camera"></i>
        </button>
    </div>
    
    <h2 class="profile-name"><?php echo $user['name']; ?></h2>
    <p class="profile-email"><?php echo $user['email']; ?></p>
    
    <div class="profile-badge">
        <i class="bi bi-trophy"></i>
        Membre <?php echo $user['plan']; ?>
    </div>
    
    <div class="profile-stats">
        <div class="profile-stat">
            <div class="stat-value"><?php echo $user['projects_count']; ?></div>
            <div class="stat-label">Projets</div>
        </div>
        <div class="profile-stat">
            <div class="stat-value"><?php echo $user['connections_count']; ?></div>
            <div class="stat-label">Connexions</div>
        </div>
        <div class="profile-stat">
            <div class="stat-value"><?php echo $user['profile_completion']; ?>%</div>
            <div class="stat-label">Profil complété</div>
        </div>
    </div>
</div>

<!-- Personal Information -->
<div class="info-section">
    <h3 class="section-title">
        <i class="bi bi-person-circle"></i>
        Informations personnelles
    </h3>
    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Prénom</label>
                <input type="text" class="form-control" value="Jean" placeholder="Votre prénom">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" value="Dupont" placeholder="Votre nom">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" value="jean.dupont@example.com" placeholder="votre@email.com">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Téléphone</label>
                <input type="tel" class="form-control" value="+225 07 12 34 56 78" placeholder="+225 XX XX XX XX XX">
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <label class="form-label">Bio</label>
        <textarea class="form-control" placeholder="Parlez-nous de vous...">Entrepreneur passionné par l'innovation technologique en Afrique. Expert en e-commerce et solutions digitales.</textarea>
    </div>
</div>

<!-- Professional Information -->
<div class="info-section">
    <h3 class="section-title">
        <i class="bi bi-briefcase"></i>
        Informations professionnelles
    </h3>
    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Entreprise</label>
                <input type="text" class="form-control" value="Tech Solutions CI" placeholder="Nom de votre entreprise">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Poste</label>
                <input type="text" class="form-control" value="Fondateur & CEO" placeholder="Votre fonction">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Secteur d'activité</label>
                <select class="form-control">
                    <option>Technologie & Innovation</option>
                    <option>E-commerce</option>
                    <option>Fintech</option>
                    <option>Santé</option>
                    <option>Education</option>
                    <option>Agritech</option>
                    <option>Autre</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Site web</label>
                <input type="url" class="form-control" value="https://techsolutions.ci" placeholder="https://votresite.com">
            </div>
        </div>
    </div>
</div>

<!-- Social Links -->
<div class="info-section">
    <h3 class="section-title">
        <i class="bi bi-share"></i>
        Réseaux sociaux
    </h3>
    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label"><i class="bi bi-linkedin"></i> LinkedIn</label>
                <input type="url" class="form-control" placeholder="https://linkedin.com/in/...">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label"><i class="bi bi-twitter"></i> Twitter</label>
                <input type="url" class="form-control" placeholder="https://twitter.com/...">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label"><i class="bi bi-facebook"></i> Facebook</label>
                <input type="url" class="form-control" placeholder="https://facebook.com/...">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label"><i class="bi bi-instagram"></i> Instagram</label>
                <input type="url" class="form-control" placeholder="https://instagram.com/...">
            </div>
        </div>
    </div>
</div>

<!-- Action Buttons -->
<div class="text-center mb-4">
    <button type="button" class="btn-modern btn-primary">
        <i class="bi bi-check-circle"></i>
        Enregistrer les modifications
    </button>
    <button type="button" class="btn-modern btn-outline">
        <i class="bi bi-x-circle"></i>
        Annuler
    </button>
</div>

<?php include 'includes/footer.php'; ?>
