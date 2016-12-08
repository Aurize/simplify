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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('categories', 'CategoryController');
Route::resource('visits', 'VisitController');
Route::resource('places', 'PlaceController');
Route::resource('offers', 'OfferController');
Route::resource('users', 'UserController');
Route::resource('groups', 'GroupController');
Route::resource('reviews', 'ReviewController');