<?php

use App\Http\Controllers\Influencer\Auth\AuthController;
use App\Http\Controllers\Influencer\Brand\BrandController;
use App\Http\Controllers\Influencer\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;


/**
 * ---------------------influencer---------------------------------
 */
Route::group(['prefix' => 'influencer', 'as' => 'influencer.'], function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


    Route::middleware('guest:influencer')->group(function () {

        Route::get('influencer-register', [AuthController::class, 'influencerRegister'])->name('register.form');

        Route::post('influencer-register', [AuthController::class, 'influencerRegisterSubmit'])->name('register.form.submit');

        Route::get('/influencer-login', [AuthController::class, 'influencerLogin'])->name('login.form');

        Route::post('/influencer-login', [AuthController::class, 'authenticate'])->name('submit.login.form');

    });


    Route::middleware('auth:influencer')->group(function () {

        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


        Route::get('/all-brands',[BrandController::class ,'listOfBrand'])->name('list.of.brands');
    });
});
