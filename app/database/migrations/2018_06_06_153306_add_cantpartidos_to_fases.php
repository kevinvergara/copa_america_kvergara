<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCantpartidosToFases extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fases', function(Blueprint $table)
		{
			$table->integer('cantpartidos');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fases', function(Blueprint $table)
		{
			$table->dropColumn('cantpartidos');
		});
	}

}
