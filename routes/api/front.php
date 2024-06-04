<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Front\LangsController;

Route::prefix('front')->group(function(){

    Route::get('/langs', [LangsController::class,'get']);
    Route::post('/langs', [LangsController::class,'create']);
    Route::put('/langs', [LangsController::class,'update']);
});