<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/memoryGame', function () {
    return view('memoryGame');
});

Route::get('/simpleCalculator', function () {
    return view('simpleCalculator');
});
Route::get('/tabs', function () {
    return view('tabs');
});
