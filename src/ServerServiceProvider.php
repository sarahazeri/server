<?php

namespace Sarahazeri\Server;

use Illuminate\Support\ServiceProvider;

class ServerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       $this->app->make('Sarahazeri\Server\InfoController');
       $this->loadViewsFrom(__DIR__.'/views','server');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        include __DIR__.'/routes.php';
    }
}
