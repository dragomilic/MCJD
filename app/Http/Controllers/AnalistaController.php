<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\AnalistaModel;

class AnalistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Analista = new AnalistaModel;
        $Analista = AnalistaModel::all();
		
        return view('main.Opciones.analista.Lista')->with('analista', $Analista);
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
        $Analista = new AnalistaModel;
		
		$Analista->Identificacion = $request->Identificacion;
		$Analista->Nombre = $request->Nombre;
		$Analista->PrimerApellido = $request->PrimerApellido;
		$Analista->SegundoApellido = $request->SegundoApellido;
		
        $Analista->save();
		
		return redirect()->route('MCJD.Analista.index');
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
        $Analista = new AnalistaModel;
        $Analisa = AnalistaModel::where('Identificacion', $id);
		DD($Analisa);
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
        $Analista = new AnalistaModel;
        $Analista = AnalistaModel::where('id', $id)->first();
		
		return view('main.Opciones.analista.Modificar')->with('Analista', $Analista);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $record = new AnalistaModel;
        $record = AnalistaModel::where('Identificacion', $request->Identificacion)->first();
		
		$analista = AnalistaModel::find($record->id);
		
		$analista->fill($request->all());
		
		$analista->save();
		
        return redirect()->route('MCJD.Analista.index');
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
        AnalistaModel::where('id', $id)->delete();
		
		return redirect()->route('MCJD.Analista.index');
		
    }
}
