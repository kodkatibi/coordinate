<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('move')->group(function () {
    Route::post('x', 'App\Http\Controllers\Api\MoveController@moveX')->name('move.x');
    Route::post('y', 'App\Http\Controllers\Api\MoveController@moveY')->name('move.y');
    Route::post('z', 'App\Http\Controllers\Api\MoveController@moveZ')->name('move.z');
});
