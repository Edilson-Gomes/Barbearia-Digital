<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ClientesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // View::addNamespace('clientes', base_path('src/Modules/Clientes/Views'));
    }

    public function register()
    {
        //
    }
}
