<?php

use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Route;


    Route::middleware(['auth', 'role:vendor'])
    ->prefix('vendor')
    ->name('vendor.')
    ->group(function () {
        Route::get('dashboard', [VendorController::class, 'dashboard'])->name('dashboard');
    });