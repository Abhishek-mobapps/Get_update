<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminResetPasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\NationController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\SectorController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OperationStatusController;
// use App\Http\Controllers\Admin\AdminUserController;

Route::get('/', function () {
    return view('index');
});
Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('forget', function () {
    return view('forget-pass');
})->name('forget');

Route::get('reg', function () {
    return view('registration');
})->name('reg');

// Redirect root to admin login
Route::get('/auth', function () {
    return redirect()->route('admin.login');
})->name('auth');


// ==================== Admin Routes ====================
Route::prefix('admin')->name('admin.')->group(function () {

    // ========= Guest Only Routes =========
    Route::middleware('guest:admin')->group(function () {
        Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
        Route::post('login', [AdminAuthController::class, 'login']);
        Route::get('register', [AdminAuthController::class, 'showRegisterForm'])->name('register');
        Route::post('register', [AdminAuthController::class, 'register']);

        // Uncomment if you implement password reset later
        // Route::get('password/forgot', [AdminForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
        // Route::post('password/email', [AdminForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
        // Route::get('password/reset/{token}', [AdminResetPasswordController::class, 'showResetForm'])->name('password.reset');
        // Route::post('password/reset', [AdminResetPasswordController::class, 'reset'])->name('password.update');
    });

    // ========= Authenticated Admin Routes =========
    Route::middleware('auth:admin')->group(function () {

        // Dashboard
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('dashboard/showbox', [DashboardController::class, 'showBox'])->name('dashboard.showbox');

        // Logout and Admin Update
        Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::post('update-admin', [AdminAuthController::class, 'update'])->name('update');

        // Admin Profile
        Route::get('profile', [ProfileController::class, 'index'])->name('user-profiles');
        Route::post('profile/upload', [ProfileController::class, 'uploadImage'])->name('profile.upload');

        // Password Change
        Route::get('password', [AdminResetPasswordController::class, 'index'])->name('password.change');
        Route::post('new-password', [AdminResetPasswordController::class, 'updatePassword'])->name('password.update');

        // Resource Controllers
        Route::resources([
            'products' => ProductController::class,
            'nations' => NationController::class,
            'regions' => RegionController::class,
            'sectors' => SectorController::class,
            'type' => TypeController::class,
            'operation-status' => OperationStatusController::class,
            'category' => CategoryController::class,
        ]);








        // Product Extras
        Route::get('product-listing', [ProductController::class, 'productmenu'])->name('productmenu');
        Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');

        // Toggle Status & Restore Routes
        Route::post('type/{type}/toggle-status', [TypeController::class, 'toggleStatus'])->name('type.toggleStatus');
        Route::get('type/restore/{id}', [TypeController::class, 'restore'])->name('type.restore');

        Route::post('operation-status/{operation_status}/toggle-status', [OperationStatusController::class, 'toggleStatus'])->name('operation-status.toggleStatus');

        Route::post('category/{category}/toggle-status', [CategoryController::class, 'toggleStatus'])->name('category.toggleStatus');
        Route::get('category/restore/{id}', [CategoryController::class, 'restore'])->name('category.restore');
    });
});
// Route::get('/create-storage-link', function () {
//     try {
//         Artisan::call('storage:link');
//         return "Storage link created successfully.";
//     } catch (\Exception $e) {
//         return "Error creating storage link: " . $e->getMessage();
//     }
// });
// use App\Http\Controllers\Admin\AdminUserController;


use App\Http\Controllers\Admin\AdminUserController;

Route::get('/', [AdminUserController::class, 'index'])->name('users.index');
Route::get('/users/{id}/edit', [AdminUserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [AdminUserController::class, 'update'])->name('users.update');
