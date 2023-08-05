<?php

namespace App\Providers;

use Doctrine\DBAL\Schema\View;
use Illuminate\Support\ServiceProvider;

class TotalComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        View()->composer('darosBanco', function ($view) {
            $total = session('total', 0); // Si no existe la variable de sesión 'total', asigna un valor predeterminado de 0
            $view->with('total', $total);
        });
    }
}
