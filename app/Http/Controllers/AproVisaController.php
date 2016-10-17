<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\AproVisaModel;
use App\ProgramaModel;

class AproVisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('main.Modulo1.AprobacionVisado.Agregar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
    	$progra = new ProgramaModel;
    	$progra->SubPartida = $id;
    	
    	return view(' main.Modulo1.AprobacionVisado.Agregar')
														    	->with('progra', $progra);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        //
    	$AproVisa = new AproVisaModel;
    	$AproVisa->SubPartida = $id;
    	$AproVisa->Proveedor = $request->Proveedor;
    	$AproVisa->Ofi_Presu = $request->Presupuesto;
    	$AproVisa->Area_contratacion = $request->Area;
    	
    	$AproVisa->save();
        
    	return redirect()->route('MCJD.EstadoPrograma.index');
        
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
        $progra = new ProgramaModel;
        $progra->SubPartida = $id;
        /**/
        $lista = new AproVisaModel;
        $lista = AproVisaModel::where('SubPartida' ,$id)->get();
        
    	return view(' main.Modulo1.AprobacionVisado.Mostrar')
    													->with('aprovisa', $lista)
    													->with('progra', $progra);
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
