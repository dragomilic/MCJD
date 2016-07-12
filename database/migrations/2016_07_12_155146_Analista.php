<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Analista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Analista', function(Blueprint $table){
        	$table->increments('index');
			$table->text('Identificacion');
			$table->text('Nombre')->nullable();
			$table->text('PrimerApellido')->nullable();
			$table->text('SegundoApellido')->nullable();
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
        Schema::drop('Analista');
    }
}
