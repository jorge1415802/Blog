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
Route::get('/','PostController@index');
Route::get('/post','PostController@index');
Route::get('/post/crear','PostController@crear');
Route::post('/post/crear','PostController@guardar');
Route::get('/post/mostrar/{id}','PostController@mostrar')->name('post.mostrar');
Route::get('/post/update/{id}','PostController@editar')->name('post.editar');
Route::patch('/post/update/{id}','PostController@update')->name('post.update');

Route::get('/post/borrar/{id}','PostController@borrar')->name('post.borrar');
Route::delete('/post/borrar/{id}','PostController@delete')->name('post.delete');
