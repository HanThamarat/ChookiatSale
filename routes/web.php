<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('auth.login'); });

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/home', [App\Http\Controllers\pageController::class, 'index']);

    // page router
    Route::resource('views', App\Http\Controllers\pageController::class);
    Route::resource('customers', App\Http\Controllers\CusController::class);
    Route::resource('acs', App\Http\Controllers\AcsController::class);
    Route::resource('carstock', App\Http\Controllers\CarStockController::class);
    Route::resource('sales', App\Http\Controllers\SaleController::class);
});
