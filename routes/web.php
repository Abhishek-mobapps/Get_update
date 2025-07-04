<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminForgotPasswordController;
use App\Http\Controllers\AdminResetPasswordController;
use App\Http\Controllers\Admin\ProductController;


// Route::get('/', function(){
//     echo "hello";
// });

Route::get('/', [AdminAuthController::class, 'showRegisterForm'])->name('register');

Route::prefix('admin')->name('admin.')->group(function () {

    // Route::middleware('guest:admin')->group(function () {
        Route::get('register', [AdminAuthController::class, 'showRegisterForm'])->name('register');
        Route::post('register', [AdminAuthController::class, 'register']);

        Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
        Route::post('login', [AdminAuthController::class, 'login']);

        Route::get('password/forgot', [AdminForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
        Route::post('password/email', [AdminForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

        Route::get('password/reset/{token}', [AdminResetPasswordController::class, 'showResetForm'])->name('password.reset');
        Route::post('password/reset', [AdminResetPasswordController::class, 'reset'])->name('password.update');
    // });

   // Authenticated routes
    // Route::middleware('auth:admin')->group(function () {
        Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::resource('products', ProductController::class);
        
    // });
});

Route::view('/test','admin.layouts.layouts');


Route::get('/user', function(){
    return view('admin.auth.main-components.user-profile');
})->name('user');

Route::get('/product', function(){
    return view('admin.auth.main-components.product-menu');
})->name('products');
