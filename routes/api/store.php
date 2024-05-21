<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Store\DrawsController;
use App\Http\Controllers\Api\Store\ProductCurrenciesController;
use App\Http\Controllers\Api\Store\ProductCategoriesController;
use App\Http\Controllers\Api\Store\CategoriesController;
use App\Http\Controllers\Api\Store\ProductsController;

Route::prefix('store')->group(function(){

    Route::get('/products', [ProductsController::class,'get']);
    Route::post('/products', [ProductsController::class,'create']);
    Route::put('/products', [ProductsController::class,'update']);

    Route::get('/categories', [CategoriesController::class,'get']);
    Route::post('/categories', [CategoriesController::class,'create']);
    Route::put('/categories', [CategoriesController::class,'update']);

    Route::get('/productCategories', [ProductCategoriesController::class,'get']);
    Route::post('/productCategories', [ProductCategoriesController::class,'create']);
    Route::put('/productCategories', [ProductCategoriesController::class,'update']);

    Route::get('/productCurrencies', [ProductCurrenciesController::class,'get']);
    Route::post('/productCurrencies', [ProductCurrenciesController::class,'create']);
    Route::put('/productCurrencies', [ProductCurrenciesController::class,'update']);

    Route::get('/draws', [DrawsController::class,'get']);
    Route::post('/draws', [DrawsController::class,'create']);
    Route::put('/draws', [DrawsController::class,'update']);
});