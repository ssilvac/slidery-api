<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('categories', 'CategoryController');

Route::resource('categories', 'CategoryController', array('only' => [
    'index'
]));

Route::resource('cities', 'CityController', array('only' => [
    'index'
]));

Route::resource('coupons', 'CouponController', array('only' => [
    'index', 'store', 'show', 'delete'
]));

Route::resource('locations', 'LocationController');

Route::resource('prizes', 'PrizeController', array('only' => [
    'index', 'show'
]));

Route::resource('raffles', 'RaffleController', array('only' => [
    'index', 'show'
]));

Route::resource('recharges', 'RechargeController', array('only' => [
    'index', 'show', 'store'
]));

Route::resource('regions', 'RegionController', array('only' => [
    'index', 'show'
]));

Route::resource('wallets', 'WalletController', array('only' => [
    'show'
]));

Route::resource('winners', 'WinnerController', array('only' => [
    'index', 'show'
]));