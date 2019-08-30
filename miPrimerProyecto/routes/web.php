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

Route::get('/', 'controllerPrincipal@index');

Route::get('/visualizar', 'controllerPrincipal@mostrarEquipos');

Route::get('/newPhones', 'controllerPrincipal@newPhones');

Route::post('/newPhones/createCell', 'controllerPrincipal@createCell');

Route::get('/editPhone/{RutasPhones}', 'controllerPrincipal@editPhone');

Route::put('/editPhone/updateCell/{RutasPhones}', 'controllerPrincipal@updateCell');
