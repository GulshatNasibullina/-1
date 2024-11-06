<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/product', [ProductController::class, 'index'])->name('index');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('show');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('/my-orders', [OrderController::class, 'index'])->middleware('auth')->name('my-orders');
Route::get('/admin', [AdminController::class, 'index'])->middleware( 'admin'); 
Route::post('/admin/order/approve/{id}', [AdminController::class, 'approveOrder'])->name('order.approve');
Route::post('/admin/order/deliver/{id}', [AdminController::class, 'deliverOrder'])->name('order.deliver');