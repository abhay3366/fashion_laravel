<?php


use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\UserDasboardController;
use App\Http\Controllers\frontend\UserProfileController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home.home');
});

Route::get('/',[HomeController::class,'home'])->name('home');

// Route::get('/dashboard', function () {
//     return view('frontend.dashboard.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->prefix('user')->name('user.')->group(function(){
    Route::get('dashboard',[UserDasboardController::class,'index'])->name('dashboard');
    Route::get('profile',[UserProfileController::class,'index'])->name('profile');
    Route::post('update/profile',[UserProfileController::class,'updateProfile'])->name('profile.update');
    Route::post('update/password',[UserProfileController::class,'updatePassword'])->name('update.password');
});



require __DIR__.'/auth.php';
// for admin routes
require __DIR__.'/admin.php';
// for vendor routes
require __DIR__.'/vendor.php';
