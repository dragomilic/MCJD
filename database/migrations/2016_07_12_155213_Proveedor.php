<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Proveedor', function(Blueprint $table){
        	$table->increments('id');
			$table->bigInteger('Identificacion');
			$table->text('Nombre');
			$table->text('Direccion')->nullable();
			$table->double('Telefono')->nullable();
			$table->integer('fax')->nullable();
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
        Schema::drop('Proveedor');
    }
}
