<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; // este use es para que no me genere errores al momento de arrancar el proyecto

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    // esta linea de codigo es para que no me genere errore al momento de arrancar el proyecto
        Schema::defaultStringLength(191); 
    }
}
