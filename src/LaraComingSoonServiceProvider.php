<?php
namespace ArnoldKouya\LaraComingSoon;

use Illuminate\Support\ServiceProvider;

class LaraComingSoonServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Migrations/2024_11_14_000000_create_coming_soon_table.php' => database_path('migrations/2024_11_14_000000_create_coming_soon_table.php'),
        ], 'migrations');

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/resources/views', 'lara-coming-soon');

        if (file_exists(__DIR__ . '/Helpers/helpers.php')) {
            require_once __DIR__ . '/Helpers/helpers.php';
        }
        if (file_exists(__DIR__ . '/Enums/ComingSoonTypeEnum.php')) {
            require_once __DIR__ . '/Enums/ComingSoonTypeEnum.php';
        }
    }

    public function register()
    {
    }
}
