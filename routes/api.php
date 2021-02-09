<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;

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



Route::get('/dishes',[DishController::class, 'index'])->name('dishes.index');
Route::post('/dishes',[DishController::class, 'store'])->name('dishes.store');
Route::put('/dishes',[DishController::class, 'update'])->name('dishes.update');
Route::delete('/dishes/{$id}',[DishController::class, 'delete'])->name('dishes.delete');