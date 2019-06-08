<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApuestasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apuestas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('iduser');
			$table->integer('gol_local');
			$table->integer('gol_visita');
			$table->integer('idpartido');
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
		Schema::drop('apuestas');
	}

}
