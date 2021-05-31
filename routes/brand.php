
<?php

use App\Http\Controllers\Brand\Auth\AuthController;
use App\Http\Controllers\Brand\Auth\LoginController;
use App\Http\Controllers\Brand\Campaign\CampaignController;
use App\Http\Controllers\Brand\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;



/**
 * ---------------------brand---------------------------------
 */



Route::group(['prefix' => 'brand', 'as' => 'brand.'], function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


    Route::middleware('guest:brand')->group(function () {

        Route::match(['get', 'post'], 'brand-register', [AuthController::class, 'brandRegister'])->name('register.form');

        Route::get('brand-login', [LoginController::class, 'brandLogin'])->name('login.form');

        Route::post('brand-login',[LoginController::class, 'authenticate'])->name('submit.login.form');
    });


    Route::middleware('auth:brand')->group(function () {


        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


        Route::resource('campaigns', CampaignController::class);


    });
});
