<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Auth\ChangePasswordController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\Profile\ProfileController;
use App\Http\Controllers\Admin\Brand\BrandController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Delivery\DeliveryController;
use App\Http\Controllers\Admin\MenuItem\MenuItemController;
use App\Http\Controllers\Admin\Order\OrderController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Resturant\ResturantController;
use App\Http\Controllers\Admin\Review\MenuItemReviewController;
use App\Http\Controllers\Admin\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|
|-----------------------------------------------------------------------------------------------------------
| BEGIN ADMIN ROUTES
|-----------------------------------------------------------------------------------------------------------
|
*/
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


    Route::middleware('guest:admin')->group(function () {

        /**
         * ---------------login page and login admin guard-------------
         */
        Route::get('/login', [AuthController::class, 'adminLogin'])->name('login.form');
        Route::post('/login', [AuthController::class, 'authenticate'])->name('login');



    });


    Route::middleware('auth:admin')->group(function () {

        /**
         * ---------------logout admin-------------------
         */
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

        /**
         * ---------------Change Profile------------------
         */
        Route::get('/profile/{id}', [ProfileController::class, 'viewProfile'])->name('change.profile');
        Route::put('/update-profile/{id}', [ProfileController::class, 'updateProfile'])->name('update.profile');

        /**
         * -----------------Change Password----------------
         */
        Route::match(['get', 'post'], '/change-password', [ChangePasswordController::class, 'changePassword'])->name('change.password');



        Route::resource('categories', CategoryController::class);


        Route::get('/all-products' ,[ProductController::class ,'index'])->name('products.list');
        Route::delete('/delete-product/{product_id}',[ProductController::class ,'destroy'])->name('product.delete');

        Route::get('/all-brands',[BrandController::class ,'index'])->name('brands.all');
        Route::get('/brand-view/{id}',[BrandController::class ,'show'])->name('brand.view');
        Route::get('/brand-delete/{id}' , [BrandController::class ,'destroy'])->name('brand.delete');


        Route::get('/notify-brand/{id}',[BrandController::class ,'notifyBrand'])->name('notify.brand');
        Route::delete('/delete-post-selection/{id}',[BrandController::class ,'deletePostSelection'])->name('post-selection.delete');



    });



});
