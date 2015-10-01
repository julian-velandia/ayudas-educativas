<?php

use Illuminate\Database\Migrations\Migration;

class CreateEquipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
   Schema::create('equipo', function($table) {
       

            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('imagen', 100);
            $table->string('descripcion', 100);
            $table->integer('cantidad');
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
		
       Schema::drop('equipo');

	}

}