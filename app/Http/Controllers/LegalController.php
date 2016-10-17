<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\LegalModel;
use App\ProgramaModel;

class LegalController extends Controller
{
    //
    public function index()
    {
    	/**/
    	$Mensaje = null;
    	/**/
    	$Programa = new ProgramaModel;
    	$Programa = ProgramaModel::all();
    	
    	return view('main.Modulo3.Legal.Lista')
								    	-> with('programa', $Programa)
								    	-> with('mensaje', $Mensaje);
    }
    
    public function show(Request $request)
    {
    	//
    	$Programa = new ProgramaModel;
    
    	if ($request->Columna == 'Codigo')
    	{
    		$Programa = ProgramaModel::where('Codigo', $request->Busqueda)->get();
    	}
    	elseif ($request->Columna == 'SubPartida')
    	{
    		$Programa = ProgramaModel::where('SubPartida', $request->Busqueda)->get();
    	}
    	else
    		{
    		//$Mensaje = 'Seleccion no valida';
    	}
    
    	if (count($Programa) == 0)
    	{
    		$Mensaje = 'Busqueda sin resultados';
    	}
    	else {
    		$Mensaje = null;
    	}
    
    	return view('main.Modulo3.Legal.Lista')
										    	-> with('programa', $Programa)
										    	-> with('mensaje', $Mensaje);
    }
    
    public function Load($id)
    {
    	$progra = new ProgramaModel;
    	$progra->SubPartida = $id;
    	
    	$legal = new LegalModel;
    	$legal = LegalModel::where('SubPartida', $id)->get();
    	
    	return view('main.Modulo3.Legal.Mostrar')
    									->with('progra', $progra)
    									->with('legal', $legal);
    	
    }

    public  function create($id)
    {
    	$progra = new ProgramaModel;
    	$progra->SubPartida = $id;
    	
    	return view('main.Modulo3.Legal.Agregar')
    										->with('progra', $progra);
    }
    
    public function store($id, Request $request) 
    {
    	$legal = new LegalModel;
    	$legal->SubPartida = $id;
    	$legal->Envio = $request->Envio;
    	$legal->Recibido = $request->Recibido;
    	
    	$legal->save();
    	
    	return  redirect()->route('MCJD.Legal.index');
    	
    }
    
}
