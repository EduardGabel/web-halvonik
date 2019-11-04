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

Route::get('/showAllAction', ['as' => 'show', 'uses' => 'UserController@showAllAction']);
Route::get('/show/{id}', ['as' => 'show', 'uses' => 'UserController@showUser']);

Route::get('/insert', ['as' => 'insert', 'uses' => 'UserController@showUserForm']);
Route::post('/insertUser', ['as' => 'insert', 'uses' => 'UserController@insertUser']);

Route::get('/edit/{id}', ['as' => 'edit','uses' => 'UserController@edit_page']);
Route::post('/updateUser/{id}', ['as' => 'update', 'uses' => 'UserController@editUser']);

Route::get('/delete/{id}', ['as' => 'delete', 'uses' => 'UserController@deleteUser']);


