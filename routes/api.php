<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/api/dishes','DishController@create')->name('dishes.create');
Route::post('/api/dishes','DishController@store')->name('dishes.store');
Route::put('/api/dishes','DishController@update')->name('dishes.update');
Route::delete('/api/dishes/{$id}','DishController@destroy')->name('dishes.delete');