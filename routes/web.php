<?php
/*
 * Quando nomear rotas com metodo GET não é necessário espeficicar na frente
 */

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'auth'
], function () {
    Route::get('', [AuthController::class, 'create'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login_post');
    Route::post('register', [AuthController::class, 'register'])->name('register_post');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});

Route::group([
    'prefix' => 'vehicle',
    'middleware' => 'auth'
], function () {
    Route::get('', [VehicleController::class, 'create'])->name('vehicle');
    Route::post('', [VehicleController::class, 'store'])->name('vehicle_post');
    Route::delete('{id}', [VehicleController::class, 'destroy'])->name('vehicle_delete');
    Route::put('{id}/edit', [VehicleController::class, 'update'])->name('vehicle_put');

    Route::get('{id}/edit', [VehicleController::class, 'edit'])->name('vehicleEdit');

});

Route::get('', [HomeController::class, 'create'])->name('home')->middleware('auth');

