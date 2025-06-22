<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

// Route::get('cliente', function () {
//     return view('cliente');
// });

Route::get('cadastrarcliente', [ClienteController::class, 'create']);
Route::post('store', [ClienteController::class, 'store']);