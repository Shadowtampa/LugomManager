<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\SocialController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::resource('apisocials', SocialController::class);
Route::resource('apiads', AdvertisementController::class);
