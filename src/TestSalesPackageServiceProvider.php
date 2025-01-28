<?php

namespace Sales\TestSales;

use Illuminate\Support\ServiceProvider;

class TestSalesPackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register any bindings or package configurations hereeee
    }

    public function boot()
    {
        // Load routes, views, migrations, etc.
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'testsales');
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('testsales.php'),
        ]);
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

    }
}
