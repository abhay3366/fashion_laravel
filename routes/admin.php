<?php
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;

// create a  seprate login page for admin
Route::get('admin/login',[AdminController::class,'login'])->name('admin.login');


Route::middleware(['auth','role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

    Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('profile',[ProfileController::class,'index'])->name('profile');
     Route::post('profile',[ProfileController::class,'updateProfile'])->name('profile.update');

});