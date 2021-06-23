<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;



Route::get('/', [productController::class, 'index'])->name('index');
Route::get('create', [productController::class, 'create'])->name('create');
Route::get('all_categories', [productController::class, 'all_categories'])->name('all_categories');
Route::get('all_products', [productController::class, 'all_products'])->name('all_products');
Route::get('order', [productController::class, 'order'])->name('order');
Route::get('create_product', [productController::class, 'create_product'])->name('create_product');




