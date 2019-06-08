<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaxiOpcionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('maxi_opcions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('idmaxiapuesta');
			$table->string('descripcion');
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
		Schema::drop('maxi_opcions');
	}

}
