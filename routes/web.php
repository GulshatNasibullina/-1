<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route; 

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show'])->name('show');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
