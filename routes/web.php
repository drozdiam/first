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
    return 'aaaaaaaaaaaaa';
});

Route::get('/my_page', 'App\Http\Controllers\MyPlaseController@index');
Route::get('/New', 'App\Http\Controllers\NewController@somth');
