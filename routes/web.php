<?php
/*
 * Quando nomear rotas com metodo GET não é necessário espeficicar na frente
 */

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'login'
], function () {
    Route::get('', [LoginController::class, 'create'])->name('login');
    Route::post('', [LoginController::class, 'login'])->name('login_post');
});

Route::group([
    'prefix' => 'register'
], function () {
    Route::get('', [RegisterController::class, 'create'])->name('register');
    Route::post('', [RegisterController::class, 'register'])->name('register_post');
});

Route::get('', [HomeController::class, 'create'])->name('home')->middleware('auth');
