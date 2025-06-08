<?php
use App\Http\Controllers\Backend\AdminController;
use Illuminate\Support\Facades\Route;

// create a  seprate login page for admin
Route::get('admin/login',[AdminController::class,'login'])->name('admin.login');

Route::middleware(['auth','role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
    Route::get('dashboard',[AdminController::class,'dashboard'])->middleware(['auth','role:admin'])->name('dashboard');
});