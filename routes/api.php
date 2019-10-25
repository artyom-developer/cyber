<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Equipos/listar', 'EquipoController@json')->name('equipo');
Route::post('/Equipos/status', 'EquipoController@update_status')->name('equipo');
Route::post('/Equipos/iniciar', 'EquipoController@start_equip')->name('equipo');
