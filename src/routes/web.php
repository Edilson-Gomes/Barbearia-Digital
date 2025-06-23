<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function (){
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth:cliente')->group(function (){
    Route::get('cliente', function () {
        return view('clientes.cliente');
    });
});

Route::get('cadastrar/cliente', [ClienteController::class, 'create']);
Route::post('cliente/store', [ClienteController::class, 'store']);