<?php
/**
 * Configuration Gold Dashboard - CIA Invest
 * Fichier de configuration centralisé
 * 
 * @package CIA_Invest
 * @version 2.0
 */

// Configuration de l'utilisateur (à remplacer par une session en production)
$user = [
    'name' => 'Jean Dupont',
    'email' => 'jean.dupont@example.com',
    'plan' => 'Gold',
    'avatar' => 'https://ui-avatars.com/api/?name=Jean+Dupont&background=198754&color=fff&size=200',
    'member_since' => 'Janvier 2024',
    'projects_count' => 2,
    'connections_count' => 24,
    'profile_completion' => 95
];

// Menu items configuration
$menu_items = [
    'main' => [
        'label' => 'Menu Principal',
        'items' => [
            [
                'name' => 'Dashboard',
                'icon' => 'bi-grid-fill',
                'url' => 'dashboard.php',
                'color' => 'green',
                'page' => 'dashboard'
            ],
            [
                'name' => 'Mes Projets',
                'icon' => 'bi-folder-fill',
                'url' => 'mes-projets.php',
                'color' => 'blue',
                'page' => 'projets'
            ],
            [
                'name' => 'Investisseurs',
                'icon' => 'bi-people-fill',
                'url' => 'investisseurs.php',
                'color' => 'purple',
                'page' => 'investisseurs'
            ],
            [
                'name' => 'Événements',
                'icon' => 'bi-calendar-check-fill',
                'url' => 'evenements.php',
                'color' => 'orange',
                'page' => 'evenements'
            ],
            [
                'name' => 'Messages',
                'icon' => 'bi-chat-dots-fill',
                'url' => 'messages.php',
                'color' => 'pink',
                'page' => 'messages'
            ]
        ]
    ],
    'resources' => [
        'label' => 'Ressources',
        'items' => [
            [
                'name' => 'Formations',
                'icon' => 'bi-book-fill',
                'url' => 'formations.php',
                'color' => 'green',
                'page' => 'formations'
            ],
            [
                'name' => 'Rendez-vous',
                'icon' => 'bi-camera-video-fill',
                'url' => 'rendez-vous.php',
                'color' => 'blue',
                'page' => 'rendez-vous'
            ],
            [
                'name' => 'Statistiques',
                'icon' => 'bi-graph-up-arrow',
                'url' => 'statistiques.php',
                'color' => 'purple',
                'page' => 'statistiques'
            ]
        ]
    ],
    'account' => [
        'label' => 'Compte',
        'items' => [
            [
                'name' => 'Mon Profil',
                'icon' => 'bi-person-fill',
                'url' => 'profil.php',
                'color' => 'orange',
                'page' => 'profil'
            ],
            [
                'name' => 'Paramètres',
                'icon' => 'bi-gear-fill',
                'url' => 'parametres.php',
                'color' => 'pink',
                'page' => 'parametres'
            ],
            [
                'name' => 'Retour au site',
                'icon' => 'bi-arrow-left-circle-fill',
                'url' => '../index.php',
                'color' => 'green',
                'page' => ''
            ]
        ]
    ]
];

// Définir la page actuelle si non définie
if (!isset($current_page)) {
    $current_page = 'dashboard';
}

// Définir le titre de la page si non défini
if (!isset($page_title)) {
    $page_title = 'Dashboard Gold';
}
?>
