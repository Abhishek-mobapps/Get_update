<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminForgotPasswordController;
use App\Http\Controllers\AdminResetPasswordController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;

    Route::get('/', function () {
    return redirect()->route('admin.login');
    })->name('login');

// Admin Routes Group
    Route::prefix('admin')->name('admin.')->group(function () {

    /**
     * ========== Guest Routes ==========
     * Accessible only when not logged in as admin
     */
    // Route::middleware('guest:admin')->group(function () {
        Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
        Route::post('login', [AdminAuthController::class, 'login']);

        Route::get('register', [AdminAuthController::class, 'showRegisterForm'])->name('register');
        Route::post('register', [AdminAuthController::class, 'register']);

        Route::get('password/forgot', [AdminForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
        Route::post('password/email', [AdminForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

        Route::get('password/reset/{token}', [AdminResetPasswordController::class, 'showResetForm'])->name('password.reset');
        Route::post('password/reset', [AdminResetPasswordController::class, 'reset'])->name('password.update');
    // });

    /**
     * ========== Authenticated Routes ==========
     * Accessible only after login
     */
    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');


        Route::resource('products', ProductController::class);
        Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');

    });
});

    