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

Route::get('/quienes', 'HomeController@index')->name('quienes');

Route::get('/servicios', 'HomeController@index')->name('servicios');

Route::get('/proyectosej', 'HomeController@index')->name('proyectosej');

Route::get('/proyectosde', 'HomeController@index')->name('proyectosde');

Route::get('/contacto', 'HomeController@index')->name('contacto');
