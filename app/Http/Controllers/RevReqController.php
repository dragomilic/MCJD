<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\RevReqModel;

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
        $RevReq = new RevReqModel;
		
		$RevReq->Codigo = $request->Codigo;
		$RevReq->Analista = $request->Analista;
		$RevReq->Traslado = $request->Traslado;
		$RevReq->Estado = $request->Estado;
		$RevReq->Tramite = $request->Tramite;
		$RevReq->Observaciones = $request->Observaciones;
		
        $RevReq->save();
		
		return redirect()->route('MCJD.RevisionReq.index');
        
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
        $rev_req = new RevReqModel;
		$rev_req = RevReqModel::where('Codigo',$id)->first();
		
		return view('main.Modulo1.RevisionReq.Agregar') 
								-> with('rev_req', $rev_req);
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
