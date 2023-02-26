<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('wellcome');
})->name('wellcome');
Route::post('create/device', 'App\Http\Controllers\Api\DeviceController@create')->name('device.create');
Route::get('client', 'App\Http\Controllers\Api\DeviceController@index')->name('client');
