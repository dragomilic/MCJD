<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contratacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Contratacion', function(Blueprint $table){
        	$table->increments('id');
			$table->integer('Codigo');
			$table->text('Recibo')->nullable();
			$table->integer('Analista');
			$table->text('Tramite')->nullable();
			$table->date('Apertura')->nullable();
			$table->integer('Cod_Proveedor');
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('Contratacion');
    }
}
