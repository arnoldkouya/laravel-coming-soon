# LaraComingSoon (French version below)

LaraComingSoon is a Laravel library that helps manage your application's maintenance modes with various options, including specific maintenance types and the ability to restrict access based on IP addresses.

## Features

- **Maintenance Types**: Configure different types of messages, such as "maintenance," "under construction," or "deployment."
- **IP Restrictions**: Allow access only to specific IP addresses, even when the application is in maintenance mode.
- **Customizable View**: Personalize the message and image displayed during maintenance.

## Installation

1. **Add the package via Composer**
   ```bash
   composer require arnoldkouya/lara-coming-soon
   ```

2. **Publish the migration files**
   ```bash
   php artisan vendor:publish --tag=migrations
   ```

3. **Run the migrations**
   ```bash
   php artisan migrate
   ```

4. **Publish the views (optional)**
   ```bash
   php artisan vendor:publish --tag=views
   ```

## Configuration

1. **Register the Middleware**
   Open `app/Http/Kernel.php` and add the `ComingSoonMiddleware` to the `web` group:
   ```php
   protected $middlewareGroups = [
       'web' => [
           // Other middlewares...
           \ArnoldKouya\LaraComingSoon\Middleware\ComingSoonMiddleware::class,
       ],
   ];
   ```

2. **Access the configuration page**
   - Go to `/coming-soon/config` to set up the maintenance mode.
   - You can define the maintenance type, displayed message, background image, and a list of allowed IP addresses.

## Usage

### Middleware Example

The `ComingSoonMiddleware` checks if the application is in maintenance mode and redirects unauthorized users to the maintenance page.

### Helper Function

Use the `isMaintenanceMode()` helper function to check if the application is in maintenance mode:
```php
if (isMaintenanceMode()) {
    // Logic when the application is in maintenance mode
}
```

## View Customization

The views are located in `resources/views/vendor/lara-coming-soon`. You can modify `config.blade.php` to customize the appearance of the maintenance page.

## Contributions

Contributions are welcome! If you would like to report an issue or suggest an improvement, feel free to open an issue or a pull request on the GitHub repository.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

----
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
