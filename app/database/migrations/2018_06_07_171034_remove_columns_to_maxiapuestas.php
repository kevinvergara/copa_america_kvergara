<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RemoveColumnsToMaxiapuestas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('maxiapuestas', function(Blueprint $table)
		{
			$table->dropColumn('factor');
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
			$table->decimal('factor');
		});
	}

}
