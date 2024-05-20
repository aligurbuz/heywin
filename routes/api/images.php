<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Images\ProductController;

Route::prefix('images')->group(function(){

    Route::get('/product', [ProductController::class,'get']);
    Route::post('/product', [ProductController::class,'create']);
    Route::put('/product', [ProductController::class,'update']);
});