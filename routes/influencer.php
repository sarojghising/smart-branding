<?php

use App\Http\Controllers\Influencer\Auth\AuthController;
use Illuminate\Support\Facades\Route;


/**
 * ---------------------influencer---------------------------------
 */

Route::get('influencer-register',[AuthController::class ,'influencerRegister'])->name('influencer.register.form');
Route::get('influencer-login',[AuthController::class ,'influencerLogin'])->name('influencer.login.form');
