<?php
/**
 * Sidebar Component - CIA Invest Gold Dashboard
 * Composant réutilisable pour la barre latérale
 * 
 * @package CIA_Invest
 * @version 2.0
 */

// S'assurer que config.php est inclus
if (!isset($menu_items)) {
    require_once __DIR__ . '/config.php';
}
?>

<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-brand">
        <h2>CIA Invest</h2>
        <p>Dashboard Gold</p>
    </div>
    
    <div class="sidebar-menu">
        <?php foreach ($menu_items as $section_key => $section): ?>
        <div class="menu-section">
            <div class="menu-label"><?php echo $section['label']; ?></div>
            <?php foreach ($section['items'] as $item): ?>
            <a href="<?php echo $item['url']; ?>" 
               class="menu-item <?php echo $item['color']; ?> <?php echo ($current_page === $item['page']) ? 'active' : ''; ?>">
                <i class="bi <?php echo $item['icon']; ?>"></i>
                <span><?php echo $item['name']; ?></span>
            </a>
            <?php endforeach; ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>
