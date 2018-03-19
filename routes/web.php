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
Route::get('/', 'HomeController@index');
Route::get('/blog', 'BlogController@index');


Route::get('/admin/categorias', 'CategoryController@index');
Route::post('/admin/categorias/agregar', 'CategoryController@agregarRegistro');
Route::post('/admin/categorias/eliminar', 'CategoryController@eliminar');
Route::post('/admin/categorias/editar', 'CategoryController@editarRegistro');

Route::get('/admin/etiquetas', 'TagController@index');
Route::post('/admin/etiquetas/agregar', 'TagController@agregarRegistro');
Route::post('/admin/etiquetas/eliminar', 'TagController@eliminar');
Route::post('/admin/etiquetas/editar', 'TagController@editarRegistro');

Route::get('/admin/media', 'MediaController@index');

Route::get('/admin/perfil', 'ProfileController@index');

Route::resource('/admin/subscriptores', 'SubscriberController');
Route::post('/admin/subscriptores/eliminar', 'SubscriberController@eliminar');
Route::post('/admin/subscriptores/editar', 'SubscriberController@editar');
Route::resource('/admin', 'DashboardController');
