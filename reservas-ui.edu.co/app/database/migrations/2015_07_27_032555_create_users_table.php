<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	 /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
{
    Schema::create('usuarios', function($table) {
       

            $table->increments('id');
            $table->string('name_user', 100);
            $table->string('email', 100);
            $table->string('password', 100);
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
    Schema::drop('usuarios');
}




}
