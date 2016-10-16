<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\EstatusModel;

class EstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Estados = new EstatusModel;
		$Estados = EstatusModel::all();
		
		return view('main.Modulo1.Estados.lista') -> with('estados',$Estados);
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
        $Estatus = new EstatusModel;
		
		$Estatus->Codigo = $request->Codigo;
		$Estatus->Estado = $request->Estado;
		$Estatus->Motivo = $request->Motivo;
		
        $Estatus->save();
		
		return redirect()->route('MCJD.Estatus.index');
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
        $Estatus = new EstatusModel;
        $Estatus = EstatusModel::where('id',$id)->first();
		
		return view('main.Modulo1.Estados.Modificar')->with('Estatus', $Estatus);
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
        $record = new EstatusModel;
        $record = EstatusModel::where('Codigo', $request->Codigo)->first();
		
		$analista = EstatusModel::find($record->id);
		
		$analista->fill($request->all());
		
		$analista->save();
		
        return redirect()->route('MCJD.Estatus.index');
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
        EstatusModel::where('Codigo', $id)->delete();
		
		return redirect()->route('MCJD.Estatus.index');
    }
}
