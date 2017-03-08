<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramaModel extends Model
{
    //
    protected $table = 'Programas';
	protected $fillable = ['id', 'Codigo', 'SubPartida','Solicitud','Obj_cont_soli','Monto','Oficio_ini','PC', 'Comentario'];
}
