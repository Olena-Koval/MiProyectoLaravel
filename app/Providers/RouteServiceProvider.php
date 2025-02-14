<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define la URL a la que los usuarios serán redirigidos después de iniciar sesión.
     */
    public const HOME = '/home';

    /**
     * Define las rutas de la aplicación.
     */
    public function boot(): void
    {
        parent::boot();
    }
}
