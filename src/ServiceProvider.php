
namespace ArnoldKouya\\LaraComingSoon;

use Illuminate\\Support\\ServiceProvider;
use Illuminate\\Support\\Facades\\Route;

class LaraComingSoonServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publie la migration
        \$this->publishes([
            __DIR__ . '/Migrations/2024_11_14_000000_create_coming_soon_table.php' => database_path('migrations/2024_11_14_000000_create_coming_soon_table.php'),
        ], 'migrations');

        // Charge les routes
        \$this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        // Charge les vues
        \$this->loadViewsFrom(__DIR__ . '/views', 'lara-coming-soon');

        // Charge les helpers
        if (file_exists(__DIR__ . '/Helpers/helpers.php')) {
            require_once __DIR__ . '/Helpers/helpers.php';
        }
    }

    public function register()
    {
        // Enregistre les configurations
    }
}
