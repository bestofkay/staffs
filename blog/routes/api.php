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
 
Route::get('staff', 'StaffController@index');
Route::get('staff/{staff}', 'StaffController@show');
Route::post('staff', 'StaffController@store');
Route::put('staff/{staff}', 'StaffController@update');
Route::delete('staff/{staff}', 'StaffController@delete');
