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

Route::get('/', function(){
	return view('admin.index');
});

Route::group(['prefix' => 'index'], function(){

	Route::resource('users', 'PersonaController');
});

Route::get('users/listas', 'PersonaController@index')->name('users.listas');

Route::get('users/create', 'PersonaController@create')->name('users.create');

Route::get('users/edit', 'PersonaController@edit')->name('users.edit');

Route::get('users/delete', 'PersonaController@delete')->name('users.delete');

