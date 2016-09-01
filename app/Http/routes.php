<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('Inicio.Inicio');
});

Route::group(['prefix' => 'MCJD'], function(){
	
	Route::get('home',['as' => 'MCJD.home', function(){
		return view('main.home');
	}]);
	
	/**/
	Route::resource('Analista','AnalistaController');
	
	Route::get('AddAnalista', function () {
		return view('main.analista.NewAnalista');
	});
	Route::get('ModificarAnalista', function () {
		return view('main.analista.Modificar');
	});
	/**/
	Route::get('NewAnalista',[
		'uses' => 'AnalistaController@store',
		'as'   => 'MCJD.Analista.store'
	]);
	/**/
	Route::get('Analista/{id}',[
		'uses' => 'AnalistaController@show',
		'as'   => 'MCJD.Analista.show'
	]);
	/**/
	Route::get('ListaAnalista',[
		'uses' => 'AnalistaController@index',
		'as'   => 'MCJD.Analista.index'
	]);
	/**/
	Route::get('EliminarAnalista/{id}',[
		'uses' => 'AnalistaController@destroy',
		'as'   => 'MCJD.Analista.destroy'
	]);
	/**/
	
	
	Route::resource('Programa','ProgramaController');
	Route::get('AddPrograma', function () {
		return view('main.programacion.Agregar');
	});
	/**/
	Route::get('NewPrograma',[
		'uses' => 'ProgramaController@store',
		'as'   => 'MCJD.Programa.store'
	]);
	/**/
	Route::get('ListaPrograma',[
		'uses' => 'ProgramaController@index',
		'as'   => 'MCJD.Programa.index'
	]);
	/**/
	Route::get('EliminarPrograma/{id}',[
		'uses' => 'ProgramaController@destroy',
		'as'   => 'MCJD.Programa.destroy'
	]);
	
	
	
});

