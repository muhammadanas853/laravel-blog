<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsAndConditionsController;
use App\Http\Controllers\SettingsController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [HomeController::class, 'show'])->name('home');

// Dashboard
Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Auth::routes();

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Admin Routes (Protected by Auth Middleware)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    // Profile
    Route::resource('profile', ProfileController::class);
    Route::get('profile/{profile}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('profile/{profile}', [ProfileController::class, 'update'])->name('profile.update');

    // Posts
    Route::resource('posts', PostController::class);

    // Categories
    Route::resource('categories', CategoryController::class);

    // Subcategories
    Route::resource('subcategories', SubCategoryController::class);
    Route::get('subcategories/category/{categoryId}', [SubCategoryController::class, 'getSubcategoriesByCategory'])->name('subcategories.byCategory');

    // Settings
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('/settings/update', [SettingsController::class, 'update'])->name('settings.update');

    // Terms and Conditions
    Route::get('/terms-and-conditions', [TermsAndConditionsController::class, 'index'])->name('terms.and.conditions');
    Route::post('/terms-and-conditions/update', [TermsAndConditionsController::class, 'update'])->name('terms.and.conditions.update');

    // Privacy Policy
    Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacy.policy');
    Route::post('/privacy-policy/update', [PrivacyPolicyController::class, 'update'])->name('privacy.policy.update');
});
