<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminForgotPasswordController;
use App\Http\Controllers\AdminResetPasswordController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\NationController;
use App\Http\Controllers\Admin\OperationStatusController;
use App\Http\Controllers\UserProductController;
use App\Http\Controllers\UserController;

// Redirect root to admin login
Route::get('/', function () {
    return redirect()->route('admin.login');
})->name('login');

// ============================
// Admin Routes Group
// ============================
Route::prefix('admin')->name('admin.')->group(function () {

    /**
     * Guest Routes (no login required)
     */
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminAuthController::class, 'login']);
    Route::get('register', [AdminAuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [AdminAuthController::class, 'register']);

    // Optional: Password change from profile (not reset link-based)
    Route::get('password', [AdminResetPasswordController::class, 'index'])->name('password.change');
    Route::post('new-password', [AdminResetPasswordController::class, 'updatePassword'])->name('password.update');

    /**
     * Authenticated Admin Routes
     */
    Route::middleware('auth:admin')->group(function () {

        // Dashboard
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('dashboard/showbox', [DashboardController::class, 'showBox'])->name('dashboard.showbox');

        // Logout
        Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');

        // Admin Profile
        Route::get('profile', [ProfileController::class, 'index'])->name('user-profiles');
        Route::post('profile/upload', [ProfileController::class, 'uploadImage'])->name('profile.upload');

        // Product Management
        Route::resource('products', ProductController::class);
        Route::get('product-listing', [ProductController::class, 'productmenu'])->name('productmenu');

        // Category Management
        Route::resource('category', CategoryController::class);
        Route::post('category/{category}/toggle-status', [CategoryController::class, 'toggleStatus'])->name('category.toggleStatus');
        Route::get('category/restore/{id}', [CategoryController::class, 'restore'])->name('category.restore');

        // Type Management
        Route::resource('type', TypeController::class);
        Route::post('type/{type}/toggle-status', [TypeController::class, 'toggleStatus'])->name('type.toggleStatus');
        Route::get('type/restore/{id}', [TypeController::class, 'restore'])->name('type.restore');

        // Operation Status Management
        Route::resource('operation-status', OperationStatusController::class);
        Route::post('operation-status/{operation_status}/toggle-status', [OperationStatusController::class, 'toggleStatus'])->name('operation-status.toggleStatus');

        // Region & Nation (if needed later)
        Route::resource('nation', NationController::class);
        Route::resource('region', RegionController::class);
        Route::resource('sector', RegionController::class);

        Route::get('category/restore/{id}', [CategoryController::class, 'restore'])->name('admin.category.restore');

    });
});

// ============================
// User Routes (Registered Users)
// ============================
Route::middleware(['auth'])->group(function () {
    Route::get('/user-products', [UserProductController::class, 'index'])->name('user.products.index');
    Route::post('/products/{product}/save', [UserProductController::class, 'save'])->name('user.products.save');
    Route::post('/products/{product}/request', [UserProductController::class, 'requestInfo'])->name('user.products.request');

    Route::get('/user-profile', [UserController::class, 'profile'])->name('user.profile');
});
