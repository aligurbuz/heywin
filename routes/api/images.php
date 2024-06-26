<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Images\SliderController;
use App\Http\Controllers\Api\Images\ProductController;

Route::prefix('images')->group(function(){

    Route::get('/product', [ProductController::class,'get']);
    Route::post('/product', [ProductController::class,'create']);
    Route::put('/product', [ProductController::class,'update']);

    Route::get('/slider', [SliderController::class,'get']);
    Route::post('/slider', [SliderController::class,'create']);
    Route::put('/slider', [SliderController::class,'update']);
});