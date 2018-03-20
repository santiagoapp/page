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
Route::get('/', 'HomeController@index');
Route::get('/blog/post/{id}', 'BlogController@post');

Route::group( ['middleware' => ['auth']], function() {
	
	Route::get('/admin/categorias', 'CategoryController@index');
	Route::post('/admin/categorias/agregar', 'CategoryController@agregarRegistro');
	Route::post('/admin/categorias/eliminar', 'CategoryController@eliminar');
	Route::post('/admin/categorias/editar', 'CategoryController@editarRegistro');

	Route::get('/admin/etiquetas', 'TagController@index');
	Route::post('/admin/etiquetas/agregar', 'TagController@agregarRegistro');
	Route::post('/admin/etiquetas/eliminar', 'TagController@eliminar');
	Route::post('/admin/etiquetas/editar', 'TagController@editarRegistro');

	Route::resource('/admin/entradas', 'PostController');
	Route::post('/admin/entradas/agregar', 'PostController@agregarRegistro');
	Route::post('/admin/entradas/eliminar', 'PostController@eliminar');
	Route::post('/admin/entradas/editar', 'PostController@editarRegistro');

	Route::get('/admin/media', 'MediaController@index');
	Route::post('/admin/media/agregar', 'MediaController@subirImagen');
	Route::post('/admin/media/eliminar', 'MediaController@eliminar');
	Route::post('/admin/media/editar', 'MediaController@editarImagen');

	Route::get('/admin/testimonial', 'TestimonialController@index');
	Route::post('/admin/testimonial/agregar', 'TestimonialController@agregarRegistro');
	Route::post('/admin/testimonial/eliminar', 'TestimonialController@eliminar');
	Route::post('/admin/testimonial/editar', 'TestimonialController@editarRegistro');

	Route::get('/admin/perfil', 'ProfileController@index');
	Route::post('/admin/perfil/agregar', 'ProfileController@agregarRegistro');
	Route::post('/admin/perfil/eliminar', 'ProfileController@eliminar');
	Route::post('/admin/perfil/editar', 'ProfileController@editarRegistro');
	
	Route::resource('/admin/subscriptores', 'SubscriberController');
	Route::post('/admin/subscriptores/eliminar', 'SubscriberController@eliminar');
	Route::post('/admin/subscriptores/editar', 'SubscriberController@editar');
	Route::resource('/admin', 'DashboardController');

});
