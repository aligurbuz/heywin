<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Orders\CommentController;
use App\Http\Controllers\Api\Orders\OrdersController;

Route::prefix('orders')->group(function(){

    Route::get('/', [OrdersController::class,'get']);
    Route::post('/', [OrdersController::class,'create']);
    Route::put('/', [OrdersController::class,'update']);

    Route::get('/comment', [CommentController::class,'get']);
    Route::post('/comment', [CommentController::class,'create']);
    Route::put('/comment', [CommentController::class,'update']);
});