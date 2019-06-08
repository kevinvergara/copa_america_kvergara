<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class FasesTableSeeder extends Seeder {

	public function run()
	{
		Fase::create([
			"descripcion" => "Fase de Grupos",
			"fecha_inicio" => "2018-06-14",
			"fecha_termino" => "2018-06-28",
			"activo" => true,
		]);

		Fase::create([
			"descripcion" => "Octavos de Final",
			"fecha_inicio" => "2018-06-30",
			"fecha_termino" => "2018-07-03",
			"activo" => false,
		]);

		Fase::create([
			"descripcion" => "Cuartos de Final",
			"fecha_inicio" => "2018-07-06",
			"fecha_termino" => "2018-07-07",
			"activo" => false,
		]);

		Fase::create([
			"descripcion" => "Semi-final",
			"fecha_inicio" => "2018-07-10",
			"fecha_termino" => "2018-07-11",
			"activo" => false,
		]);

		Fase::create([
			"descripcion" => "Tercer lugar",
			"fecha_inicio" => "2018-07-14",
			"fecha_termino" => "2018-07-14",
			"activo" => false,
		]);

		Fase::create([
			"descripcion" => "Final",
			"fecha_inicio" => "2018-07-15",
			"fecha_termino" => "2018-07-15",
			"activo" => false,
		]);
	}

}