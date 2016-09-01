<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstatusModel extends Model
{
    //
    protected $table = 'Estatus';
	protected $fillable = ['Codigo','Estado','Motivo'];
    
}
