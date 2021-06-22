
<?php

use App\Http\Controllers\Brand\Auth\AuthController;
use App\Http\Controllers\Brand\Auth\LoginController;
use App\Http\Controllers\Brand\Campaign\CampaignController;
use App\Http\Controllers\Brand\Category\CategoryController;
use App\Http\Controllers\Brand\Dashboard\DashboardController;
use App\Http\Controllers\Brand\Payment\PaymentController;
use App\Http\Controllers\Brand\PostSelection\InfluencerSelectionController;
use App\Http\Controllers\Brand\PostSelection\PostSelectionController;
use App\Http\Controllers\Brand\ProductServiceController;
use App\Http\Controllers\Brand\ReviewController;
use App\Http\Controllers\Brand\TargetAudience\TargetAudienceController;
use Illuminate\Support\Facades\Route;



/**
 * ---------------------brand---------------------------------
 */


Route::get('brand/verify/{token}', [AuthController::class, 'verifyAccount'])->name('email.verify');


Route::group(['prefix' => 'brand', 'as' => 'brand.'], function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


    Route::middleware('guest:brand')->group(function () {

        Route::match(['get', 'post'], 'brand-register', [AuthController::class, 'brandRegister'])->name('register.form');

        Route::get('brand-login', [LoginController::class, 'brandLogin'])->name('login.form');

        Route::post('brand-login', [LoginController::class, 'authenticate'])->name('submit.login.form');

    });


    Route::middleware(['auth:brand','isBrandEmailVerified'])->group(function () {


        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


        Route::resource('campaigns', CampaignController::class);

        Route::resource('products', ProductServiceController::class);


        Route::get('/target-audience', [TargetAudienceController::class, 'create'])->name('target.audience');
        Route::post('/target-audience', [TargetAudienceController::class, 'store'])->name('target.audience.store');



        Route::get('all-influencers', [InfluencerSelectionController::class, 'list'])->name('all.influencers');
        Route::delete('influencer/{id}', [InfluencerSelectionController::class, 'destroy'])->name('delete.influencer');


        Route::get('post-selection-list', [PostSelectionController::class, 'index'])->name('post.selection.list');
        Route::get('post-selection-create', [PostSelectionController::class, 'create'])->name('post.selection.create');
        Route::post('post-selection-store', [PostSelectionController::class, 'result'])->name('post.slection.store');
        Route::delete('post-selection/{id}', [PostSelectionController::class, 'destroy'])->name('post.selection.delete');


        Route::get('/review/{id}',[ReviewController::class ,'review'])->name('list.of.review');
        Route::get('/review-submitted/{id}',[ReviewController::class ,'store'])->name('review.submitted');

      
    });
});
