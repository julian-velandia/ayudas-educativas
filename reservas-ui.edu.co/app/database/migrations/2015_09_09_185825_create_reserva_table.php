<?php

use Illuminate\Database\Migrations\Migration;

class CreateReservaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('reserva', function($table) {
       

            $table->increments('id');
            $table->string('rs_equipo', 100);
            $table->integer('id_usuario');
            $table->string('rs_usuario', 100);
            $table->integer('rs_cantidad');
            $table->string('rs_observaciones', 200);
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
		
		Schema::drop('reserva');
	}

}