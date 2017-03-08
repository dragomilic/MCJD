<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoModel extends Model
{
    //
    protected $table = 'Pedido';
	protected $fillable = ['id','Numero','Total','Fecha', 'Comentario'];
}
