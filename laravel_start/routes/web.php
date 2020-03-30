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

Route::get('hello-world','hello_world@show');

Route::get('searchMask', function(){
    return view('searchMask');
});

Route::get('date','cal@getWeek');

Route::get('/mask','mask_info@show_all');
Route::get('/mask_address','mask_info@show_section');

Route::get('/api/mask','apiMask@show_all');
Route::get('/api/mask_address','apiMask@show_section');
