# Structure PHP Optimisée - CIA Invest

## 📁 Structure des dossiers

```
maquette_cia_v2/
├── partials/
│   ├── header.php          # En-tête et navigation
│   └── footer.php          # Pied de page et scripts
├── css/
│   └── style.css
├── js/
│   └── *.js
├── index.php               # Page d'accueil (exemple)
└── *.html                  # Pages HTML existantes
```

## 🎯 Avantages de l'optimisation PHP

### 1. **Réutilisabilité**
- Le header et le footer sont maintenant dans des fichiers séparés
- Modification unique pour toutes les pages
- Maintenance simplifiée

### 2. **Variables dynamiques**
- `$current_page` : Identifie la page active
- `$page_title` : Titre personnalisé pour chaque page
- `$extra_js` : Scripts JS supplémentaires par page

### 3. **Navigation active automatique**
- Les liens de navigation s'activent automatiquement selon la page
- Utilise la variable `$current_page`

## 📝 Comment utiliser les partials

### Exemple de page PHP :

```php
<?php
$current_page = 'nom-de-la-page';
$page_title = 'Titre de la page';
$extra_js = ['script1', 'script2']; // Optionnel
include 'partials/header.php';
?>

<!-- Votre contenu ici -->

<?php
include 'partials/footer.php';
?>
```

## 🔄 Migration HTML vers PHP

### Pour convertir une page HTML en PHP :

1. **Renommer** : `page.html` → `page.php`

2. **Remplacer le header** :
   ```php
   <?php
   $current_page = 'page';
   $page_title = 'Titre';
   include 'partials/header.php';
   ?>
   ```

3. **Remplacer le footer** :
   ```php
   <?php
   include 'partials/footer.php';
   ?>
   ```

4. **Mettre à jour les liens** :
   - `index.html` → `index.php`
   - `devenir-membre.html` → `devenir-membre.php`
   - etc.

## 📋 Variables disponibles

### Dans header.php :
- `$current_page` : Nom de la page courante (pour navigation active)
- `$page_title` : Titre de la page (pour balise `<title>`)

### Dans footer.php :
- `$extra_js` : Array de scripts JS supplémentaires à charger

## 🎨 Exemple complet

```php
<?php
$current_page = 'devenir-membre';
$page_title = 'Devenir Membre';
$extra_js = ['inscription'];
include 'partials/header.php';
?>

<section class="pricing-section py-5">
    <!-- Votre contenu -->
</section>

<?php
include 'partials/footer.php';
?>
```

## ✅ Pages à convertir

- [ ] devenir-membre.html → devenir-membre.php
- [ ] devenir-investisseur.html → devenir-investisseur.php
- [ ] inscription.html → inscription.php
- [ ] inscription-investisseur.html → inscription-investisseur.php
- [ ] connexion.html → connexion.php
- [ ] mot-de-passe-oublie.html → mot-de-passe-oublie.php

## 🚀 Prochaines étapes

1. Convertir toutes les pages HTML en PHP
2. Tester la navigation entre les pages
3. Vérifier que tous les liens fonctionnent
4. Optimiser les performances avec le cache PHP

## 💡 Bonnes pratiques

- Toujours définir `$current_page` et `$page_title`
- Utiliser des noms de pages cohérents
- Tester après chaque conversion
- Garder les fichiers HTML comme backup

## 🔧 Configuration XAMPP

Assurez-vous que :
- Apache est démarré
- PHP est activé
- Les pages sont accessibles via `http://localhost/web/maquette_cia_v2/`
