<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProveedorModel extends Model
{
    //
    protected $table = 'Proveedor';
	protected $fillable = ['id','Identificacion','Nombre','Direccion','Telefono','fax'];
}
