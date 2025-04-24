<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';


/*
|--------------------------------------------------------------------------
| Auth Routes...
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    //Custom Routes
    /*
    |--------------------------------------------------------------------------
    | frontEnd Routes...
    |--------------------------------------------------------------------------
    */
    Route::controller(HomeController::class)->group(function () {
        Route::get('', 'index')                         ->name('home');
        Route::get('gental-tails/about', 'about')       ->name('about');
        Route::get('gental-tails/shop', 'shop')         ->name('shop');
        Route::get('gental-tails/blog', 'blog')         ->name('blog');
        Route::get('gental-tails/blog-detail', 'blogDetail')         ->name('blog-detail');
        Route::get('gental-tails/adopt', 'adopt')       ->name('adopt');
        Route::get('gental-tails/product', 'product')   ->name('single-product');
        Route::get('gental-tails/cart', 'cart')         ->name('cart');
        Route::get('gental-tails/checkout', 'checkout')         ->name('checkout');
    });

    // user login routs
    Route::controller(LoginController::class)->group(function () {
        Route::get('user/login', 'showLoginForm')       ->name('user-login');
        Route::get('user/register', 'create')           ->name('user-register');
    });

    // user register routs
    Route::controller(RegisterController::class)->group(function () {
        Route::get('user/register', 'showRegistrationForm')->name('user-register');
    });

    //Existing routes
    // Route::get('',                          [RoutingController::class, 'index'])        ->name('root');
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])    ->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])           ->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])                             ->name('any');

});


