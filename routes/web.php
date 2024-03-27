<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('product/{product}', [ProductController::class, 'show']);

Route::get('category/product/{product}',[ProductController::class,  'removeCategory'])->name('category.product.delete');