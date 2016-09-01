<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ProgramaModel;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Programa = new ProgramaModel;
        $Programa = ProgramaModel::all();
		
        return view('main.programacion.Lista') -> with('programa', $Programa);
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
        $Programa = new ProgramaModel;
		
		$Programa->SubPartida = $request->Identificacion;
		$Programa->Solicitud = $request->NumSolicitud;
		$Programa->Obj_cont_soli = $request->ObjContractual;
		$Programa->Monto = $request->Monto;
		$Programa->PC = $request->PC;
		$Programa->Oficio_ini = $request->NumOficio;
		
		
		//DD($Programa);
		
        $Programa->save();
		
		return redirect()->route('MCJD.Programa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        dd('gdfhgjhkj');
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
        ProgramaModel::where('SubPartida', $id)->delete();
		
		return redirect()->route('MCJD.Programa.index');
    }
}
