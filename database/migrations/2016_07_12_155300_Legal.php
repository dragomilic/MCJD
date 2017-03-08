<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Legal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Legal', function(Blueprint $table){
        	$table->increments('id');
			$table->integer('SubPartida');
			$table->text('Envio')->nullable();
			$table->text('Recibido')->nullable();
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
        Schema::drop('Legal');
    }
}
