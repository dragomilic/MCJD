<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Estatus', function(Blueprint $table){
        	$table->increments('id');
			$table->integer('Codigo');
			$table->text('Estado')->nullable();
			$table->text('Motivo')->nullable();
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
        Schema::drop('Estatus');
    }
}
