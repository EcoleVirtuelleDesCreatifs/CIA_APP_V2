<?php
/**
 * Statistiques - CIA Invest Gold V2
 * Tableaux de bord et analytics
 */

$current_page = 'statistiques';
$page_title = 'Statistiques';
$need_charts = true; // Active Chart.js
$custom_styles = '
<style>
    .stat-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 24px;
        padding: 2rem;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
        border-top: 4px solid var(--card-color);
    }
    
    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    }
    
    .stat-card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }
    
    .stat-card-title {
        font-size: 1.125rem;
        font-weight: 700;
        color: #1e293b;
    }
    
    .stat-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--card-color), var(--card-color-dark));
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }
    
    .stat-value {
        font-size: 2.5rem;
        font-weight: 900;
        color: var(--card-color);
        margin-bottom: 0.5rem;
    }
    
    .stat-label {
        color: #64748b;
        font-size: 0.875rem;
    }
    
    .stat-trend {
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
        margin-top: 0.5rem;
    }
    
    .trend-up {
        background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(5, 150, 105, 0.05));
        color: #10b981;
    }
    
    .trend-down {
        background: linear-gradient(135deg, rgba(239, 68, 68, 0.1), rgba(220, 38, 38, 0.05));
        color: #ef4444;
    }
    
    .chart-container {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 24px;
        padding: 2rem;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        margin-bottom: 1.5rem;
    }
    
    .chart-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 1.5rem;
    }
</style>
';

include 'includes/header.php';
?>

<div class="page-header">
    <h1 class="page-title">📊 Statistiques</h1>
    <p class="page-subtitle">Analysez vos performances et votre croissance</p>
</div>

<!-- KPI Cards -->
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="stat-card" style="--card-color: #3b82f6; --card-color-dark: #2563eb;">
            <div class="stat-card-header">
                <div>
                    <div class="stat-value">2</div>
                    <div class="stat-label">Projets actifs</div>
                    <div class="stat-trend trend-up">
                        <i class="bi bi-arrow-up"></i> +1
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="bi bi-folder"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6">
        <div class="stat-card" style="--card-color: #8b5cf6; --card-color-dark: #7c3aed;">
            <div class="stat-card-header">
                <div>
                    <div class="stat-value">20</div>
                    <div class="stat-label">Investisseurs intéressés</div>
                    <div class="stat-trend trend-up">
                        <i class="bi bi-arrow-up"></i> +5
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="bi bi-people"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6">
        <div class="stat-card" style="--card-color: #10b981; --card-color-dark: #059669;">
            <div class="stat-card-header">
                <div>
                    <div class="stat-value">€80K</div>
                    <div class="stat-label">Financement recherché</div>
                    <div class="stat-trend trend-up">
                        <i class="bi bi-arrow-up"></i> +€20K
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="bi bi-cash-coin"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6">
        <div class="stat-card" style="--card-color: #f59e0b; --card-color-dark: #d97706;">
            <div class="stat-card-header">
                <div>
                    <div class="stat-value">156</div>
                    <div class="stat-label">Vues de profil</div>
                    <div class="stat-trend trend-up">
                        <i class="bi bi-arrow-up"></i> +23%
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="bi bi-eye"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Charts -->
<div class="row">
    <div class="col-lg-8">
        <div class="chart-container">
            <h3 class="chart-title">📈 Évolution des vues du profil</h3>
            <canvas id="viewsChart"></canvas>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="chart-container">
            <h3 class="chart-title">🎯 Complétion du profil</h3>
            <canvas id="completionChart"></canvas>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="chart-container">
            <h3 class="chart-title">💰 Financement par secteur</h3>
            <canvas id="sectorChart"></canvas>
        </div>
    </div>
    
    <div class="col-lg-6">
        <div class="chart-container">
            <h3 class="chart-title">👥 Engagement des investisseurs</h3>
            <canvas id="engagementChart"></canvas>
        </div>
    </div>
</div>

<?php 
$custom_scripts = "
<script>
// Configuration des couleurs
const colors = {
    primary: '#198754',
    primaryLight: '#20c997',
    blue: '#3b82f6',
    purple: '#8b5cf6',
    orange: '#f59e0b',
    pink: '#ec4899',
    success: '#10b981'
};

// Chart 1 : Evolution des vues
const viewsCtx = document.getElementById('viewsChart').getContext('2d');
new Chart(viewsCtx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct'],
        datasets: [{
            label: 'Vues du profil',
            data: [45, 52, 68, 71, 89, 95, 112, 128, 141, 156],
            borderColor: colors.blue,
            backgroundColor: colors.blue + '20',
            tension: 0.4,
            fill: true
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Chart 2 : Completion du profil
const completionCtx = document.getElementById('completionChart').getContext('2d');
new Chart(completionCtx, {
    type: 'doughnut',
    data: {
        labels: ['Complété', 'Restant'],
        datasets: [{
            data: [95, 5],
            backgroundColor: [colors.success, '#e2e8f0'],
            borderWidth: 0
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
            legend: {
                position: 'bottom'
            }
        }
    }
});

// Chart 3 : Financement par secteur
const sectorCtx = document.getElementById('sectorChart').getContext('2d');
new Chart(sectorCtx, {
    type: 'bar',
    data: {
        labels: ['Tech', 'Commerce', 'Santé', 'Education', 'Agritech'],
        datasets: [{
            label: 'Financement (€K)',
            data: [50, 30, 20, 15, 10],
            backgroundColor: [colors.blue, colors.success, colors.purple, colors.orange, colors.pink]
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Chart 4 : Engagement investisseurs
const engagementCtx = document.getElementById('engagementChart').getContext('2d');
new Chart(engagementCtx, {
    type: 'polarArea',
    data: {
        labels: ['Vues', 'Messages', 'Favoris', 'Partages'],
        datasets: [{
            data: [156, 42, 28, 15],
            backgroundColor: [
                colors.blue + '80',
                colors.purple + '80',
                colors.success + '80',
                colors.orange + '80'
            ]
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
            legend: {
                position: 'bottom'
            }
        }
    }
});
</script>
";

include 'includes/footer.php';
?>
