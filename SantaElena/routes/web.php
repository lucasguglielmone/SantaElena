<?php

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


Route::group(['middleware' => 'web'], function () {
    
});


/* HOME ROUTING */

Route::get('/home', function () {
    return view('home');
});
Route::get('/index', function () {
    return view('home');
});
Route::get('/', function () {
    return view('home');
});