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

/**/
Route::get('Login',[
		'uses' => 'HomeController@Login',
		'as'   => 'Home.Login'
]);
/**/

Route::group(['prefix' => 'MCJD'], function(){
	
	Route::get('home',['as' => 'MCJD.home', function(){
		return view('main.home');
	}]);
	
	/*
	 * 
	 * */
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
	Route::get('Analista/{id}/edit',[
		'uses' => 'AnalistaController@edit',
		'as'   => 'MCJD.Analista.edit'
	]);
	/**/
	Route::get('ActualizarAnalista',[
		'uses' => 'AnalistaController@update',
		'as'   => 'MCJD.Analista.update'
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
	
	/*
	 * 
	 * */
	Route::resource('Programa','ProgramaController');
	Route::get('AddPrograma', function () {
		return view('main.programacion.Agregar');
	});
	/**/
	Route::get('GuardarPrograma',[
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
	/**/
	Route::get('Programa/{id}/edit',[
		'uses' => 'ProgramaController@edit',
		'as'   => 'MCJD.Programa.edit'
	]);
	/**/
	
	/*
	 * 
	 * */
	Route::resource('Contratacion','ContratacionController');
	/**/
	Route::get('AddContratacion',[
		'uses' => 'ContratacionController@Load',
		'as'   => 'MCJD.Contratacion.Load'
	]);
	/**/
	Route::get('ListaContratacion',[
		'uses' => 'ContratacionController@index',
		'as'   => 'MCJD.Contratacion.index'
	]);
	/**/
	Route::get('GuardarContratacion',[
		'uses' => 'ContratacionController@store',
		'as'   => 'MCJD.Contratacion.store'
	]);
	/**/
	Route::get('EliminarContratacion/{id}',[
		'uses' => 'ContratacionController@destroy',
		'as'   => 'MCJD.Contratacion.destroy'
	]);
	/**/
	Route::get('Contratacion/{id}/edit',[
		'uses' => 'ContratacionController@edit',
		'as'   => 'MCJD.Contratacion.edit'
	]);
	/**/
	Route::get('ActualizarContratacion',[
		'uses' => 'ContratacionController@update',
		'as'   => 'MCJD.Contratacion.update'
	]);
	
	/*
	 * 
	 * */
	Route::resource('Estatus','EstatusController');
	/**/
	Route::get('AddEstatus', function () {
		return view('main.Estados.Agregar');
	});
	/**/
	Route::get('NewEstatus',[
		'uses' => 'EstatusController@store',
		'as'   => 'MCJD.Estatus.store'
	]);
	/**/
	Route::get('ListaEstatus',[
		'uses' => 'EstatusController@index',
		'as'   => 'MCJD.Estatus.index'
	]);
	/**/
	Route::get('EliminarEstatus/{id}',[
		'uses' => 'EstatusController@destroy',
		'as'   => 'MCJD.Estatus.destroy'
	]);
	/**/
	Route::get('Estatus/{id}/edit',[
		'uses' => 'EstatusController@edit',
		'as'   => 'MCJD.Estatus.edit'
	]);
	/**/
	Route::get('ActualizarEstatus',[
		'uses' => 'EstatusController@update',
		'as'   => 'MCJD.Estatus.update'
	]);
	
	/*
	 * 
	 * */
	Route::resource('Proveedor','ProveedorController');
	/**/
	Route::get('AddProveedor', function () {
		return view('main.Proveedor.Agregar');
	});
	/**/
	Route::get('ListaProveedor',[
		'uses' => 'ProveedorController@index',
		'as'   => 'MCJD.Proveedor.index'
	]);
	/**/
	Route::get('NewProveedor',[
		'uses' => 'ProveedorController@store',
		'as'   => 'MCJD.Proveedor.store'
	]);
	/**/
	Route::get('EliminarProveedor/{id}',[
		'uses' => 'ProveedorController@destroy',
		'as'   => 'MCJD.Proveedor.destroy'
	]);
	/**/
	Route::get('Proveedor/{id}/edit',[
		'uses' => 'ProveedorController@edit',
		'as'   => 'MCJD.Proveedor.edit'
	]);
	
});


Route::auth();

Route::get('/home', 'HomeController@index');
