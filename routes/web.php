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

Route::get('/', function () {
    return view('home');
})->name('home');


Route::view('/login', 'auth.login')->name('login');
Route::post('/login', 'AuthenticationController@login')->name('login-post');
Route::get('/logout', 'AuthenticationController@destroy')->name('logout');