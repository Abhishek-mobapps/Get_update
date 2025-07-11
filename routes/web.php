<?php
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminResetPasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\NationController;
use App\Http\Controllers\Admin\RegionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.login');
})->name('login');

// Admin Routes Group
Route::prefix('admin')->name('admin.')->group(function () {

    /**
     * ========== Guest Routes ==========
     * Accessible only when not logged in as admin
     */
    //  Route::middleware('guest:admin')->group(function () {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminAuthController::class, 'login']);
    Route::post('/admin/update', [AdminAuthController::class, 'update'])->name('update');
    Route::get('register', [AdminAuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [AdminAuthController::class, 'register']);

    // Route::get('password/forgot', [AdminForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    // Route::post('password/email', [AdminForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    // Route::get('password/reset/{token}', [AdminResetPasswordController::class, 'showResetForm'])->name('password.reset');
    // Route::post('password/reset', [AdminResetPasswordController::class, 'reset'])->name('password.update');

    Route::get('password', [AdminResetPasswordController::class, 'index'])->name('password.change');
    Route::post('new-password', [AdminResetPasswordController::class, 'updatePassword'])->name('password.update');
    // });

    /**
     * ========== Authenticated Routes ==========
     * Accessible only after login
     */
    Route::middleware('auth:admin')->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        // Route::get('dashboard', [DashboardController::class, 'show'])->name('grid');
        Route::get('/dashboard/showbox', [DashboardController::class, 'showBox'])->name('dashboard.showbox');

        Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');

        Route::resource('nations', NationController::class);
        Route::resource('regions', RegionController::class);

        Route::resource('products', ProductController::class);
        Route::get('product-listing', [ProductController::class, 'productmenu'])->name('productmenu');
        Route::get('/admin-profile', [ProfileController::class, 'index'])->name('user-profiles');
        Route::post('/admin/profile/upload', [ProfileController::class, 'uploadImage'])
            ->name('profile.upload');

        // Route::resource('type', \App\Http\Controllers\Admin\TypeController::class)->name('type');
        // Route::get('type/restore/{id}', [\App\Http\Controllers\Admin\TypeController::class, 'restore'])->name('type.restore');

        // Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
        // Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
        // Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');
        // Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        // Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('category.update');
        // Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');

    });

    Route::resource('type', \App\Http\Controllers\Admin\TypeController::class);
    Route::post('type/{type}/toggle-status', [\App\Http\Controllers\Admin\TypeController::class, 'toggleStatus'])->name('type.toggleStatus');
    Route::get('type/restore/{id}', [\App\Http\Controllers\Admin\TypeController::class, 'restore'])->name('type.restore');

    Route::resource('operation-status', \App\Http\Controllers\Admin\OperationStatusController::class);
    Route::post('operation-status/{operation_status}/toggle-status', [\App\Http\Controllers\Admin\OperationStatusController::class, 'toggleStatus'])->name('operation-status.toggleStatus');

});
Route::prefix('admin')->middleware('auth:admin')->name('admin.')->group(function () {
    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);
    Route::post('category/{category}/toggle-status', [\App\Http\Controllers\Admin\CategoryController::class, 'toggleStatus'])->name('category.toggleStatus');
    Route::get('category/restore/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'restore'])->name('category.restore');
});

// Route::middleware(['auth'])->group(function () {
//     Route::get('/user-products', [UserProductController::class, 'index'])->name('user.products.index');
//     Route::get('/user-profile', [UserController::class, 'profile'])->name('user.profile');
//     Route::post('/products/{product}/save', [UserProductController::class, 'save'])->name('user.products.save');
//     Route::post('/products/{product}/request', [UserProductController::class, 'requestInfo'])->name('user.products.request');
// });
