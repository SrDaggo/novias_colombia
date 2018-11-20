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

Auth::routes();
Route::resource('user', 'UsersController', ['only' => ['show', 'edit', 'update']]);
/**
 * GET /user => index
 * POST /user => store
 * GET /user/create => create
 * GET /user/id => show
 * GET / user/id/edit => edit
 * PUT/PATCH /user/id => update
 * DELETE /user/id =>delete
 */
Route::get('/home', 'HomeController@index')->name('home');
