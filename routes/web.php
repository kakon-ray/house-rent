<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// user interface
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');



// Admin auth(login/registration) route
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.store');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginCheck', [AuthController::class, 'loginCheck'])->name('loginCheck');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'index']);


// admin route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin')->middleware('AdminMiddleware');
Route::get('/dashboard/add-property', [DashboardController::class, 'add_property'])->middleware('AdminMiddleware');
Route::post('/dashboard/add-rent-house/submit', [DashboardController::class, 'add_property_submit'])->middleware('AdminMiddleware');
