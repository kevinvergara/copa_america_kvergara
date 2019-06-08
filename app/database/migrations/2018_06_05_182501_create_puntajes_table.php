<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePuntajesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('puntajes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('idapuesta');
			$table->integer('puntaje');
			$table->integer('bono');
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
		Schema::drop('puntajes');
	}

}
