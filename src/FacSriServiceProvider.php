<?php

namespace SamDeimos\FacSri;

use Illuminate\Support\ServiceProvider;

class FacSriServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'samdeimos');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'samdeimos');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/facsri.php', 'facsri');

        // Register the service the package provides.
        $this->app->singleton('facsri', function ($app) {
            return new FacSri;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['facsri'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/facsri.php' => config_path('facsri.php'),
        ], 'facsri.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/samdeimos'),
        ], 'facsri.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/samdeimos'),
        ], 'facsri.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/samdeimos'),
        ], 'facsri.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
