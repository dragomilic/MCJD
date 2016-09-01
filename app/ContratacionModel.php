<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContratacionModel extends Model
{
    //
    protected $table = 'Contratacion';
	protected $fillable = ['Codigo','Recibo','Analista','Tramite','Apertura','Cod_Proveedor'];
}
