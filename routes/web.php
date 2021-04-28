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

Route::get('/players','PlayerController@index');
Route::post('/players/new','PlayerController@create')->name('player.create');
Route::put('/players/update','PlayerController@update')->name('player.update');
Route::put('/players/delete','PlayerController@delete')->name('player.delete');
