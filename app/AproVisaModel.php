<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AproVisaModel extends Model
{
    //
    protected $table = 'Apro_Visa';
	protected $fillable = ['id','SubPartida','Proveedor','Ofi_Presu','Area_contratacion', 'Comentario'];
}
