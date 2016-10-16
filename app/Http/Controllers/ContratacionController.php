<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
/**/
use App\AnalistaModel;
use App\EstatusModel;
use App\ProveedorModel;
use App\ContratacionModel;
use App\PedidoModel;
use App\AdjudicadoModel;

class ContratacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Contratacion = new ContratacionModel;
        $Contratacion = ContratacionModel::all();
		
        return view('main.Modulo2.Contrataciones.Lista')
								->with('contrato', $Contratacion);
    }
	
	public function Load()
    {
        //
        $Analista = new AnalistaModel;
        $Analista = AnalistaModel::all();
        
		$Estatus = new EstatusModel;
        $Estatus = EstatusModel::all();
		
		$Proveedor = new ProveedorModel;
		$Proveedor = ProveedorModel::all();
		
        return view('main.Modulo2.Contrataciones.Agregar')
        			-> with('analista', $Analista)
					-> with('estatus', $Estatus)
					-> with('proveedor', $Proveedor);
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
        $Analista = AnalistaModel::where('Nombre', $request->Analista)->first();
		
		$Proveedor = new ProveedorModel;
		$Proveedor = ProveedorModel::where('Nombre', $request->Cod_Proveedor)->first();
  
        $Contrato = new ContratacionModel;
        $Contrato->Codigo = $request->Identificacion;
		$Contrato->Recibo = $request->Recibo;
		$Contrato->Analista = $Analista->Identificacion;
		$Contrato->Tramite = $request->Cod_Estatus;
		$Contrato->Apertura = $request->Apertura;
		$Contrato->Cod_Proveedor = $Proveedor->Identificacion;
        $Contrato->save();
		
		/**/
		$Adjudicado = new AdjudicadoModel;
		$Adjudicado->Codigo = $request->Identificacion;
		$Adjudicado->Monto = $request->Adjudicado_Monto;
		$Adjudicado->Diferencia = $request->Adjudicado_Diferencia;
		$Adjudicado->save();
		/**/
		$Pedido = new PedidoModel;
		$Pedido->Numero = $request->Pedido_Numero;
		$Pedido->Total = $request->Pedido_Fecha;
		$Pedido->Fecha = $request->Pedido_Monto;
		$Pedido->save();
		
		return redirect()->route('MCJD.Modulo2.Contratacion.index');
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
        $Analista = new AnalistaModel;
        $Analista = AnalistaModel::all();
        
		$Estatus = new EstatusModel;
        $Estatus = EstatusModel::all();
		
		$Proveedor = new ProveedorModel;
		$Proveedor = ProveedorModel::all();
		
        $Contrato = new ContratacionModel;
        $Contrato = ContratacionModel::where('id',$id)->first();
		
		return view('main.Modulo2.Contrataciones.Modificar')
											->with('Contrato', $Contrato)
											-> with('analista', $Analista)
											-> with('estatus', $Estatus)
											-> with('proveedor', $Proveedor);
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
        $record = new ContratacionModel;
        $record = ContratacionModel::where('Codigo', $request->Identificacion)->first();
		
		$analista = ContratacionModel::find($record->id);
		
		$analista->fill($request->all());
		
		$analista->save();
		
        return redirect()->route('MCJD.Contrataciones.index');
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
        
		ContratacionModel::where('index', $id)->delete();
        
		return redirect()->route('MCJD.Contratacion.index');

    }
}
