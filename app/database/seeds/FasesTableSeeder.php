<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class FasesTableSeeder extends Seeder {

	public function run()
	{
		
		Fase::create([
			"descripcion" => "Fase de Grupos",
			"fecha_inicio" => "2019-06-14",
			"fecha_termino" => "2019-06-24",
			"activo" => true,
		]);

		Fase::create([
			"descripcion" => "Cuartos de Final",
			"fecha_inicio" => "2019-06-27",
			"fecha_termino" => "2019-06-29",
			"activo" => false,
		]);

		Fase::create([
			"descripcion" => "Semi-final",
			"fecha_inicio" => "2019-07-02",
			"fecha_termino" => "2019-07-03",
			"activo" => false,
		]);

		Fase::create([
			"descripcion" => "Tercer lugar",
			"fecha_inicio" => "2019-07-06",
			"fecha_termino" => "2019-07-06",
			"activo" => false,
		]);

		Fase::create([
			"descripcion" => "Final",
			"fecha_inicio" => "2019-07-07",
			"fecha_termino" => "2019-07-07",
			"activo" => false,
		]);
	}

}