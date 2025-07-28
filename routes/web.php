<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
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

// Redirect root to admin login
// Route::get('/', fn () => redirect()->route('admin.login'))->name('login');

// Route::get('/',function(){
//     return view('home');
// });
// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/home', function () {
//     return view('home');
// })->name('home');

// Route::get('login', function () {
//     return view('login');
// })->name('login-page');

// Route::get('forget', function () {
//     return view('forget-pass');
// })->name('forget-page');

// Route::get('reg', function () {
//     return view('registration');
// })->name('register-page');


// ==========================
//      Admin Routes
// ==========================
Route::prefix('admin')->name('admin.')->group(function () {

    // ======================
    //  Guest Admin Routes
    // ======================
    Route::middleware('guest.admin')->group(function () {
        Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
        Route::post('login', [AdminAuthController::class, 'login']);

        Route::get('register', [AdminAuthController::class, 'showRegisterForm'])->name('register');
        Route::post('register', [AdminAuthController::class, 'register']);

        // Optional: Password Reset Routes (uncomment if needed)
        /*
        Route::get('password/forgot', [AdminForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
        Route::post('password/email', [AdminForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
        Route::get('password/reset/{token}', [AdminResetPasswordController::class, 'showResetForm'])->name('password.reset');
        Route::post('password/reset', [AdminResetPasswordController::class, 'reset'])->name('password.update');
        */
    });

    // ======================
    //  Authenticated Admin Routes
    // ======================
    Route::middleware('auth:admin')->group(function () {
        Route::get('/admins', [AdminAuthController::class, 'index'])->name('admins.index');
        // Dashboard
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('dashboard/showbox', [DashboardController::class, 'showBox'])->name('dashboard.showbox');

        // Logout & Update
        Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::post('update-admin', [AdminAuthController::class, 'update'])->name('update');

        // Profile
        Route::get('profile', [ProfileController::class, 'index'])->name('user-profiles');
        Route::post('profile/upload', [ProfileController::class, 'uploadImage'])->name('profile.upload');

        // Password Management
        Route::get('password', [AdminResetPasswordController::class, 'index'])->name('password.change');
        Route::post('new-password', [AdminResetPasswordController::class, 'updatePassword'])->name('password.update');

        // Resources
        Route::resources([
            'products' => ProductController::class,
            'nations' => NationController::class,
            'regions' => RegionController::class,
            'sectors' => SectorController::class,
            'type' => TypeController::class,
            'operation-status' => OperationStatusController::class,
            'category' => CategoryController::class,
        ]);

        Route::get('/products', [ProductController::class, 'productmenu'])->name('user.products');

        // Product Listing & View
        Route::get('product-listing', [ProductController::class, 'productmenu'])->name('productmenu');
        Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');

        // Toggle & Restore Routes
        Route::post('type/{type}/toggle-status', [TypeController::class, 'toggleStatus'])->name('type.toggleStatus');
        Route::get('type/restore/{id}', [TypeController::class, 'restore'])->name('type.restore');

        Route::post('operation-status/{operation_status}/toggle-status', [OperationStatusController::class, 'toggleStatus'])->name('operation-status.toggleStatus');

        Route::post('category/{category}/toggle-status', [CategoryController::class, 'toggleStatus'])->name('category.toggleStatus');
        Route::get('category/restore/{id}', [CategoryController::class, 'restore'])->name('category.restore');
    });
});


// ==========================
//     PDF Listing Route
// ==========================
Route::get('/list-pdfs', function () {
    $files = Storage::files('public/pdfs');

    $pdfs = array_filter($files, fn($file) => strtolower(pathinfo($file, PATHINFO_EXTENSION)) === 'pdf');

    $pdfUrls = array_map(function ($file) {
        $relativePath = str_replace('public/', '', $file);
        return asset('storage/' . $relativePath);
    }, $pdfs);

    return view('pdfs.list', ['pdfUrls' => $pdfUrls]);
});
//  ---------------------------------------------------


use App\Http\Controllers\AuthController;
Route::get('/', [AuthController::class, 'showLoginForm'])->name('userlogin');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('userregister');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('userlogout');
