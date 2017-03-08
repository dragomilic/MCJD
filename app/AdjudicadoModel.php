<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdjudicadoModel extends Model
{
    //
    protected $table = 'Adjudicado';
	protected $fillable = ['id','Codigo','Monto','Diferencia', 'Comentario'];
}
