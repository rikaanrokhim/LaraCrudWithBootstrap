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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/room', 'RoomController@index')->name('room.index');
Route::get('/room/create', 'RoomController@create')->name('room.create');
Route::post('/room/create', 'RoomController@store')->name('room.store');
Route::get('/room/{room}', 'RoomController@show')->name('room.show');
Route::get('/room/{room}/edit', 'RoomController@edit')->name('room.edit');
Route::patch('/room/{room}/edit', 'RoomController@update')->name('room.update');
Route::delete('/room/{room}/delete', 'RoomController@destroy')->name('room.destroy');

Route::get('/type', 'TypeController@index')->name('type.index');


