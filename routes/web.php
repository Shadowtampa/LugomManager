<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('socials')->name('socials.')->controller(SocialController::class)->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/{product_id}','edit')->name('edit');
    Route::put('/{product_id}', 'update')->name('update');
    Route::delete('/{product_id}', 'destroy')->name('destroy');
});

Route::prefix('ads')->name('ads.')->controller(AdvertisementController::class)->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/{product_id}','edit')->name('edit');
    Route::put('/{product_id}', 'update')->name('update');
    Route::delete('/{product_id}', 'destroy')->name('destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
