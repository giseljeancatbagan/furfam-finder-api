<?php

use App\Http\Controllers\Api\AdoptionController;
use App\Http\Controllers\Api\PetController;
use App\Http\Controllers\Api\ShelterController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'v1'], function () {
    
    Route::apiResource('users', UserController::class);
    Route::apiResource('shelters', ShelterController::class);
    Route::apiResource('pets', PetController::class);
    Route::apiResource('adoptions', AdoptionController::class);
});
