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
Auth::routes();
Route::get('/','FrontedController@index');


Route::get('/listas de personas', function(){
	return view('web.listas');
})->name('list_obj');

Route::get('/añadir personas', function(){
	return view('web.create');
})->name('add_obj');

Route::resource('persona', 'PersonaController');