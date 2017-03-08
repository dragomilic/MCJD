<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Adjudicado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Adjudicado', function(Blueprint $table){
        	$table->increments('id');
			$table->integer('Codigo');
			$table->double('Monto',15,3)->nullable();
			$table->double('Diferencia',15,3)->nullable();
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
        Schema::drop('Adjudicado');
    }
}
