<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReportesController extends Controller
{
    //
    public function EstadisticasInterventores()
    {
    	return view('main.Reportes.Rpt_EstaditicaInterventores');
    }
    
    public function PromedioContratacion()
    {
    	return view('main.Reportes.Rpt_ProdContratacion');
    }
    
    public function TiemposContrataciones()
    {
    	return view('main.Reportes.Rpt_TimeContra');
    }
}
