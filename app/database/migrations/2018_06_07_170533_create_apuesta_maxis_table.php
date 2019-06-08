<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApuestaMaxisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apuesta_maxis', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('iduser');
			$table->integer('idmaxiapuesta');
			$table->integer('idelegido');
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
		Schema::drop('apuesta_maxis');
	}

}
