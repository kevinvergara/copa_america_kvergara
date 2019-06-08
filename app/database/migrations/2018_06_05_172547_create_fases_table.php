<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion');
			$table->date('fecha_inicio');
			$table->date('fecha_termino');
			$table->boolean('activo')->default(1);
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
		Schema::drop('fases');
	}

}
