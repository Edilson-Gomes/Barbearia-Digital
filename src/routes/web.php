<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('cliente', function () {
    return view('clientes.cliente');
});