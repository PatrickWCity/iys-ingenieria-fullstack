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

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/quienes', function () {
    return view('quienes');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/proyectosej', 'HomeController@index')->name('proyectosej');

Route::get('/proyectosde', 'HomeController@index')->name('proyectosde');

Route::get('/contacto2', 'HomeController@index')->name('contacto2');
