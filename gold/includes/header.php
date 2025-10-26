<?php
/**
 * Header Component - CIA Invest Gold Dashboard
 * En-tête HTML réutilisable pour toutes les pages
 * 
 * @package CIA_Invest
 * @version 2.0
 */

// Inclure la configuration
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?> - CIA Invest</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Chart.js (si nécessaire) -->
    <?php if (isset($need_charts) && $need_charts): ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <?php endif; ?>
    
    <?php 
    // Inclure les styles communs
    include __DIR__ . '/styles.php'; 
    ?>
    
    <?php 
    // Inclure des styles personnalisés si définis
    if (isset($custom_styles)) {
        echo $custom_styles;
    }
    ?>
</head>
<body>
    <div class="bg-animated"></div>
    
    <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">
        <i class="bi bi-list"></i>
    </button>
    
    <?php 
    // Inclure la sidebar
    include __DIR__ . '/sidebar.php'; 
    ?>
    
    <div class="dashboard-container">
