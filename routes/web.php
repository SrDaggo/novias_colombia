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

Route::view('/', 'home');
Route::view('/productos', 'productos');
Route::view('/encuentranos', 'encuentranos');
Route::view('/recetas', 'recetas');
Route::view('/proceso', 'proceso');
Route::view('/contactanos', 'contactanos');
Route::view('/nosotros', 'nosotros');
Route::view('/aliados', 'aliados');

Route::post('/mail', 'MailController@mail');
