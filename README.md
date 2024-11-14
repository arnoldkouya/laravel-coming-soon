
# LaraComingSoon

LaraComingSoon est une bibliothèque Laravel qui permet de gérer les modes de maintenance de votre application avec plusieurs options, y compris des types de maintenance spécifiques et la possibilité de restreindre l'accès en fonction des adresses IP.

## Fonctionnalités

- **Types de maintenance** : Configurez différents types de messages comme "maintenance", "en construction", ou "déploiement".
- **Restrictions IP** : Autorisez l'accès uniquement à certaines adresses IP, même lorsque l'application est en mode maintenance.
- **Vue personnalisable** : Personnalisez le message et l'image affichés pendant la maintenance.

## Installation

1. **Ajouter le package via Composer**
   ```bash
   composer require arnoldkouya/lara-coming-soon
   ```

2. **Publier les fichiers de migration**
   ```bash
   php artisan vendor:publish --tag=migrations
   ```

3. **Exécuter les migrations**
   ```bash
   php artisan migrate
   ```

4. **Publier les vues (optionnel)**
   ```bash
   php artisan vendor:publish --tag=views
   ```

## Configuration

1. **Enregistrer le Middleware**
   Ouvrez `app/Http/Kernel.php` et ajoutez le middleware `ComingSoonMiddleware` dans le groupe `web` :
   ```php
   protected $middlewareGroups = [
       'web' => [
           // Autres middlewares...
           \ArnoldKouya\LaraComingSoon\Middleware\ComingSoonMiddleware::class,
       ],
   ];
   ```

2. **Accéder à la page de configuration**
    - Rendez-vous sur `/coming-soon/config` pour configurer le mode maintenance.
    - Vous pouvez définir le type de maintenance, le message affiché, une image d'arrière-plan, et une liste d'adresses IP autorisées.

## Utilisation

### Exemple d'utilisation du Middleware

Le `ComingSoonMiddleware` vérifie si l'application est en mode maintenance et redirige les utilisateurs non autorisés vers la page de maintenance.

### Fonction Helper

Utilisez la fonction helper `isMaintenanceMode()` pour vérifier si l'application est en mode maintenance :
```php
if (isMaintenanceMode()) {
    // Logique lorsque l'application est en mode maintenance
}
```

## Personnalisation de la Vue

Les vues se trouvent dans `resources/views/vendor/lara-coming-soon`. Vous pouvez modifier `config.blade.php` pour personnaliser l'apparence de la page de maintenance.

## Contributions

Les contributions sont les bienvenues ! Si vous souhaitez signaler un problème ou soumettre une amélioration, ouvrez une issue ou une pull request sur le dépôt GitHub.

## Licence

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.
