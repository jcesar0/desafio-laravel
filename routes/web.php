<?php
/*
 * Quando nomear rotas com metodo GET não é necessário espeficicar na frente
 */

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'auth'
], function () {
    Route::get('', [AuthController::class, 'create'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login_post');
    Route::post('register', [AuthController::class, 'register'])->name('register_post');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});

Route::get('', [HomeController::class, 'create'])->name('home')->middleware('auth');
