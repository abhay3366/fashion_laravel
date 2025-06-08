<?php
use App\Http\Controllers\Backend\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('admin/dashboard',[AdminController::class,'dashboard'])->middleware(['auth','role:admin'])->name('admin.dashboard');

Route::middleware(['auth','role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
    Route::get('dashboard',[AdminController::class,'dashboard'])->middleware(['auth','role:admin'])->name('dashboard');
});