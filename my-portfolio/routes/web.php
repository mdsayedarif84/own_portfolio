<?php

use App\Http\Controllers\Front\Home\HomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminAboutController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'home'])->name('front.home');
Route::get('/front-about', [HomeController::class, 'about'])->name('front.about');
Route::get('/front-portfolio', [HomeController::class, 'portfolio'])->name('front.portfolio');
Route::get('/front-contact', [HomeController::class, 'contact'])->name('front.contact');
Route::get('/front-blog', [HomeController::class, 'blog'])->name('front.blog');
Route::get('/blog-post', [HomeController::class, 'blogPost'])->name('front.blog-post');

//admin
Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login', [AdminLoginController::class, 'loginForm']);
    Route::post('admin/login', [AdminLoginController::class, 'store'])->name('admin.loginStore');
});

Route::middleware(['auth:sanctum,admin', 'throttle:10,1', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('dashboard');
    Route::get('/home', [AdminHomeController::class, 'home'])->name('admin.home');
    Route::post('/profile/store', [AdminHomeController::class, 'store'])->name('admin.profileStore');
    Route::get('profile/list', [AdminHomeController::class, 'profileList'])->name('admin.profileList');
    Route::get('profile/{id}/edit', [AdminHomeController::class, 'profileEdit'])->name('admin.profileEdit');
    Route::post('profile/update', [AdminHomeController::class, 'profileUpdate'])->name('admin.profileUpdate');

    Route::get('/about', [AdminAboutController::class, 'about'])->name('admin.about');
    Route::post('/about/store', [AdminAboutController::class, 'aboutStore'])->name('admin.aboutStore');

    Route::get('/portfolio', [AdminHomeController::class, 'portfolio'])->name('admin.portfolio');
    Route::get('/contact', [AdminHomeController::class, 'contact'])->name('admin.contact');
    Route::get('/blog', [AdminHomeController::class, 'blog'])->name('admin.blog');
    Route::get('/blog-post', [AdminHomeController::class, 'blogPost'])->name('admin.blog-post');
});
Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('admin_dashboard');
});
Route::get('admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
