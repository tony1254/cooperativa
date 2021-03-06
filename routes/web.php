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
    return view('welcome');
});

Auth::routes();
Route::resource('users', 'UserController') ;
Route::post('addUser', 'Auth\RegisterController@create')->name('addUser');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('personas','PersonController');
Route::resource('referencias','ReferenceController');
Route::resource('records','RecordController');
