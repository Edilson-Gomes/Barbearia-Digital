<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('cliente', function () {
    return view('clientes.cliente');
});

Route::get('cadastrar/cliente', [ClienteController::class, 'create']);