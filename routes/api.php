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

Route::group(['prefix' => 'test','as' => 'test.'],function() {
    Route::get('/search','TestController@search');
    Route::get('/one', 'TestController@getOne');
    Route::get('{id}',['uses' => 'TestController@get']);
    Route::post('/one', 'TestController@setOne')->middleware('api.key');
});