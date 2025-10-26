<?php
/**
 * Rendez-vous - CIA Invest Gold V2
 * Gestion des rendez-vous et visioconférences
 */

$current_page = 'rendez-vous';
$page_title = 'Rendez-vous';
$custom_styles = '
<style>
    .appointment-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 24px;
        padding: 2rem;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
        border-left: 4px solid var(--status-color);
    }
    
    .appointment-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    }
    
    .appointment-header {
        display: flex;
        justify-content: space-between;
        align-items: start;
        margin-bottom: 1.5rem;
    }
    
    .appointment-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 0.5rem;
    }
    
    .appointment-status {
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
    }
    
    .status-confirmed {
        background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(5, 150, 105, 0.05));
        color: #10b981;
    }
    
    .status-pending {
        background: linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(217, 119, 6, 0.05));
        color: #f59e0b;
    }
    
    .appointment-info {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin-bottom: 1.5rem;
    }
    
    .info-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem;
        background: linear-gradient(135deg, #f8fafc, #f1f5f9);
        border-radius: 12px;
    }
    
    .info-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.125rem;
    }
    
    .info-content {
        flex: 1;
    }
    
    .info-label {
        font-size: 0.75rem;
        color: #64748b;
        margin-bottom: 0.25rem;
    }
    
    .info-value {
        font-weight: 600;
        color: #1e293b;
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
        background: linear-gradient(135deg, var(--info), #2563eb);
        color: white;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(59, 130, 246, 0.3);
        color: white;
    }
    
    .btn-outline {
        background: transparent;
        border: 2px solid #e2e8f0;
        color: #64748b;
    }
    
    .btn-outline:hover {
        background: #f8fafc;
        border-color: var(--info);
        color: var(--info);
    }
    
    .calendar-widget {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 24px;
        padding: 2rem;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
    }
    
    .calendar-header {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 1rem;
        text-align: center;
    }
    
    .calendar-grid {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 0.5rem;
    }
    
    .calendar-day {
        aspect-ratio: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        font-size: 0.875rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .calendar-day.header {
        color: #64748b;
        cursor: default;
    }
    
    .calendar-day.active {
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        color: white;
    }
    
    .calendar-day.has-event {
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(37, 99, 235, 0.05));
        color: var(--info);
    }
    
    .calendar-day:not(.header):hover {
        background: #f8fafc;
    }
</style>
';

include 'includes/header.php';
?>

<div class="page-header">
    <h1 class="page-title">📹 Rendez-vous</h1>
    <p class="page-subtitle">Gérez vos rendez-vous et visioconférences</p>
</div>

<div class="row">
    <div class="col-lg-8">
        <!-- Appointment 1 -->
        <div class="appointment-card" style="--status-color: #10b981;">
            <div class="appointment-header">
                <div>
                    <h3 class="appointment-title">Pitch avec Marie Kouadio</h3>
                    <span class="appointment-status status-confirmed">
                        <i class="bi bi-check-circle"></i> Confirmé
                    </span>
                </div>
            </div>
            
            <div class="appointment-info">
                <div class="info-item">
                    <div class="info-icon">
                        <i class="bi bi-calendar"></i>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Date</div>
                        <div class="info-value">28 Oct 2025</div>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="bi bi-clock"></i>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Heure</div>
                        <div class="info-value">14:00 - 15:00</div>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="bi bi-camera-video"></i>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Plateforme</div>
                        <div class="info-value">Zoom</div>
                    </div>
                </div>
            </div>
            
            <a href="#" class="btn-modern btn-primary">
                <i class="bi bi-play-circle"></i>
                Rejoindre
            </a>
            <a href="#" class="btn-modern btn-outline">
                <i class="bi bi-pencil"></i>
                Modifier
            </a>
            <a href="#" class="btn-modern btn-outline">
                <i class="bi bi-x-circle"></i>
                Annuler
            </a>
        </div>
        
        <!-- Appointment 2 -->
        <div class="appointment-card" style="--status-color: #f59e0b;">
            <div class="appointment-header">
                <div>
                    <h3 class="appointment-title">Réunion Équipe CIA</h3>
                    <span class="appointment-status status-pending">
                        <i class="bi bi-clock"></i> En attente
                    </span>
                </div>
            </div>
            
            <div class="appointment-info">
                <div class="info-item">
                    <div class="info-icon">
                        <i class="bi bi-calendar"></i>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Date</div>
                        <div class="info-value">02 Nov 2025</div>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="bi bi-clock"></i>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Heure</div>
                        <div class="info-value">10:00 - 11:30</div>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="bi bi-camera-video"></i>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Plateforme</div>
                        <div class="info-value">Google Meet</div>
                    </div>
                </div>
            </div>
            
            <a href="#" class="btn-modern btn-primary">
                <i class="bi bi-check-circle"></i>
                Confirmer
            </a>
            <a href="#" class="btn-modern btn-outline">
                <i class="bi bi-pencil"></i>
                Modifier
            </a>
        </div>
        
        <!-- Appointment 3 -->
        <div class="appointment-card" style="--status-color: #10b981;">
            <div class="appointment-header">
                <div>
                    <h3 class="appointment-title">Session Coaching Business Plan</h3>
                    <span class="appointment-status status-confirmed">
                        <i class="bi bi-check-circle"></i> Confirmé
                    </span>
                </div>
            </div>
            
            <div class="appointment-info">
                <div class="info-item">
                    <div class="info-icon">
                        <i class="bi bi-calendar"></i>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Date</div>
                        <div class="info-value">08 Nov 2025</div>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="bi bi-clock"></i>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Heure</div>
                        <div class="info-value">16:00 - 17:00</div>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="info-content">
                        <div class="info-label">Lieu</div>
                        <div class="info-value">Hub CIA - Abidjan</div>
                    </div>
                </div>
            </div>
            
            <a href="#" class="btn-modern btn-primary">
                <i class="bi bi-geo-alt"></i>
                Voir l'adresse
            </a>
            <a href="#" class="btn-modern btn-outline">
                <i class="bi bi-pencil"></i>
                Modifier
            </a>
        </div>
    </div>
    
    <div class="col-lg-4">
        <!-- Calendar Widget -->
        <div class="calendar-widget">
            <div class="calendar-header">
                <i class="bi bi-calendar3"></i> Octobre 2025
            </div>
            <div class="calendar-grid">
                <div class="calendar-day header">L</div>
                <div class="calendar-day header">M</div>
                <div class="calendar-day header">M</div>
                <div class="calendar-day header">J</div>
                <div class="calendar-day header">V</div>
                <div class="calendar-day header">S</div>
                <div class="calendar-day header">D</div>
                
                <div class="calendar-day"></div>
                <div class="calendar-day"></div>
                <div class="calendar-day">1</div>
                <div class="calendar-day">2</div>
                <div class="calendar-day">3</div>
                <div class="calendar-day">4</div>
                <div class="calendar-day">5</div>
                
                <div class="calendar-day">6</div>
                <div class="calendar-day">7</div>
                <div class="calendar-day">8</div>
                <div class="calendar-day">9</div>
                <div class="calendar-day">10</div>
                <div class="calendar-day">11</div>
                <div class="calendar-day">12</div>
                
                <div class="calendar-day">13</div>
                <div class="calendar-day">14</div>
                <div class="calendar-day">15</div>
                <div class="calendar-day">16</div>
                <div class="calendar-day">17</div>
                <div class="calendar-day">18</div>
                <div class="calendar-day">19</div>
                
                <div class="calendar-day">20</div>
                <div class="calendar-day">21</div>
                <div class="calendar-day">22</div>
                <div class="calendar-day">23</div>
                <div class="calendar-day">24</div>
                <div class="calendar-day">25</div>
                <div class="calendar-day active">26</div>
                
                <div class="calendar-day">27</div>
                <div class="calendar-day has-event">28</div>
                <div class="calendar-day">29</div>
                <div class="calendar-day">30</div>
                <div class="calendar-day">31</div>
            </div>
        </div>
        
        <!-- Quick Actions -->
        <div class="calendar-widget">
            <div class="calendar-header">Actions Rapides</div>
            <a href="#" class="btn-modern btn-primary" style="width: 100%; justify-content: center; margin-bottom: 1rem;">
                <i class="bi bi-plus-circle"></i>
                Nouveau rendez-vous
            </a>
            <a href="#" class="btn-modern btn-outline" style="width: 100%; justify-content: center;">
                <i class="bi bi-calendar-week"></i>
                Voir le calendrier complet
            </a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
