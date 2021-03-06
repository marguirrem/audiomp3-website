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

Route::middleware(['auth'])->group(function () {

  Route::get('user/profile', function () {
    // Uses first & second Middleware
  });
});

Route::get('user/register','Service\ServiceUserController@store');
Route::post('user/register','Service\ServiceUserController@store');

Route::post('/user/login','Service\ServiceUserController@login');
Route::post('/artists','Service\ServiceArtistController@index');
