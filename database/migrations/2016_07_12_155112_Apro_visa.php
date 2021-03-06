<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AproVisa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Apro_Visa', function(Blueprint $table){
        	$table->increments('id');
        	$table->text('SubPartida')->nullable();
			$table->Integer('Proveedor');
			$table->text('Ofi_Presu')->nullable();
			$table->text('Area_contratacion')->nullable();
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
        Schema::drop('Apro_Visa');
    }
}
