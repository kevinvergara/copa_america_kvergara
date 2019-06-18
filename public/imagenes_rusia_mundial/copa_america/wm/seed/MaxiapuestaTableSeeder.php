<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MaxiapuestaTableSeeder extends Seeder {

	public function run()
	{
		Maxiapuestum::create([
			"descripcion" => "Primer Lugar"
		]);

		Maxiapuestum::create([
			"descripcion" => "Segundo Lugar"
		]);

		Maxiapuestum::create([
			"descripcion" => "Tercer Lugar"
		]);

		Maxiapuestum::create([
			"descripcion" => "Mejor Jugador - Balón de Oro"
		]);

		Maxiapuestum::create([
			"descripcion" => "Goleador - Bota de Oro"
		]);

		Maxiapuestum::create([
			"descripcion" => "Mejor Arquero - Guante de Oro"
		]);
	}

}