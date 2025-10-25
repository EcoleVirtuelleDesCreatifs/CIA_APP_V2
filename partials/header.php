<!--
/**
 * Header Template - CIA Invest
 * 
 * Template d'en-tête réutilisable pour toutes les pages du site
 * Inclut la navigation, les meta tags, et les liens vers les ressources CSS/JS
 * 
 * Variables requises :
 * @var string $current_page - Identifiant de la page courante pour la navigation active
 * @var string $page_title - Titre de la page (optionnel)
 * 
 * @package CIA_Invest
 * @version 1.0
 */
-->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Titre dynamique de la page -->
    <title><?php echo isset($page_title) ? $page_title . ' - ' : ''; ?>Chambre des Investisseurs Africains</title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="images/favicon.svg">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- 
    ========================================
    Navigation principale
    ========================================
    Menu responsive avec Bootstrap
    - Logo CIA Invest
    - Menu principal avec dropdowns
    - Bouton de connexion
    - Sélecteur de langue (FR/EN)
    -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="CIA Invest" class="brand-logo">
            </a>

            <!-- Bouton hamburger pour mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu de navigation -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Lien Accueil -->
                    <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'index') ? 'active' : ''; ?>" href="index.php">Accueil</a></li>

                    <!-- Lien Réseau des Investisseurs -->
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'reseau-des-investisseurs') ? 'active' : ''; ?>" href="reseau-investisseurs.php">
                            Réseau des Investisseurs
                        </a>
                    </li>

                    <!-- Menu déroulant Espace membre -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo (in_array($current_page, ['devenir-membre', 'devenir-investisseur', 'devenir-partenaire', 'inscription', 'inscription-investisseur'])) ? 'active' : ''; ?>" href="#" id="espaceDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Espace membre
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="espaceDropdown">
                            <li><a class="dropdown-item <?php echo ($current_page == 'devenir-membre') ? 'active' : ''; ?>" href="devenir-membre.php">Porteur de projet</a></li>
                            <li><a class="dropdown-item <?php echo ($current_page == 'devenir-investisseur') ? 'active' : ''; ?>" href="devenir-investisseur.php">Investissez</a></li>
                            <li><a class="dropdown-item <?php echo ($current_page == 'devenir-partenaire') ? 'active' : ''; ?>" href="devenir-partenaire.php">Devenir partenaire</a></li>
                        </ul>
                    </li>

                    <!-- Bouton de connexion -->
                    <li class="nav-item"><a class="btn btn-primary nav-cta <?php echo ($current_page == 'connexion') ? 'active' : ''; ?>" href="connexion.php">Se connecter</a></li>

                    <!-- Sélecteur de langue (FR/EN) -->
                    <li class="nav-item dropdown language-selector">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-globe"></i> <span class="language-text">FR</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end language-menu" aria-labelledby="languageDropdown">
                            <li><a class="dropdown-item active" href="#" data-lang="fr"><span class="flag-icon">🇫🇷</span> Français</a></li>
                            <li><a class="dropdown-item" href="#" data-lang="en"><span class="flag-icon">🇬🇧</span> English</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>