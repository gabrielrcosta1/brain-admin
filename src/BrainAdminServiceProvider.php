<?php

namespace BrainAdmin;

use Illuminate\Support\ServiceProvider;
class BrainAdminServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes/brainAdmin.php');
        $this->loadViewsFrom(__DIR__.'/views', 'brainadmin');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/brainadmin'),
        ], 'views');
    }
}
