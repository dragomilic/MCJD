<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Programas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	//
        Schema::create('programas', function(Blueprint $table){
        	$table->increments('id');
			$table->bigInteger('SubPartida')->nullable();
			$table->text('Solicitud')->nullable();
			$table->text('Obj_cont_soli')->nullable();
			$table->double('Monto',15,3)->nullable();
			$table->integer('PC')->nullable();
			$table->integer('Oficio_ini')->nullable();
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
        Schema::drop('programas');
    }
}
