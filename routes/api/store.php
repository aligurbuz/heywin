<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Store\CategoriesController;
use App\Http\Controllers\Api\Store\ProductsController;

Route::prefix('store')->group(function(){

    Route::get('/products', [ProductsController::class,'get']);
    Route::post('/products', [ProductsController::class,'create']);
    Route::put('/products', [ProductsController::class,'update']);

    Route::get('/categories', [CategoriesController::class,'get']);
    Route::post('/categories', [CategoriesController::class,'create']);
    Route::put('/categories', [CategoriesController::class,'update']);
});