<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ImagenesPaisesTable extends Seeder {

	public function run()
	{
		Pais::find(1)->update(array("url_imagen" => "imagenes_rusia_mundial/rusia.gif"));
		Pais::find(2)->update(array("url_imagen" => "imagenes_rusia_mundial/brasil.gif"));
		Pais::find(3)->update(array("url_imagen" => "imagenes_rusia_mundial/iran.gif"));
		Pais::find(4)->update(array("url_imagen" => "imagenes_rusia_mundial/japon.gif"));
		Pais::find(5)->update(array("url_imagen" => "imagenes_rusia_mundial/mexico.gif"));
		Pais::find(6)->update(array("url_imagen" => "imagenes_rusia_mundial/belgica.gif"));
		Pais::find(7)->update(array("url_imagen" => "imagenes_rusia_mundial/coreadelsur.gif"));
		Pais::find(8)->update(array("url_imagen" => "imagenes_rusia_mundial/arabiasaudita.gif"));
		Pais::find(9)->update(array("url_imagen" => "imagenes_rusia_mundial/inglaterra.gif"));
		Pais::find(10)->update(array("url_imagen" => "imagenes_rusia_mundial/alemania.gif"));
		Pais::find(11)->update(array("url_imagen" => "imagenes_rusia_mundial/espaa.gif"));
		Pais::find(12)->update(array("url_imagen" => "imagenes_rusia_mundial/nigeria.gif"));
		Pais::find(13)->update(array("url_imagen" => "imagenes_rusia_mundial/costarica.gif"));
		Pais::find(14)->update(array("url_imagen" => "imagenes_rusia_mundial/egipto.gif"));
		Pais::find(15)->update(array("url_imagen" => "imagenes_rusia_mundial/polonia.gif"));
		Pais::find(16)->update(array("url_imagen" => "imagenes_rusia_mundial/serbia.gif"));
		Pais::find(17)->update(array("url_imagen" => "imagenes_rusia_mundial/islandia.gif"));
		Pais::find(18)->update(array("url_imagen" => "imagenes_rusia_mundial/francia.gif"));
		Pais::find(19)->update(array("url_imagen" => "imagenes_rusia_mundial/portugal.gif"));
		Pais::find(20)->update(array("url_imagen" => "imagenes_rusia_mundial/uruguay.gif"));
		Pais::find(21)->update(array("url_imagen" => "imagenes_rusia_mundial/colombia.gif"));
		Pais::find(22)->update(array("url_imagen" => "imagenes_rusia_mundial/argentina.gif"));
		Pais::find(23)->update(array("url_imagen" => "imagenes_rusia_mundial/panama.gif"));
		Pais::find(24)->update(array("url_imagen" => "imagenes_rusia_mundial/senegal.gif"));
		Pais::find(25)->update(array("url_imagen" => "imagenes_rusia_mundial/marruecos.gif"));
		Pais::find(26)->update(array("url_imagen" => "imagenes_rusia_mundial/tunez.gif"));
		Pais::find(27)->update(array("url_imagen" => "imagenes_rusia_mundial/suiza.gif"));
		Pais::find(28)->update(array("url_imagen" => "imagenes_rusia_mundial/croacia.gif"));
		Pais::find(29)->update(array("url_imagen" => "imagenes_rusia_mundial/suecia.gif"));
		Pais::find(30)->update(array("url_imagen" => "imagenes_rusia_mundial/dinamarca.gif"));
		Pais::find(31)->update(array("url_imagen" => "imagenes_rusia_mundial/australia.gif"));
		Pais::find(32)->update(array("url_imagen" => "imagenes_rusia_mundial/peru.gif"));

	}

}