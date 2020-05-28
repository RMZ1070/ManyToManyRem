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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/create', 'DessertController@create')->name('createDessert');
Route::post('/store', 'DessertController@store')->name('storeDessert');
Route::get('/edit{id}', 'DessertController@edit')->name('editDessert');
Route::post('/update{id}', 'DessertController@update')->name('updateDessert');
Route::get('/destroy{id}', 'DessertController@destroy')->name('destroyDessert');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
