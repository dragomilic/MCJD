<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Pedido', function(Blueprint $table){
        	$table->increments('id');
			$table->bigInteger('Numero')->nullable();
			$table->text('Total')->nullable();
			$table->date('Fecha')->nullable();
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
        Schema::drop('Pedido');
    }
}
