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

Route::get('/home', 'HomeController@index')->name('home');
Route::put('/task/{id}/update_status', 'TasksController@updateStatus')->name('task.update_status')->middleware('auth');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('user', 'UsersController', ['only' => ['show', 'edit', 'update']]);
    /**
     * POST /user => store
     * GET /user/create => create
     * GET /user/id => show
     * GET / user/id/edit => edit
     * PUT/PATCH /user/id => update
     * DELETE /user/id =>delete
     */

    Route::resource('task', 'TasksController', ['except' => 'create', 'show']);
    /**
     * GET /task => index
     * POST /task => store
     * GET / task/id/edit => edit
     * PUT/PATCH /task/id => update
     * DELETE /task/id =>delete
     */
});

Route::group(['middleware' => ['admin']], function () {
    Route::resource('taskCategory', 'TaskCategoriesController', ['except' => 'create', 'show']);
    /**
     * GET /taskCategory => index
     * POST /taskCategory => store
     * GET / taskCategory/id/edit => edit
     * PUT/PATCH /taskCategory/id => update
     * DELETE /taskCategory/id =>delete
     */

});
