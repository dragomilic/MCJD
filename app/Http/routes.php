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

Route::group(['prefix' => 'MCJD'],function(){
	
	Route::resource('Analista','AnalistaController');
	
	Route::get('home',['as' => 'MCJD.home', function(){
		return view('main.home');
	}]);

});

