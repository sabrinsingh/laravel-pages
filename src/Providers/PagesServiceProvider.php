<?php

namespace BiNet\RBAuthorization;

use Illuminate\Support\ServiceProvider;

class PagesServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        /*# config
        $this->mergeConfigFrom(
            __DIR__.'/path/to/config/courier.php', 'courier'
        );*/

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->app->make('BiNet\Pages\Controllers\DemoController');
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        # views
        $this->loadViewsFrom(__DIR__.'/views', 'laravel-pages');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/binetvn/laravel-pages'),
        ]);

        /*# config
        $this->publishes([
            __DIR__.'/path/to/config/courier.php' => config_path('courier.php'),
        ]);*/

        /*# routes
        $this->loadRoutesFrom(__DIR__.'/routes.php');*/

        /*# migrations
        $this->loadMigrationsFrom(__DIR__.'/path/to/migrations');*/

        /*# translations
        $this->loadTranslationsFrom(__DIR__.'/path/to/translations', 'courier');
        $this->publishes([
            __DIR__.'/path/to/translations' => resource_path('lang/vendor/courier'),
        ]);*/

        /*# commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                FooCommand::class,
                BarCommand::class,
            ]);
        }*/

        /*# assets
        $this->publishes([
            __DIR__.'/resources/assets' => public_path('vendor/courier'),
        ], 'public');*/

        // # file groups
        // $this->publishes([
        //     __DIR__.'/../config/package.php' => config_path('package.php')
        // ], 'config');

        // $this->publishes([
        //     __DIR__.'/../database/migrations/' => database_path('migrations')
        // ], 'migrations');
    }
}