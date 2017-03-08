<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RevReqModel extends Model
{
    //
    protected $table = 'Rev_req';
	protected $fillable = ['id','SubPartida','Analista','Traslado','Estado','Tramite','Observaciones', 'Comentario'];
}
