<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstatusModel extends Model
{
    //
    protected $table = 'Estatus';
	protected $fillable = ['id','Codigo','Estado','Motivo', 'Comentario'];
    
}
