<?php

use Illuminate\Support\Facades\Route;
use Src\App\Modules\Clientes\Http\Controllers\ClienteController;

Route::prefix('clientes')->group(function () {
    Route::get('create/', [ClienteController::class, 'create']);
    Route::post('store/', [ClienteController::class, 'store']);
});