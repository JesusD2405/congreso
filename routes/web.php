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

/**
 * Ruta de Autenticacion
 */

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

/**
 * Administrador 
 */	

Route::prefix('admin') -> group(function() 
{
	/**
	 * Ruta principal
	 */

	Route::get('/home', 'HomeController@index')->name('home');

	/**
	 * Rutas Persona
	 */

	Route::resource('registro','PersonaController');

	Route::get('registro', 'PersonaController@index')->name('registro');

	Route::get('listar', 'PersonaController@personList')->name('listar_registros');

	/**
	 * Ruta asistencia
	 */

	Route::get('asistencia', 'AsistenciaController@index')->name('tomar_asistencia');

	/**
	 * Ruta certificado
	 */

	Route::get('certificado', 'CertificadoController@index')->name('imprimir_certificado');

	/**
	 * Ruta ayuda
	 */

	Route::get('ayuda', 'AyudaController@index')->name('imprimir_ayuda');
		
});
