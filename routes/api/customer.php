<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Customer\BalancesController;
use App\Http\Controllers\Api\Customer\ContactsController;
use App\Http\Controllers\Api\Customer\ImagesController;
use App\Http\Controllers\Api\Customer\AgesController;
use App\Http\Controllers\Api\Customer\GendersController;
use App\Http\Controllers\Api\Customer\ProfilesController;

Route::prefix('customer')->group(function(){

    Route::get('/profiles', [ProfilesController::class,'get']);
    Route::post('/profiles', [ProfilesController::class,'create']);
    Route::put('/profiles', [ProfilesController::class,'update']);

    Route::get('/genders', [GendersController::class,'get']);
    Route::post('/genders', [GendersController::class,'create']);
    Route::put('/genders', [GendersController::class,'update']);

    Route::get('/ages', [AgesController::class,'get']);
    Route::post('/ages', [AgesController::class,'create']);
    Route::put('/ages', [AgesController::class,'update']);

    Route::get('/images', [ImagesController::class,'get']);
    Route::post('/images', [ImagesController::class,'create']);
    Route::put('/images', [ImagesController::class,'update']);

    Route::get('/contacts', [ContactsController::class,'get']);
    Route::post('/contacts', [ContactsController::class,'create']);
    Route::put('/contacts', [ContactsController::class,'update']);

    Route::get('/balances', [BalancesController::class,'get']);
    Route::post('/balances', [BalancesController::class,'create']);
    Route::put('/balances', [BalancesController::class,'update']);
});