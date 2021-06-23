<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;



Route::get('/', [productController::class, 'index'])->name('index');
Route::get('create', [productController::class, 'create'])->name('create');
Route::get('all_categories', [productController::class, 'all_categories'])->name('all_categories');



 
