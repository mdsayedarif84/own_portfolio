<?php

use App\Http\Controllers\Front\Home\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'home'])->name('front.home');
Route::get('/about', [HomeController::class, 'about'])->name('front.about');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('front.portfolio');
Route::get('/contact', [HomeController::class, 'contact'])->name('front.contact');
Route::get('/blog', [HomeController::class, 'blog'])->name('front.blog');
