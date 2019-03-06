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
/*Route::get('admin/routes', 'HomeController@admin')->middleware('admin');*/

Route::get('/randos/create', 'RandoController@create')->name('rando_create')->middleware('auth');
Route::post('/randos/store', 'RandoController@store')->middleware('auth');

Route::get('/randos/{rando}/edit', 'RandoController@edit')->middleware('auth');
Route::put('/randos/{rando}', 'RandoController@update')->middleware('auth');

Route::get('/randos/index', 'RandoController@index')->middleware('auth');

/*Route::delete('/randos/{rando}', ['randos' => 'RandoController@destroy']);*/

Route::get('/inscrits/create', 'InscritController@create')->name('inscrit_create')->middleware('auth');
Route::post('/inscrits/store', 'InscritController@store')->middleware('auth');

