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
Route::put('/post/update/{id}','PostController@update')->name('post.update');
Route::delete('/post/update/{id}','PostController@delete')->name('post.delete');
