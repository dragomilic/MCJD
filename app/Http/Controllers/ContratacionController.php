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
use App\ProgramaModel;

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
    	/**/
    	$Mensaje = null;
    	/**/
        $Contratacion = new ContratacionModel;
        $Contratacion = ContratacionModel::all();
		
        return view('main.Modulo2.Contrataciones.Lista')
								->with('contrato', $Contratacion)
								-> with('mensaje', $Mensaje);
    }
    
    public function Load($id)
    {
    	$progra = new ProgramaModel;
    	$progra->SubPartida = $id;
    	/**/
    	 
    	$Analista = new AnalistaModel;
    	$Analista = AnalistaModel::all();
    	 
    	$Estatus = new EstatusModel;
    	$Estatus = EstatusModel::all();
    	 
    	$Proveedor = new ProveedorModel;
    	$Proveedor = ProveedorModel::all();
    	 
    	return view('main.Modulo2.Contrataciones.Agregar')
											    	->with('progra', $progra)
											    	-> with('analista', $Analista)
											    	-> with('estatus', $Estatus)
											    	-> with('proveedor', $Proveedor);
    }
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
    	/**/
    	$Mensaje = null;
    	/**/
    	$progra = new ProgramaModel;
    	$progra->SubPartida = $id;
    	
    	/**/
    	$Contratacion = new ContratacionModel;
    	$Contratacion = ContratacionModel::where('SubPartida', $id)->get();
    	
    	return view(' main.Modulo2.Contrataciones.Lista')
    													->with('progra', $progra)
    													-> with('mensaje', $Mensaje)
    													->with('contrato', $Contratacion);
        
    }
    
    public function index2()
    {
    	//
    	/**/
	    $Mensaje = null;
	    /**/
	    $Programa = new ProgramaModel;
	    $Programa = ProgramaModel::all();
	    
	    return view('main.Modulo2.Contrataciones.Crear')
									    -> with('programa', $Programa)
									    -> with('mensaje', $Mensaje);
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
        
        $Analista = new AnalistaModel;
        $Analista = AnalistaModel::where('Nombre', $request->Analista)->first();
		
		$Proveedor = new ProveedorModel;
		$Proveedor = ProveedorModel::where('Nombre', $request->Cod_Proveedor)->first();
  
        $Contrato = new ContratacionModel;
        $Contrato->SubPartida = $id;
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
    public function show(Request $request)
    {
    	//
    	$Contrato = new ContratacionModel;
    	
    	if ($request->Columna == 'Codigo')
    	{
    		$Contrato = ContratacionModel::where('Codigo', $request->Busqueda)->get();
    	}
    	elseif ($request->Columna == 'SubPartida')
    	{
    		$Contrato = ContratacionModel::where('SubPartida', $request->Busqueda)->get();
    	}
    	else
    		{
    		//$Mensaje = 'Seleccion no valida';
    	}
    	
    	if (count($Contrato) == 0)
    	{
    		$Mensaje = 'Busqueda sin resultados';
    	}
    	else {
    		$Mensaje = null;
    	}
    	
    	return view('main.Modulo1.Contrataciones.Crear')
										    	-> with('contrato', $Contrato)
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
