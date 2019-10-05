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

Route::get('/usuario/form', 'UsuarioController@form')->name('usuario');
Route::post('/usuario/create', 'UsuarioController@create')->name('usuario');
Route::get('/usuario/list', 'UsuarioController@listado')->name('usuario');
Route::get('/usuario/get/{id}', 'UsuarioController@get')->name('usuario');
Route::post('/usuario/update', 'UsuarioController@update')->name('usuario');
Route::get('/usuario/edit/{id}', 'UsuarioController@edit')->name('usuario');
Route::get('/usuario/delete/{id}', 'UsuarioController@edit')->name('usuario');
Route::delete('/usuario/delete', 'UsuarioController@delete')->name('usuario');

//Route::get('/usuario/create', 'UsuarioController@cre
