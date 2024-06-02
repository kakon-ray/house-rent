<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// user interface
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/details/{id}', [HomeController::class, 'details'])->name('details');



// Admin auth(login/registration) route
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.store');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginCheck', [AuthController::class, 'loginCheck'])->name('loginCheck');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'index']);


// admin route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin')->middleware('AdminMiddleware');

// category 
Route::get('/dashboard/add-category', [DashboardController::class, 'add_category'])->middleware('AdminMiddleware');
Route::post('/dashboard/add-category/submit', [DashboardController::class, 'add_category_submit'])->middleware('AdminMiddleware');
Route::get('/dashboard/manage-category', [DashboardController::class, 'manage_category'])->middleware('AdminMiddleware');
Route::post('/dashboard/delete-category', [DashboardController::class, 'delete_category'])->middleware('AdminMiddleware');
Route::get('/dashboard/edit-category/{id}', [DashboardController::class, 'edit_category'])->middleware('AdminMiddleware');
Route::post('/dashboard/edit-category/submit', [DashboardController::class, 'edit_category_submit'])->middleware('AdminMiddleware');


// property add page show and submit
Route::get('/dashboard/add-property', [DashboardController::class, 'add_property'])->middleware('AdminMiddleware');
Route::get('/dashboard/request', [DashboardController::class, 'request_property'])->middleware('AdminMiddleware');
Route::get('/dashboard/approve/{id}', [DashboardController::class, 'request_property_submit'])->middleware('AdminMiddleware');
Route::get('/dashboard/cancle/{id}', [DashboardController::class, 'request_property_cancle'])->middleware('AdminMiddleware');
Route::post('/dashboard/add-rent-house/submit', [DashboardController::class, 'add_property_submit'])->middleware('AdminMiddleware');

// property manage
Route::get('/dashboard/manage-property', [DashboardController::class, 'manage_property'])->middleware('AdminMiddleware');
Route::post('/dashboard/property-delete', [DashboardController::class, 'delete_property'])->middleware('AdminMiddleware');
// update 
Route::get('/dashboard/edit-property/{id}', [DashboardController::class, 'edit_property'])->middleware('AdminMiddleware');
Route::post('/dashboard/edit-rent-house/submit', [DashboardController::class, 'edit_property_submit'])->middleware('AdminMiddleware');


// Agents 

Route::get('/dashboard/add-agents', [DashboardController::class, 'add_agents'])->middleware('AdminMiddleware');
Route::post('/dashboard/add-agent/submit', [DashboardController::class, 'add_agents_submit'])->middleware('AdminMiddleware');
Route::post('/dashboard/edit-agent/submit', [DashboardController::class, 'edit_agents_submit'])->middleware('AdminMiddleware');
Route::get('/dashboard/manage', [DashboardController::class, 'manage_agents'])->middleware('AdminMiddleware');
Route::post('/dashboard/delete-agents', [DashboardController::class, 'delete_agents'])->middleware('AdminMiddleware');
Route::get('/dashboard/edit-agents/{id}', [DashboardController::class, 'edit_agents'])->middleware('AdminMiddleware');
