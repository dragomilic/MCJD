<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnalistaModel extends Model
{
    //
    protected $table = 'Analista';
	protected $fillable = ['id','Identificacion','Nombre','PrimerApellido','SegundoApellido'];
}
