<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PaisTableSeeder extends Seeder {

	public function run()
	{
		Pais::create([
			"nombre" => "Argentina",
			"url_imagen" => "imagenes_rusia_mundial/copa_america/argentina.png",
			"grupo" => "B"
		]);
		Pais::create([
			"nombre" => "Catar",
			"url_imagen" => "imagenes_rusia_mundial/copa_america/catar.png",
			"grupo" => "B"
		]);
		Pais::create([
			"nombre" => "Ecuador",
			"url_imagen" => "imagenes_rusia_mundial/copa_america/ecuador.png",
			"grupo" => "C"
		]);
		Pais::create([
			"nombre" => "Perú",
			"url_imagen" => "imagenes_rusia_mundial/copa_america/peru.png",
			"grupo" => "A"
		]);
		Pais::create([
			"nombre" => "Bolivia",
			"url_imagen" => "imagenes_rusia_mundial/copa_america/bolivia.png",
			"grupo" => "A"
		]);
		Pais::create([
			"nombre" => "Chile",
			"url_imagen" => "imagenes_rusia_mundial/copa_america/chile.png",
			"grupo" => "C"
		]);
		Pais::create([
			"nombre" => "Japón",
			"url_imagen" => "imagenes_rusia_mundial/copa_america/japon.png",
			"grupo" => "C"
		]);
		Pais::create([
			"nombre" => "Uruguay",
			"url_imagen" => "imagenes_rusia_mundial/copa_america/uruguay.png",
			"grupo" => "C"
		]);
		Pais::create([
			"nombre" => "Brasil",
			"url_imagen" => "imagenes_rusia_mundial/copa_america/brasil.png",
			"grupo" => "A"
		]);
		Pais::create([
			"nombre" => "Colombia",
			"url_imagen" => "imagenes_rusia_mundial/copa_america/colombia.png",
			"grupo" => "B"
		]);
		Pais::create([
			"nombre" => "Paraguay",
			"url_imagen" => "imagenes_rusia_mundial/copa_america/paraguay.png",
			"grupo" => "B"
		]);
		Pais::create([
			"nombre" => "Venezuela",
			"url_imagen" => "imagenes_rusia_mundial/copa_america/venezuela.png",
			"grupo" => "A"
		]);
	}

}