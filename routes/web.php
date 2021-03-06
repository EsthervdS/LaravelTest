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


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::post('/user/update', ['as' => 'user.update', 'uses' => 'UserController@update']);
Route::get('/user', ['as'=>"user", 'uses'=>'UserController@show']);
Route::get('/home', 'HomeController@index')->name('home');
