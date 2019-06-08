<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddColumnsToMaxiapuestas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('maxiapuestas', function(Blueprint $table)
		{
			$table->integer('idelegido_resultado')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('maxiapuestas', function(Blueprint $table)
		{
			$table->dropColumn('idelegido_resultado');
		});
	}

}
