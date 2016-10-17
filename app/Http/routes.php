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
Route::get('Login',[ 'uses' => 'HomeController@Login', 'as'   => 'Home.Login'  ]);

Route::auth();

Route::get('/home', 'HomeController@index');
/**/

Route::group(['prefix' => 'MCJD'], function(){
	
		Route::get('home',['as' => 'MCJD.home', function(){ return view('main.home'); }]);
	
		Route::group(['prefix' => 'Programas'], function()
		{
			/* */
			Route::resource('Programa','ProgramaController');
				/**/
				Route::get('AddPrograma', function () { return view('main.Modulo1.programacion.Agregar'); });
				/**/
				Route::get('GuardarPrograma',[ 'uses' => 'ProgramaController@store', 'as'   => 'MCJD.Programa.store'  ]);
				/**/
				Route::get('ListaPrograma',[ 'uses' => 'ProgramaController@index', 'as'   => 'MCJD.Programa.index'  ]);
				/**/
				Route::get('EliminarPrograma/{id}',[ 'uses' => 'ProgramaController@destroy', 'as'   => 'MCJD.Programa.destroy'  ]);
				/**/
				Route::get('Programa/{id}/edit',[ 'uses' => 'ProgramaController@edit', 'as'   => 'MCJD.Programa.edit'  ]);
			
			/* */
			Route::resource('EstadoPrograma','EstadoProgramaController');
				/**/
				Route::get('ListaEstadoPrograma',[ 'uses' => 'EstadoProgramaController@index', 'as'   => 'MCJD.EstadoPrograma.index'  ]);
				/**/
				Route::get('BuscarEstadoPrograma',[ 'uses' => 'EstadoProgramaController@show', 'as'   => 'MCJD.EstadoPrograma.show'  ]);
				
			/**/
			Route::resource('RevReq','RevReqController');
				/**/
				Route::get('ListaRevReq',[  'uses' => 'RevReqController@index', 'as'   => 'MCJD.RevReq.index'  ]);
				Route::get('Revision_requerimientos_Agregar/{id}',[ 'uses' => 'RevReqController@create', 'as'   => 'MCJD.RevReq.create'  ]);
				Route::get('Revision_requerimientos_Save/{id}',[  'uses' => 'RevReqController@store', 'as'   => 'MCJD.RevReq.store'  ]);
				Route::get('Revision_requerimientos/{id}',[  'uses' => 'RevReqController@show', 'as'   => 'MCJD.RevReq.show'  ]);
				
			/* */
			Route::resource('AproVisa','AproVisaController');
				/**/
				Route::get('ListaAproVisa',[ 'uses' => 'AproVisaController@index', 'as'   => 'MCJD.AproVisa.index'  ]);
				Route::get('AproVisa_Agregar/{id}',[ 'uses' => 'AproVisaController@create', 'as'   => 'MCJD.AproVisa.create'  ]);
				Route::get('AproVisa_Save/{id}',[ 'uses' => 'AproVisaController@store', 'as'   => 'MCJD.AproVisa.store'  ]);
				Route::get('Aprovacion_visado/{id}',[ 'uses' => 'AproVisaController@show', 'as'   => 'MCJD.AproVisa.show'  ]);
			
		});
	
		Route::group(['prefix' => 'Contrataciones'], function()
		{
			
			/* */
			Route::resource('Contratacion','ContratacionController');
				/**/
				Route::get('AddContratacion/{id}',[ 'uses' => 'ContratacionController@Load', 'as'   => 'MCJD.Contratacion.Load' ]);
				/**/
				Route::get('ListaContratacion',[ 'uses' => 'ContratacionController@index', 'as'   => 'MCJD.Contratacion.index'  ]);
				/**/
				Route::get('GuardarContratacion/{id}',[ 'uses' => 'ContratacionController@store', 'as'   => 'MCJD.Contratacion.store'  ]);
				/**/
				Route::get('BuscarContratacion',[ 'uses' => 'ContratacionController@show', 'as'   => 'MCJD.Contratacion.show'  ]);
				/**/
				Route::get('EliminarContratacion/{id}',[ 'uses' => 'ContratacionController@destroy', 'as'   => 'MCJD.Contratacion.destroy'  ]);
				/**/
				Route::get('Contratacion/{id}/edit',[ 'uses' => 'ContratacionController@edit', 'as'   => 'MCJD.Contratacion.edit'  ]);
				/**/
				Route::get('ActualizarContratacion',[ 'uses' => 'ContratacionController@update', 'as'   => 'MCJD.Contratacion.update'  ]);
				/**/
				Route::get('CrearContratacion/{id}',[ 'uses' => 'ContratacionController@create', 'as'   => 'MCJD.Contratacion.create'  ]);
				/**/
				Route::get('ListarContratacion',[ 'uses' => 'ContratacionController@index2', 'as'   => 'MCJD.Contratacion.index2'  ]);
		});
		
		Route::group(['prefix' => 'Legal'], function(){
			/**/
			Route::get('Listado_Legal',[ 'uses' => 'LegalController@index', 'as'   => 'MCJD.Legal.index'  ]);
			/**/
			Route::get('Lista_Legal',[ 'uses' => 'LegalController@show', 'as'   => 'MCJD.Legal.show'  ]);
			/**/
			Route::get('Mostrar_Legal/{id}',[ 'uses' => 'LegalController@Load', 'as'   => 'MCJD.Legal.Load'  ]);
			/**/
			Route::get('Crear_Legal/{id}',[ 'uses' => 'LegalController@create', 'as'   => 'MCJD.Legal.create'  ]);
			/**/
			Route::get('Guardar_Legal/{id}',[ 'uses' => 'LegalController@store', 'as'   => 'MCJD.Legal.store'  ]);
		});
		
		Route::group(['prefix' => 'Admin'], function(){
			
			/* */
			Route::resource('Analista','AnalistaController');
			
				Route::get('AddAnalista', function () { return view('main.Opciones.analista.NewAnalista'); });
				/**/
				Route::get('ModificarAnalista', function () { return view('main.Opciones.analista.Modificar'); });
				/**/
				Route::get('NewAnalista',[ 'uses' => 'AnalistaController@store', 'as'   => 'MCJD.Analista.store'  ]);
				/**/
				Route::get('Analista/{id}',[ 'uses' => 'AnalistaController@show', 'as'   => 'MCJD.Analista.show'  ]);
				/**/
				Route::get('Analista/{id}/edit',[ 'uses' => 'AnalistaController@edit', 'as'   => 'MCJD.Analista.edit'  ]);
				/**/
				Route::get('ActualizarAnalista',[ 'uses' => 'AnalistaController@update', 'as'   => 'MCJD.Analista.update'  ]);
				/**/
				Route::get('ListaAnalista',[ 'uses' => 'AnalistaController@index', 'as'   => 'MCJD.Analista.index'  ]);
				/**/
				Route::get('EliminarAnalista/{id}',[ 'uses' => 'AnalistaController@destroy', 'as'   => 'MCJD.Analista.destroy'  ]);
					/**/
			
			/* */
			Route::resource('Proveedor','ProveedorController');
				/**/
				Route::get('AddProveedor', function () { return view('main.Opciones.Proveedor.Agregar'); });
				/**/
				Route::get('ListaProveedor',[ 'uses' => 'ProveedorController@index', 'as'   => 'MCJD.Proveedor.index' ]);
				/**/
				Route::get('NewProveedor',[ 'uses' => 'ProveedorController@store', 'as'   => 'MCJD.Proveedor.store' ]);
				/**/
				Route::get('EliminarProveedor/{id}',[ 'uses' => 'ProveedorController@destroy', 'as'   => 'MCJD.Proveedor.destroy'  ]);
				/**/
				Route::get('Proveedor/{id}/edit',[ 'uses' => 'ProveedorController@edit', 'as'   => 'MCJD.Proveedor.edit'  ]);
				
			/* */
			Route::resource('Estatus','EstatusController');
				/**/
				Route::get('AddEstatus', function () { return view('main.Modulo1.Estados.Agregar'); });
				/**/
				Route::get('NewEstatus',[ 'uses' => 'EstatusController@store', 'as'   => 'MCJD.Estatus.store'  ]);
				/**/
				Route::get('ListaEstatus',[ 'uses' => 'EstatusController@index', 'as'   => 'MCJD.Estatus.index'  ]);
				/**/
				Route::get('EliminarEstatus/{id}',[ 'uses' => 'EstatusController@destroy', 'as'   => 'MCJD.Estatus.destroy'  ]);
				/**/
				Route::get('Estatus/{id}/edit',[ 'uses' => 'EstatusController@edit', 'as'   => 'MCJD.Estatus.edit'  ]);
				/**/
				Route::get('ActualizarEstatus',[ 'uses' => 'EstatusController@update', 'as'   => 'MCJD.Estatus.update'  ]);
				
		});
	
});
