<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContratacionModel extends Model
{
    //
    protected $table = 'Contratacion';
	protected $fillable = ['id','SubPartida','Recibo','Analista','Tramite','Apertura','Cod_Proveedor', 'Comentario'];
}
