<?php

namespace Sarps\LaravelGUI;

use Illuminate\Support\ServiceProvider;

class GalaxyServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'gui');

        $this->publishes([
            __DIR__.'/resources/assets' => public_path('Sarps/galaxy'),
        ], 'public');

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
