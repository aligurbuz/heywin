<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Payment\TypesController;

Route::prefix('payment')->group(function(){

    Route::get('/types', [TypesController::class,'get']);
    Route::post('/types', [TypesController::class,'create']);
    Route::put('/types', [TypesController::class,'update']);
});