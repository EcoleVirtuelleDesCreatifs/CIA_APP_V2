# Dashboard Gold - CIA Invest

## 📁 Structure du projet

```
gold/
├── includes/               # Composants réutilisables
│   ├── config.php         # Configuration globale (utilisateur, menu)
│   ├── header.php         # En-tête HTML commun
│   ├── footer.php         # Pied de page et scripts JS
│   ├── sidebar.php        # Barre latérale de navigation
│   └── styles.php         # Styles CSS communs
├── dashboard.php          # Page d'accueil du dashboard
├── mes-projets.php        # Gestion des projets
├── investisseurs.php      # Réseau d'investisseurs
├── evenements.php         # Calendrier des événements
├── messages.php           # Messagerie
├── formations.php         # Catalogue de formations
├── rendez-vous.php        # Gestion des rendez-vous
├── statistiques.php       # Tableaux de bord analytiques
├── profil.php             # Profil utilisateur
├── parametres.php         # Paramètres du compte
└── README.md              # Cette documentation
```

## 🚀 Utilisation

### Créer une nouvelle page

Pour créer une nouvelle page dans le dashboard :

1. Créez un fichier PHP dans le dossier `gold/`
2. Définissez les variables de configuration :
   ```php
   <?php
   $current_page = 'nom-page';  // Identifiant de la page
   $page_title = 'Titre Page';  // Titre affiché dans le navigateur
   ?>
   ```
3. Incluez le header :
   ```php
   <?php include 'includes/header.php'; ?>
   ```
4. Ajoutez votre contenu :
   ```php
   <div class="page-header">
       <h1 class="page-title">📄 Titre de la Page</h1>
       <p class="page-subtitle">Description de la page</p>
   </div>
   
   <!-- Votre contenu ici -->
   ```
5. Incluez le footer :
   ```php
   <?php include 'includes/footer.php'; ?>
   ```

### Ajouter un élément au menu

Modifiez le fichier `includes/config.php` et ajoutez votre élément dans le tableau `$menu_items` :

```php
[
    'name' => 'Nouvelle Page',
    'icon' => 'bi-icon-name',
    'url' => 'nouvelle-page.php',
    'color' => 'green',  // green, blue, purple, orange, pink
    'page' => 'nouvelle-page'
]
```

## 🎨 Styles personnalisés

Pour ajouter des styles spécifiques à une page, définissez la variable `$custom_styles` avant d'inclure le header :

```php
<?php
$custom_styles = '<style>
    .ma-classe-custom {
        /* Vos styles */
    }
</style>';
include 'includes/header.php';
?>
```

## 📊 Utiliser Chart.js

Pour activer Chart.js sur une page, définissez `$need_charts = true` :

```php
<?php
$need_charts = true;  // Active Chart.js
include 'includes/header.php';
?>
```

## 🔧 Variables disponibles

Dans toutes les pages, vous avez accès aux variables suivantes (via `config.php`) :

- `$user` : Tableau contenant les informations de l'utilisateur
  - `name` : Nom de l'utilisateur
  - `email` : Email
  - `plan` : Type d'abonnement (Gold, Silver, etc.)
  - `avatar` : URL de l'avatar
  - etc.

- `$menu_items` : Configuration complète du menu
- `$current_page` : Page actuelle
- `$page_title` : Titre de la page

## 📱 Responsive

Le dashboard est entièrement responsive :
- **Desktop** : Sidebar fixe à gauche
- **Tablette/Mobile** : Menu hamburger avec sidebar coulissante

## 🎨 Couleurs du thème

Les couleurs principales sont définies dans `includes/styles.php` :

```css
--primary: #198754        /* Vert CIA */
--primary-light: #20c997  /* Vert clair */
--success: #10b981        /* Succès */
--info: #3b82f6          /* Information */
--warning: #f59e0b       /* Avertissement */
--danger: #ef4444        /* Danger */
--purple: #8b5cf6        /* Violet */
--pink: #ec4899          /* Rose */
```

## 🔐 Sécurité

⚠️ **Important** : Ce code est une maquette de démonstration.
Pour la production :
- Ajouter une gestion de sessions PHP
- Implémenter l'authentification
- Valider et assainir toutes les entrées utilisateur
- Utiliser des requêtes préparées pour la base de données
- Ajouter la protection CSRF
- Configurer HTTPS

## 📝 Notes pour les développeurs

- **Éviter la duplication** : Utilisez les composants `includes/` pour tous les éléments communs
- **Nommage cohérent** : Les pages utilisent des noms explicites en français avec tirets
- **Code propre** : Commentez les sections complexes
- **Mobile-first** : Testez toujours sur mobile

## 🤝 Contribution

Lors de l'ajout de nouvelles fonctionnalités :
1. Mettez à jour ce README
2. Documentez votre code
3. Testez sur mobile et desktop
4. Vérifiez la cohérence visuelle avec les autres pages

---

**Version** : 2.0  
**Auteur** : Équipe CIA Invest  
**Dernière mise à jour** : Octobre 2025
