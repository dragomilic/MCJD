<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\RevReqModel;
use App\ProgramaModel;

class RevReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('main.Modulo1.RevisionReq.Agregar');
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
    	 
    	return view(' main.Modulo1.RevisionReq.Agregar')
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
        $RevReq = new RevReqModel;
		
		$RevReq->SubPartida = $id;
		$RevReq->Analista = $request->Analista;
		$RevReq->Traslado = $request->Traslado;
		$RevReq->Estado = $request->Estado;
		$RevReq->Tramite = $request->Tramite;
		$RevReq->Observaciones = $request->Observaciones;
		$RevReq->Comentario = $request->Comentario;
		
        $RevReq->save();
		
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
    	
        $rev_req = new RevReqModel;
		$rev_req = RevReqModel::where('SubPartida',$id)->get();
		
		return view('main.Modulo1.RevisionReq.Mostrar')
											-> with('rev_req', $rev_req)
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
