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

Route::group(['namespace' => 'Api'], function(){
    Route::resource('common-freights', 'CommonFreightController', ['except' => ['create', 'edit']]);
    Route::resource('enterprise-freights', 'EnterpriseFreightController', ['except' => ['create', 'edit']]);
    Route::resource('moving-houses', 'MovingHouseController', ['except' => ['create', 'edit']]);
    Route::resource('feedbacks', 'FeedbackController', ['except' => ['create', 'edit']]);
});

