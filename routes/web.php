<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Route;

// require __DIR__ . '/auth.php';

Route::group(['prefix' => '/','middleware' => 'auth'], function () {
    //Custom Routes
    //Existing routes
    Route::get('',                          [RoutingController::class, 'index'])        ->name('root');
    Route::get('{first}/{second}/{third}',  [RoutingController::class, 'thirdLevel'])   ->name('third');
    Route::get('{first}/{second}',          [RoutingController::class, 'secondLevel'])  ->name('second');
    Route::get('{any}',                     [RoutingController::class, 'root'])         ->name('any');
    
});
 

/*
|--------------------------------------------------------------------------
| frontEnd Routes...
|--------------------------------------------------------------------------
*/
Route::controller(HomeController::class)->group(function () {
    Route::get('/',             'index')    ->name('home');
    Route::get('pet/about',     'about')    ->name('about');
    Route::get('pet/shop',      'shop')     ->name('shop');
    Route::get('pet/blog',      'blog')     ->name('blog');
    Route::get('pet/adopt',     'adopt')    ->name('adopt');
});
