<?php

use App\Http\Controllers\Brand\Payment\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class ,'index'])->name('home.page');

Route::get('login/',[])->name('login');


/**
 * eSewa ID: 9806800001/2/3/4/5
  * Password: Nepal@123
 */


    // esewa payment integration
    Route::get('/payment-verify',[PaymentController::class ,'verifyPayment'])->name('payment.verify');


