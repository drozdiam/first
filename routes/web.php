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

Route::get('/my_page', function(){
    return'this is my page';
});
Route::get('/sity', function (){
    return'Moscow';
} );
Route::get('/country', function (){
    return 'Russia';
});
Route::get('/ya',function (){
   return 'Яндекс';
});
