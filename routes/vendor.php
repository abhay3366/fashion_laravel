<?php

use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\VendorProfileController;
use Illuminate\Support\Facades\Route;


    Route::middleware(['auth', 'role:vendor'])
    ->prefix('vendor')
    ->name('vendor.')
    ->group(function () {
        Route::get('dashboard', [VendorController::class, 'dashboard'])->name('dashboard');

        Route::get('profile',[VendorProfileController::class,'index'])->name('profile');
        Route::post('profile/update',[VendorProfileController::class,'profileUpdate'])
        ->name('profile.update');
        Route::post('password/update',[VendorProfileController::class,'updatePassword'])->name('update.password');
    });