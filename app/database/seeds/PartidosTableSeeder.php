<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PartidosTableSeeder extends Seeder {

	public function run()
	{


		//grupo A
		Partido::create(["local" => 65 ,"visita" => 61, "idfase" => 7,"fechahora_partido" => "2019-06-14 20:30"]);
		Partido::create(["local" => 68 ,"visita" => 60, "idfase" => 7,"fechahora_partido" => "2019-06-15 15:00"]);
		Partido::create(["local" => 61 ,"visita" => 60, "idfase" => 7,"fechahora_partido" => "2019-06-18 17:30"]);
		Partido::create(["local" => 65 ,"visita" => 68, "idfase" => 7,"fechahora_partido" => "2019-06-18 20:30"]);
		Partido::create(["local" => 60 ,"visita" => 65, "idfase" => 7,"fechahora_partido" => "2019-06-22 15:00"]);
		Partido::create(["local" => 61 ,"visita" => 68, "idfase" => 7,"fechahora_partido" => "2019-06-22 15:00"]);

		//grupo B
		Partido::create(["local" => 57, "visita" => 66, "idfase" => 7,"fechahora_partido" => "2019-06-15 18:00"]);
		Partido::create(["local" => 67, "visita" => 58, "idfase" => 7,"fechahora_partido" => "2019-06-16 15:00"]);
		Partido::create(["local" => 66, "visita" => 58, "idfase" => 7,"fechahora_partido" => "2019-06-19 17:30"]);
		Partido::create(["local" => 57, "visita" => 67, "idfase" => 7,"fechahora_partido" => "2019-06-19 20:30"]);
		Partido::create(["local" => 58, "visita" => 57, "idfase" => 7,"fechahora_partido" => "2019-06-23 15:00"]);
		Partido::create(["local" => 66, "visita" => 67, "idfase" => 7,"fechahora_partido" => "2019-06-23 15:00"]);

		//grupo C
		Partido::create(["local" => 64, "visita" => 59, "idfase" => 7,"fechahora_partido" => "2019-06-16 18:00"]);
		Partido::create(["local" => 63, "visita" => 62, "idfase" => 7,"fechahora_partido" => "2019-06-17 19:00"]);
		Partido::create(["local" => 64, "visita" => 63, "idfase" => 7,"fechahora_partido" => "2019-06-20 19:00"]);
		Partido::create(["local" => 59, "visita" => 62, "idfase" => 7,"fechahora_partido" => "2019-06-21 19:00"]);
		Partido::create(["local" => 62, "visita" => 64, "idfase" => 7,"fechahora_partido" => "2019-06-24 19:00"]);
		Partido::create(["local" => 59, "visita" => 63, "idfase" => 7,"fechahora_partido" => "2019-06-24 19:00"]);
	}

}