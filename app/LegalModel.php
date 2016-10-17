<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalModel extends Model
{
    //
	protected $table = 'Legal';
	protected $fillable = ['id','SubPartida','Envio','Recibido'];
}
