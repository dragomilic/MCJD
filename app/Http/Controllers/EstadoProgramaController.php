<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ProgramaModel;

class EstadoProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /**/
        $Mensaje = null;
		/**/
        $Programa = new ProgramaModel;
        $Programa = ProgramaModel::all();
		
        return view('main.EstadoPrograma.Lista') 
        					-> with('programa', $Programa)
							-> with('mensaje', $Mensaje);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  varchar  Columna, varchar  Busqueda
     * @return \Illuminate\Http\Response
     */
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
		elseif ($request->Columna == 'Solicitud') 
		{
			$Programa = ProgramaModel::where('Solicitud', $request->Busqueda)->get();
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
		
        return view('main.EstadoPrograma.Lista') 
        								-> with('programa', $Programa)
										-> with('mensaje', $Mensaje);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
