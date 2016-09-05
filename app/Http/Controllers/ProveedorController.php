<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
/**/
use App\ProveedorModel;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Proveedor = new ProveedorModel;
		$Proveedor = ProveedorModel::all();
        
		return view('main.proveedor.Lista') -> with('proveedor', $Proveedor);
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
        $Proveedor = new ProveedorModel;
		
		$Proveedor->Identificacion = $request->Identificacion;
		$Proveedor->Nombre = $request->Nombre;
		$Proveedor->Direccion = $request->Direccion;
		$Proveedor->Telefono = $request->Telefono;
		$Proveedor->fax = $request->Fax;
		
        $Proveedor->save();
		
		return redirect()->route('MCJD.Proveedor.index');
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
        ProveedorModel::where('Identificacion', $id)->delete();
		
		return redirect()->route('MCJD.Proveedor.index');
    }
}
