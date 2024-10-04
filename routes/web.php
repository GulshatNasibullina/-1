<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route; 

Route::get('/product', [ProductController::class, 'index']);