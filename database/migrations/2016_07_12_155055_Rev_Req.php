<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RevReq extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Rev_req', function(Blueprint $table){
        	$table->increments('id');
        	$table->text('SubPartida')->nullable();
			$table->Integer('Analista');
			$table->text('Traslado')->nullable();
			$table->text('Estado')->nullable();
			$table->integer('Tramite')->nullable();
			$table->text('Observaciones')->nullable();
			$table->text('Comentario')->nullable();
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
        Schema::drop('Rev_req');
    }
}
