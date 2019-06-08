<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SysUserSeeder extends Seeder {

	public function run()
	{
		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "julioacosta@workmate.cl", "usuario_password" => crypt("11515685","workmate"), "usuario_nombre" => "JULIO RICARDO", "usuario_apellido" => "ACOSTA DELPINO", "usuario_email" => "julioacosta@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "JAgui046@contratistas.codelco.cl", "usuario_password" => crypt("12271926","workmate"), "usuario_nombre" => "JOSE OCTAVIO", "usuario_apellido" => "AGUILA GIANINI", "usuario_email" => "JAgui046@contratistas.codelco.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "bajoefectoo@hotmail.com", "usuario_password" => crypt("17554551","workmate"), "usuario_nombre" => "JUAN CARLOS", "usuario_apellido" => "AGUILERA GUTIERREZ", "usuario_email" => "bajoefectoo@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "alex_nocode@yahoo.com", "usuario_password" => crypt("13718290","workmate"), "usuario_nombre" => "ALEX ENRIQUE", "usuario_apellido" => "AGUILERA ORTIZ", "usuario_email" => "alex_nocode@yahoo.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "adolfoaguim@workmate.cl ", "usuario_password" => crypt("17677042","workmate"), "usuario_nombre" => "ADOLFO IGNACIO", "usuario_apellido" => "AGUIRRE MONTES", "usuario_email" => "adolfoaguim@workmate.cl ", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "dafnealfaro@workmate.cl ", "usuario_password" => crypt("16134651","workmate"), "usuario_nombre" => "DAFNE JOYCE", "usuario_apellido" => "ALFARO MONTERO", "usuario_email" => "dafnealfaro@workmate.cl ", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "mauricio.alfaro.zepeda@gmail.com", "usuario_password" => crypt("17493456","workmate"), "usuario_nombre" => "MAURICIO ENRIQUE", "usuario_apellido" => "ALFARO ZEPEDA", "usuario_email" => "mauricio.alfaro.zepeda@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "jaimealiaga@workmate.cl", "usuario_password" => crypt("18939500","workmate"), "usuario_nombre" => "JAIME ANTONIO", "usuario_apellido" => "ALIAGA NAVARRETE", "usuario_email" => "jaimealiaga@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "leonardoalonso@workmate.cl", "usuario_password" => crypt("11472054","workmate"), "usuario_nombre" => "LEONARDO ", "usuario_apellido" => "ALONSO MARAMBIO", "usuario_email" => "leonardoalonso@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "alejandroalvarez@workmate.cl", "usuario_password" => crypt("12950403","workmate"), "usuario_nombre" => "ALEJANDRO LUIS", "usuario_apellido" => "ALVAREZ MUÑOZ", "usuario_email" => "alejandroalvarez@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "patriciaalvina@workmate.cl", "usuario_password" => crypt("13180897","workmate"), "usuario_nombre" => "PATRICIA MACARENA", "usuario_apellido" => "ALVIÑA CAMPOS", "usuario_email" => "patriciaalvina@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "carlosaraya@workmate.cl", "usuario_password" => crypt("17440803","workmate"), "usuario_nombre" => "CARLOS EDUARDO", "usuario_apellido" => "ARAYA ARAYA", "usuario_email" => "carlosaraya@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "HAray028@contratistas.codelco.cl", "usuario_password" => crypt("9535921","workmate"), "usuario_nombre" => "HECTOR MANUEL", "usuario_apellido" => "ARAYA SOTO", "usuario_email" => "HAray028@contratistas.codelco.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "ricardo.araya.yanez.78@gmail.com", "usuario_password" => crypt("13537033","workmate"), "usuario_nombre" => "RICARDO ALBERTO", "usuario_apellido" => "ARAYA YAÑEZ", "usuario_email" => "ricardo.araya.yanez.78@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "beatrizardiles@workmate.cl", "usuario_password" => crypt("17245861","workmate"), "usuario_nombre" => "BEATRIZ VANESSA", "usuario_apellido" => "ARDILES MUÑOZ", "usuario_email" => "beatrizardiles@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "valeska.astorga.p@gmail.com", "usuario_password" => crypt("17113182","workmate"), "usuario_nombre" => "VALESKA VANESSA", "usuario_apellido" => "ASTORGA PASTENE", "usuario_email" => "valeska.astorga.p@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "victoravello@workmate.cl", "usuario_password" => crypt("17029150","workmate"), "usuario_nombre" => "VICTOR MANUEL", "usuario_apellido" => "AVELLO GUERRERO", "usuario_email" => "victoravello@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 18, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "CAvilas@contratistas.codelco.cl ", "usuario_password" => crypt("7455523","workmate"), "usuario_nombre" => "CARLOS DEL T.", "usuario_apellido" => "AVILA ESTAY", "usuario_email" => "CAvilas@contratistas.codelco.cl ", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "rbastiasmaureira@gmail.com", "usuario_password" => crypt("15451090","workmate"), "usuario_nombre" => "RODRIGO ALONSO", "usuario_apellido" => "BASTIAS MAUREIRA", "usuario_email" => "rbastiasmaureira@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "idaliobelmar@workmate.cl", "usuario_password" => crypt("17355785","workmate"), "usuario_nombre" => "IDALIO ANDRES", "usuario_apellido" => "BELMAR ARANCIBIA", "usuario_email" => "idaliobelmar@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "EDWARD.BERNA.G@GMAIL.COM", "usuario_password" => crypt("17370796","workmate"), "usuario_nombre" => "EDWARD JESUS ALEJANDRO", "usuario_apellido" => "BERNA GONZALEZ", "usuario_email" => "EDWARD.BERNA.G@GMAIL.COM", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "jbernalvillarroel@gmail.com", "usuario_password" => crypt("16437607","workmate"), "usuario_nombre" => "JUAN LUIS", "usuario_apellido" => "BERNAL VILLARROEL", "usuario_email" => "jbernalvillarroel@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "pablobonilla@workmate.cl", "usuario_password" => crypt("12437791","workmate"), "usuario_nombre" => "PABLO ANDRES", "usuario_apellido" => "BONILLA OJEDA", "usuario_email" => "pablobonilla@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "christianbowen@workmate.cl", "usuario_password" => crypt("12019482","workmate"), "usuario_nombre" => "CHRISTIAN ANTHONY", "usuario_apellido" => "BOWEN SOTO", "usuario_email" => "christianbowen@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "gustavobravopincheira@hotmail.com", "usuario_password" => crypt("14557419","workmate"), "usuario_nombre" => "GUSTAVO ADOLFO", "usuario_apellido" => "BRAVO PINCHEIRA", "usuario_email" => "gustavobravopincheira@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "andresbronstein@workmate.cl", "usuario_password" => crypt("10304821","workmate"), "usuario_nombre" => "ANDRES FERNANDO", "usuario_apellido" => "BRONSTEIN ALONSO", "usuario_email" => "andresbronstein@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "rojasrojasrodrigoevaristo@gmail.com ", "usuario_password" => crypt("11376308","workmate"), "usuario_nombre" => "ROBERTO EDUARDO", "usuario_apellido" => "CABRERA BRAVO", "usuario_email" => "rojasrojasrodrigoevaristo@gmail.com ", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "cabrerabravoyerko@gmail.com", "usuario_password" => crypt("13641666","workmate"), "usuario_nombre" => "YERKO ALVARO", "usuario_apellido" => "CABRERA BRAVO", "usuario_email" => "cabrerabravoyerko@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "dcacciuttolo@gmail.com ", "usuario_password" => crypt("15092874","workmate"), "usuario_nombre" => "DOLORES VERONICA", "usuario_apellido" => "CACCIUTTOLO PLAZA", "usuario_email" => "dcacciuttolo@gmail.com ", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "facujai4@gmail.com", "usuario_password" => crypt("12806988","workmate"), "usuario_nombre" => "JAIME ALFONSO", "usuario_apellido" => "CAMPUSANO CASTILLO", "usuario_email" => "facujai4@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "mariaisabelcanales@workmate.cl", "usuario_password" => crypt("13046372","workmate"), "usuario_nombre" => "MARIA ISABEL", "usuario_apellido" => "CANALES CARDENAS", "usuario_email" => "mariaisabelcanales@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "michaelcanessa@workmate.cl", "usuario_password" => crypt("16199242","workmate"), "usuario_nombre" => "MICHAEL STEVE", "usuario_apellido" => "CANESSA PAVEZ", "usuario_email" => "michaelcanessa@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "vcaris@gmail.com", "usuario_password" => crypt("13930473","workmate"), "usuario_nombre" => "VALERIA EVELYN", "usuario_apellido" => "CARIS BASTIAS", "usuario_email" => "vcaris@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "a_carrasco71@hotmail.com", "usuario_password" => crypt("11695322","workmate"), "usuario_nombre" => "ALDO ESTIP", "usuario_apellido" => "CARRASCO MENA", "usuario_email" => "a_carrasco71@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "ga_carrasco@hotmail.com", "usuario_password" => crypt("13249440","workmate"), "usuario_nombre" => "GONZALO ANDRES", "usuario_apellido" => "CARRASCO MENA", "usuario_email" => "ga_carrasco@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "constanzacartes@workmate.cl", "usuario_password" => crypt("16813220","workmate"), "usuario_nombre" => "CLARIBEL CONSTANZA", "usuario_apellido" => "CARTES GUAJARDO", "usuario_email" => "constanzacartes@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "maximocarvajal@workmate.cl", "usuario_password" => crypt("10255138","workmate"), "usuario_nombre" => "MAXIMO SEGUNDO", "usuario_apellido" => "CARVAJAL CARVAJAL", "usuario_email" => "maximocarvajal@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "jecasanoval89@gmail.com", "usuario_password" => crypt("17361993","workmate"), "usuario_nombre" => "JOSE EDGARDO", "usuario_apellido" => "CASANOVA LOPEZ", "usuario_email" => "jecasanoval89@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "juancastex@workmate.cl", "usuario_password" => crypt("12570460","workmate"), "usuario_nombre" => "JUAN LEONARDO", "usuario_apellido" => "CASTEX TIRADO", "usuario_email" => "juancastex@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "arnoldocastillo@workmate.cl", "usuario_password" => crypt("16258839","workmate"), "usuario_nombre" => "ARNOLDO CARLOS", "usuario_apellido" => "CASTILLO SILVA", "usuario_email" => "arnoldocastillo@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "cristiancastro@workmate.cl", "usuario_password" => crypt("15053161","workmate"), "usuario_nombre" => "CRISTIAN ALEJANDRO", "usuario_apellido" => "CASTRO CASTRO", "usuario_email" => "cristiancastro@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "jorge.castro@idma.cl ", "usuario_password" => crypt("16356218","workmate"), "usuario_nombre" => "JORGE LUIS", "usuario_apellido" => "CASTRO OPAZO", "usuario_email" => "jorge.castro@idma.cl ", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "isoledadcp@gmail.com", "usuario_password" => crypt("15878387","workmate"), "usuario_nombre" => "IVONNE SOLEDAD", "usuario_apellido" => "CAYUPAN PILQUIL", "usuario_email" => "isoledadcp@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "jose.ch.carrasco@gmail.com", "usuario_password" => crypt("11569302","workmate"), "usuario_nombre" => "JOSE AURELIO", "usuario_apellido" => "CHAVEZ CARRASCO", "usuario_email" => "jose.ch.carrasco@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "cisternas_rodrigo@yahoo.com", "usuario_password" => crypt("10996013","workmate"), "usuario_nombre" => "RODRIGO ANDRES", "usuario_apellido" => "CISTERNAS LEIVA", "usuario_email" => "cisternas_rodrigo@yahoo.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "claudiocollao@workmate.cl", "usuario_password" => crypt("12836168","workmate"), "usuario_nombre" => "CLAUDIO ", "usuario_apellido" => "COLLAO GOMEZ", "usuario_email" => "claudiocollao@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "juanlayne@hotmail.com", "usuario_password" => crypt("12018084","workmate"), "usuario_nombre" => "JUAN LUIS", "usuario_apellido" => "CONCHA MOLINA", "usuario_email" => "juanlayne@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "mauriciocontrerasp@hotmail.com", "usuario_password" => crypt("15558104","workmate"), "usuario_nombre" => "MAURICIO EDUARDO", "usuario_apellido" => "CONTRERAS PINO", "usuario_email" => "mauriciocontrerasp@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "abelcontrerasolis@hotmail.com", "usuario_password" => crypt("18488432","workmate"), "usuario_nombre" => "ABEL HERNAN", "usuario_apellido" => "CONTRERAS SOLIS", "usuario_email" => "abelcontrerasolis@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "estebancornejo@workmate.cl", "usuario_password" => crypt("17028469","workmate"), "usuario_nombre" => "ESTEBAN ANDRES", "usuario_apellido" => "CORNEJO MUÑOZ", "usuario_email" => "estebancornejo@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "claudio.ac.-@hotmail.com", "usuario_password" => crypt("17815544","workmate"), "usuario_nombre" => "CLAUDIO ANDRES", "usuario_apellido" => "CORREA ARANDA", "usuario_email" => "claudio.ac.-@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "taniacortes@workmate.cl", "usuario_password" => crypt("17434273","workmate"), "usuario_nombre" => "TANIA ANDREA", "usuario_apellido" => "CORTES CUEVAS", "usuario_email" => "taniacortes@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "claudiacortes@workmate.cl", "usuario_password" => crypt("10001374","workmate"), "usuario_nombre" => "CLAUDIA CORINA", "usuario_apellido" => "CORTES NAREA", "usuario_email" => "claudiacortes@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "juandelgado@workmate.cl", "usuario_password" => crypt("15091720","workmate"), "usuario_nombre" => "JUAN FRANCISCO", "usuario_apellido" => "DELGADO BASCUÑAN", "usuario_email" => "juandelgado@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "julio_diazcastro23@hotmail.com", "usuario_password" => crypt("17361526","workmate"), "usuario_nombre" => "JULIO CESAR", "usuario_apellido" => "DIAZ CASTRO", "usuario_email" => "julio_diazcastro23@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "claudiodiaz@workmate.cl", "usuario_password" => crypt("17957029","workmate"), "usuario_nombre" => "CLAUDIO EDUARDO", "usuario_apellido" => "DIAZ MIRANDA", "usuario_email" => "claudiodiaz@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "josediaz@workmate.cl", "usuario_password" => crypt("18020889","workmate"), "usuario_nombre" => "JOSE TOMAS", "usuario_apellido" => "DIAZ OROZCO", "usuario_email" => "josediaz@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "robeerto.cdp@gmail.com", "usuario_password" => crypt("18233544","workmate"), "usuario_nombre" => "ROBERTO CARLOS", "usuario_apellido" => "DIAZ PLAZA", "usuario_email" => "robeerto.cdp@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "adono005@contratistas.codelco.cl", "usuario_password" => crypt("13049457","workmate"), "usuario_nombre" => "ARIEL MARCELO", "usuario_apellido" => "DONOSO PASTEN", "usuario_email" => "adono005@contratistas.codelco.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "juanerrickson@workmate.cl", "usuario_password" => crypt("17007654","workmate"), "usuario_nombre" => "JUAN LUIS", "usuario_apellido" => "ERRICKSON VARGAS", "usuario_email" => "juanerrickson@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "yordanoescaff@workmate.cl", "usuario_password" => crypt("17010785","workmate"), "usuario_nombre" => "YORDANO ANTONIO", "usuario_apellido" => "ESCAFF VALENZUELA", "usuario_email" => "yordanoescaff@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "hectormanuele.hum@gmail.com", "usuario_password" => crypt("18183160","workmate"), "usuario_nombre" => "HECTOR MANUEL", "usuario_apellido" => "ESPINOZA TIRADO", "usuario_email" => "hectormanuele.hum@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "jaimefernandez@workmate.cl", "usuario_password" => crypt("8968649","workmate"), "usuario_nombre" => "JAIME ", "usuario_apellido" => "FERNANDEZ MALATESTA", "usuario_email" => "jaimefernandez@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "ferradaasesor@gmail.com", "usuario_password" => crypt("10200998","workmate"), "usuario_nombre" => "CRISTIAN DANIEL", "usuario_apellido" => "FERRADA ORELLANA", "usuario_email" => "ferradaasesor@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "frederickferreira30@gmail.com", "usuario_password" => crypt("15661121","workmate"), "usuario_nombre" => "FREDERICK YAMIR", "usuario_apellido" => "FERREIRA SALAZAR", "usuario_email" => "frederickferreira30@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "kevinnfsalazar@gmail.com", "usuario_password" => crypt("18415591","workmate"), "usuario_nombre" => "KEVIN NEIL", "usuario_apellido" => "FERREIRA SALAZAR", "usuario_email" => "kevinnfsalazar@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "mario.figueroa.ismay@outlook.com", "usuario_password" => crypt("13351789","workmate"), "usuario_nombre" => "MARIO ALEJANDRO", "usuario_apellido" => "FIGUEROA ISMAY", "usuario_email" => "mario.figueroa.ismay@outlook.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "paulafigueroa@workmate.cl", "usuario_password" => crypt("18355782","workmate"), "usuario_nombre" => "PAULA FRANCISCA", "usuario_apellido" => "FIGUEROA LEIVA", "usuario_email" => "paulafigueroa@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "cristianflores99@gmail.com", "usuario_password" => crypt("13478967","workmate"), "usuario_nombre" => "CRISTIAN RODRIGO", "usuario_apellido" => "FLORES CATALAN", "usuario_email" => "cristianflores99@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "hansfredes@workmate.cl", "usuario_password" => crypt("15870608","workmate"), "usuario_nombre" => "HANS SEBASTIAN", "usuario_apellido" => "FREDES GARCIA", "usuario_email" => "hansfredes@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "recepcion.corp@workmate.cl", "usuario_password" => crypt("17411769","workmate"), "usuario_nombre" => "NATALIA ANDREA", "usuario_apellido" => "FUENTES PEREZ", "usuario_email" => "recepcion.corp@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "paulinagallardo@workmate.cl", "usuario_password" => crypt("13670720","workmate"), "usuario_nombre" => "PAULINA ELENA", "usuario_apellido" => "GALLARDO SALINAS", "usuario_email" => "paulinagallardo@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "johnattan.gangas@live.com", "usuario_password" => crypt("16271103","workmate"), "usuario_nombre" => "JOHNATTAN ANTONIO", "usuario_apellido" => "GANGAS LAZO", "usuario_email" => "johnattan.gangas@live.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "roberto.ostyn@gmail.com", "usuario_password" => crypt("18231422","workmate"), "usuario_nombre" => "ROBERTO DAVID", "usuario_apellido" => "GOMEZ DONAIRE", "usuario_email" => "roberto.ostyn@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "MGome016@contratistas.codelco.cl ", "usuario_password" => crypt("12867958","workmate"), "usuario_nombre" => "MABEL ADRIANA", "usuario_apellido" => "GOMEZ SOTO", "usuario_email" => "MGome016@contratistas.codelco.cl ", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "soledadg0606@gmail.com", "usuario_password" => crypt("15293592","workmate"), "usuario_nombre" => "ELIZABETH SOLEDAD", "usuario_apellido" => "GONZALEZ GUERRA", "usuario_email" => "soledadg0606@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "leonardogonzalez@workmate.cl", "usuario_password" => crypt("13918715","workmate"), "usuario_nombre" => "LEONARDO ANDRES", "usuario_apellido" => "GONZALEZ LOPEZ", "usuario_email" => "leonardogonzalez@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "fernandogutierrezcortes@gmail.com", "usuario_password" => crypt("13009097","workmate"), "usuario_nombre" => "FERNANDO REINALDO", "usuario_apellido" => "GUTIERREZ CORTES", "usuario_email" => "fernandogutierrezcortes@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "adelciogutiduran@hotmail.com", "usuario_password" => crypt("8101508","workmate"), "usuario_nombre" => "ADELCIO ANTONIO", "usuario_apellido" => "GUTIERREZ DURAN", "usuario_email" => "adelciogutiduran@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "dantegutierrez@workmate.cl", "usuario_password" => crypt("9353136","workmate"), "usuario_nombre" => "DANTE ", "usuario_apellido" => "GUTIERREZ MONDINO", "usuario_email" => "dantegutierrez@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "marioenrique.g.t@gmail.com", "usuario_password" => crypt("8674907","workmate"), "usuario_nombre" => "MARIO ENRIQUE", "usuario_apellido" => "GUTIERREZ TARIFEÑO", "usuario_email" => "marioenrique.g.t@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "PGuzm013@contratistas.codelco.cl", "usuario_password" => crypt("15725420","workmate"), "usuario_nombre" => "PATRICIA ALEJANDRA", "usuario_apellido" => "GUZMAN HORMAZABAL", "usuario_email" => "PGuzm013@contratistas.codelco.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "hectorhernandez@workmate.cl", "usuario_password" => crypt("22007497","workmate"), "usuario_nombre" => "HECTOR ", "usuario_apellido" => "HERNANDEZ HERRERA", "usuario_email" => "hectorhernandez@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "hernanhidalgo@workmate.cl", "usuario_password" => crypt("8525695","workmate"), "usuario_nombre" => "HERNAN ENRIQUE", "usuario_apellido" => "HIDALGO GOMEZ", "usuario_email" => "hernanhidalgo@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "rafrilen@gmail.com", "usuario_password" => crypt("16770024","workmate"), "usuario_nombre" => "RICARDO ESTEBAN", "usuario_apellido" => "HORTA HERRERA", "usuario_email" => "rafrilen@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "paulahuerta@workmate.cl", "usuario_password" => crypt("17318553","workmate"), "usuario_nombre" => "PAULA SOLEDAD", "usuario_apellido" => "HUERTA ALBORNOZ", "usuario_email" => "paulahuerta@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "jaraochoa@gmail.com", "usuario_password" => crypt("15805887","workmate"), "usuario_nombre" => "JACQUELINE CAROLINA", "usuario_apellido" => "JARA OCHOA", "usuario_email" => "jaraochoa@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "axel.jara.s@gmail.com", "usuario_password" => crypt("18553845","workmate"), "usuario_nombre" => "AXEL ALEJANDRO", "usuario_apellido" => "JARA SANCHEZ", "usuario_email" => "axel.jara.s@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "ajeldes@live.cl", "usuario_password" => crypt("12451575","workmate"), "usuario_nombre" => "ALEX EDUARDO", "usuario_apellido" => "JELDES ESPINOZA", "usuario_email" => "ajeldes@live.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "pazjil@workmate.cl", "usuario_password" => crypt("18677450","workmate"), "usuario_nombre" => "PAZ VALENTINA", "usuario_apellido" => "JIL ARAYA", "usuario_email" => "pazjil@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "Alejandra_kemp@hotmail.com", "usuario_password" => crypt("18747685","workmate"), "usuario_nombre" => "ALEJANDRA ANDREA", "usuario_apellido" => "KEMP VARGAS", "usuario_email" => "Alejandra_kemp@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "paul.lalut@hotmail.com", "usuario_password" => crypt("14577272","workmate"), "usuario_nombre" => "PAUL FERNANDO", "usuario_apellido" => "LALUT PEREZ", "usuario_email" => "paul.lalut@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "Mlamarancibia@gmail.com", "usuario_password" => crypt("9052796","workmate"), "usuario_nombre" => "MARCO ANTONIO", "usuario_apellido" => "LAM ARANCIBIA", "usuario_email" => "Mlamarancibia@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "marialazo@workmate.cl", "usuario_password" => crypt("15312830","workmate"), "usuario_nombre" => "MARIA PAZ", "usuario_apellido" => "LAZO ARIAS", "usuario_email" => "marialazo@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "manuellecaros@workmate.cl", "usuario_password" => crypt("8313748","workmate"), "usuario_nombre" => "MANUEL HUMBERTO", "usuario_apellido" => "LECAROS OSORIO", "usuario_email" => "manuellecaros@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "Diegoescaff@gmail.com", "usuario_password" => crypt("17927046","workmate"), "usuario_nombre" => "DIEGO IGNACIO", "usuario_apellido" => "LEON ESCAFF", "usuario_email" => "Diegoescaff@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "maggicuekera@gmail.com", "usuario_password" => crypt("10852017","workmate"), "usuario_nombre" => "LUISA MARGARITA", "usuario_apellido" => "LOBOS SANDOVAL", "usuario_email" => "maggicuekera@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "raul.lopez.neira@gmail.com", "usuario_password" => crypt("17921384","workmate"), "usuario_nombre" => "RAUL ELIAKIM", "usuario_apellido" => "LOPEZ NEIRA", "usuario_email" => "raul.lopez.neira@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "rodrigoms_1976@hotmail.com", "usuario_password" => crypt("13108199","workmate"), "usuario_nombre" => "RODRIGO LISANDRO", "usuario_apellido" => "MACHUCA SOLAR", "usuario_email" => "rodrigoms_1976@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "otiliamarambio@workmate.cl", "usuario_password" => crypt("9457075","workmate"), "usuario_nombre" => "OTILIA DEL CARMEN", "usuario_apellido" => "MARAMBIO MOREIRA", "usuario_email" => "otiliamarambio@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "anitamarambio@workmate.cl", "usuario_password" => crypt("7313101","workmate"), "usuario_nombre" => "ANA JIMENA", "usuario_apellido" => "MARAMBIO REYNES", "usuario_email" => "anitamarambio@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "andreamarambio@workmate.cl", "usuario_password" => crypt("7313003","workmate"), "usuario_nombre" => "LUZ ANDREA", "usuario_apellido" => "MARAMBIO REYNES", "usuario_email" => "andreamarambio@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "mardones-rodrigo@hotmail.com", "usuario_password" => crypt("12865364","workmate"), "usuario_nombre" => "RODRIGO MAURICIO", "usuario_apellido" => "MARDONES CORONADO", "usuario_email" => "mardones-rodrigo@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "cristhopher23@hotmail.com", "usuario_password" => crypt("17528457","workmate"), "usuario_nombre" => "CRISTHOFER ALEXANDRO", "usuario_apellido" => "MARIN CARVAJAL", "usuario_email" => "cristhopher23@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "sebastianmartinez@workmate.cl", "usuario_password" => crypt("19054773","workmate"), "usuario_nombre" => "SEBASTIAN ESTEBAN", "usuario_apellido" => "MARTINEZ DONOSO", "usuario_email" => "sebastianmartinez@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "medelsergio.74@gmail.com", "usuario_password" => crypt("12609355","workmate"), "usuario_nombre" => "SERGIO CHRISTIAN", "usuario_apellido" => "MEDEL ROBLES", "usuario_email" => "medelsergio.74@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "joelmejias@workmate.cl", "usuario_password" => crypt("16904146","workmate"), "usuario_nombre" => "JOEL LEANDRO", "usuario_apellido" => "MEJIAS MORALES", "usuario_email" => "joelmejias@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "juanmelipillan@workmate.cl", "usuario_password" => crypt("13409201","workmate"), "usuario_nombre" => "JUAN RIGOBERTO", "usuario_apellido" => "MELIPILLAN NAHUEL", "usuario_email" => "juanmelipillan@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "nesmebri@hotmail.com", "usuario_password" => crypt("8203703","workmate"), "usuario_nombre" => "NESTOR ENRIQUE", "usuario_apellido" => "MENA BRIZUELA", "usuario_email" => "nesmebri@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "margaritamendez@workmate.cl", "usuario_password" => crypt("15820786","workmate"), "usuario_nombre" => "MARIA MARGARITA", "usuario_apellido" => "MENDEZ MARTINEZ", "usuario_email" => "margaritamendez@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "rhmezam@hotmail.com", "usuario_password" => crypt("13992563","workmate"), "usuario_nombre" => "RODRIGO HUMBERTO", "usuario_apellido" => "MEZA MEZA", "usuario_email" => "rhmezam@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "RMillagu@contratistas.codelco.cl", "usuario_password" => crypt("15668134","workmate"), "usuario_nombre" => "RAFAEL ANTONIO", "usuario_apellido" => "MILLAGUIR SANDOVAL", "usuario_email" => "RMillagu@contratistas.codelco.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "alejandromonroyrivera@outlook.cl", "usuario_password" => crypt("15691826","workmate"), "usuario_nombre" => "ALEJANDRO ANTONIO", "usuario_apellido" => "MONROY RIVERA", "usuario_email" => "alejandromonroyrivera@outlook.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "fernandomoraga@workmate.cl", "usuario_password" => crypt("10670713","workmate"), "usuario_nombre" => "FERNANDO ALEJANDRO", "usuario_apellido" => "MORAGA CANCINO", "usuario_email" => "fernandomoraga@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "marcelomoralesepulveda@hotmail.com", "usuario_password" => crypt("19322218","workmate"), "usuario_nombre" => "MARCELO IGNACIO", "usuario_apellido" => "MORALES SEPULVEDA", "usuario_email" => "marcelomoralesepulveda@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "soportevp@workmate.cl", "usuario_password" => crypt("15366304","workmate"), "usuario_nombre" => "FRANCISCO JAVIER", "usuario_apellido" => "MUÑOZ CASTRO", "usuario_email" => "soportevp@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "VMuno012@contratistas.codelco.cl", "usuario_password" => crypt("12578612","workmate"), "usuario_nombre" => "VICTOR HUGO", "usuario_apellido" => "MUÑOZ ESPINOZA", "usuario_email" => "VMuno012@contratistas.codelco.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "luismunoz@workmate.cl", "usuario_password" => crypt("13301449","workmate"), "usuario_nombre" => "LUIS ALEJANDRO", "usuario_apellido" => "MUÑOZ GONZALEZ", "usuario_email" => "luismunoz@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "juannavarrete@workmate.cl", "usuario_password" => crypt("10866239","workmate"), "usuario_nombre" => "JUAN DAVID", "usuario_apellido" => "NAVARRETE CRUZ", "usuario_email" => "juannavarrete@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "alvaron12@hotmail.com", "usuario_password" => crypt("15756986","workmate"), "usuario_nombre" => "ALVARO EDGARDO", "usuario_apellido" => "NAVARRETE RIQUELME", "usuario_email" => "alvaron12@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "luisnovoan214@gmail.com", "usuario_password" => crypt("7151227","workmate"), "usuario_nombre" => "LUIS HERNAN", "usuario_apellido" => "NOVOA NUÑEZ", "usuario_email" => "luisnovoan214@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "Nelsonivan87@gmail.com", "usuario_password" => crypt("16591845","workmate"), "usuario_nombre" => "NELSON IVAN", "usuario_apellido" => "NUÑEZ ISLA", "usuario_email" => "Nelsonivan87@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "patricionunez@workmate.cl", "usuario_password" => crypt("11953421","workmate"), "usuario_nombre" => "PATRICIO FERNANDO", "usuario_apellido" => "NUÑEZ PARRAS", "usuario_email" => "patricionunez@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "mloo@live.cl", "usuario_password" => crypt("8064182","workmate"), "usuario_nombre" => "MANUEL LUIS", "usuario_apellido" => "OLMEDO OLIVARES", "usuario_email" => "mloo@live.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "r.orellana01@gmail.com", "usuario_password" => crypt("15684964","workmate"), "usuario_nombre" => "RENE GILBERTO", "usuario_apellido" => "ORELLANA VALDIVIA", "usuario_email" => "r.orellana01@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "natalia.isabel123@gmail.com", "usuario_password" => crypt("15996123","workmate"), "usuario_nombre" => "NATALIA ISABEL", "usuario_apellido" => "OSORIO IBAÑEZ", "usuario_email" => "natalia.isabel123@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "hosorio@contratistas.codelco.cl ", "usuario_password" => crypt("9520466","workmate"), "usuario_nombre" => "HERNAN CLAUDIO", "usuario_apellido" => "OSORIO LOBOS", "usuario_email" => "hosorio@contratistas.codelco.cl ", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "cyp.proveedores@workmate.cl", "usuario_password" => crypt("14121535","workmate"), "usuario_nombre" => "KATHERINE SOLEDAD", "usuario_apellido" => "OSORIO SANCHEZ", "usuario_email" => "cyp.proveedores@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "marioossandon@workmate.cl", "usuario_password" => crypt("18183527","workmate"), "usuario_nombre" => "MARIO HERNAN", "usuario_apellido" => "OSSANDON ZUÑIGA", "usuario_email" => "marioossandon@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "ricardopalma@workmate.cl", "usuario_password" => crypt("13932804","workmate"), "usuario_nombre" => "RICARDO HERNAN", "usuario_apellido" => "PALMA PANGUI", "usuario_email" => "ricardopalma@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "carmenpalomino@workmate.cl", "usuario_password" => crypt("8773912","workmate"), "usuario_nombre" => "CARMEN SYLVIA MEYLIN", "usuario_apellido" => "PALOMINO TONG", "usuario_email" => "carmenpalomino@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "flor.paredes.bolbalan@gmail.com", "usuario_password" => crypt("8960244","workmate"), "usuario_nombre" => "FLOR ", "usuario_apellido" => "PAREDES BOLBALAN", "usuario_email" => "flor.paredes.bolbalan@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "a.pasten@hotmail.es", "usuario_password" => crypt("13208729","workmate"), "usuario_nombre" => "HERNALDO ALEXIS", "usuario_apellido" => "PASTEN ALARCON", "usuario_email" => "a.pasten@hotmail.es", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "c.pena070@gmail.com", "usuario_password" => crypt("11538421","workmate"), "usuario_nombre" => "CRISTHIAN LUIS", "usuario_apellido" => "PEÑA AGUIRRE", "usuario_email" => "c.pena070@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "giselaperozo@workmate.cl", "usuario_password" => crypt("26094411","workmate"), "usuario_nombre" => "CARMEN GISELA", "usuario_apellido" => "PEROZO SANDOVAL", "usuario_email" => "giselaperozo@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "hsec.corp@workmate.cl", "usuario_password" => crypt("17101745","workmate"), "usuario_nombre" => "PABLO ANTONIO", "usuario_apellido" => "PINO BARRIOS", "usuario_email" => "hsec.corp@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "oriel.pinones@gmail.com", "usuario_password" => crypt("7221304","workmate"), "usuario_nombre" => "ORIEL EUGENIO", "usuario_apellido" => "PIÑONES PIZARRO", "usuario_email" => "oriel.pinones@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "victorpizarro@workmate.cl", "usuario_password" => crypt("16081833","workmate"), "usuario_nombre" => "VICTOR MANUEL", "usuario_apellido" => "PIZARRO ALVARADO", "usuario_email" => "victorpizarro@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "jorge.pizarro.araya@hotmail.com", "usuario_password" => crypt("12085257","workmate"), "usuario_nombre" => "JORGE LUCIANO", "usuario_apellido" => "PIZARRO ARAYA", "usuario_email" => "jorge.pizarro.araya@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "CPiza019@contratistas.codelco.cl", "usuario_password" => crypt("12817178","workmate"), "usuario_nombre" => "CARLOS ALBERTO", "usuario_apellido" => "PIZARRO LAZCANO", "usuario_email" => "CPiza019@contratistas.codelco.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "apobletezamora@gmail.com", "usuario_password" => crypt("15026149","workmate"), "usuario_nombre" => "ALEJANDRO ANDRES", "usuario_apellido" => "POBLETE ZAMORA", "usuario_email" => "apobletezamora@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "rodrigoposada@workmate.cl", "usuario_password" => crypt("15363553","workmate"), "usuario_nombre" => "RODRIGO FERNANDO", "usuario_apellido" => "POSADA CORVALAN", "usuario_email" => "rodrigoposada@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "pascual.puchi@gmail.com", "usuario_password" => crypt("5898571","workmate"), "usuario_nombre" => "PASCUAL SEGUNDO", "usuario_apellido" => "PUCHI DEL RIO", "usuario_email" => "pascual.puchi@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "marioquintanilla@workmate.cl", "usuario_password" => crypt("13258703","workmate"), "usuario_nombre" => "MARIO ANTONIO", "usuario_apellido" => "QUINTANILLA TRONCOSO", "usuario_email" => "marioquintanilla@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "ferql76@gmail.com", "usuario_password" => crypt("13031661","workmate"), "usuario_nombre" => "FERNANDO ALCIDES", "usuario_apellido" => "QUIÑONES LILLO", "usuario_email" => "ferql76@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "orabuco@gmail.com", "usuario_password" => crypt("13979953","workmate"), "usuario_nombre" => "OMAR ENRIQUE", "usuario_apellido" => "RABUCO BUGUEÑO", "usuario_email" => "orabuco@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "patriciaramirez@workmate.cl", "usuario_password" => crypt("9013134","workmate"), "usuario_nombre" => "PATRICIA ROXANA", "usuario_apellido" => "RAMIREZ RAMIREZ", "usuario_email" => "patriciaramirez@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "Robertoalexis.ramirez@gmail.com", "usuario_password" => crypt("17434998","workmate"), "usuario_nombre" => "ROBERTO ALEXIS", "usuario_apellido" => "RAMIREZ RAMOS", "usuario_email" => "Robertoalexis.ramirez@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "patriciareyes@workmate.cl", "usuario_password" => crypt("17030764","workmate"), "usuario_nombre" => "PATRICIA YUSARA", "usuario_apellido" => "REYES NIETO", "usuario_email" => "patriciareyes@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "javier.rios.rojas@live.com", "usuario_password" => crypt("9055074","workmate"), "usuario_nombre" => "FRANCISCO JAVIER", "usuario_apellido" => "RIOS ROJAS", "usuario_email" => "javier.rios.rojas@live.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "rrll.cmdic@workmate.cl", "usuario_password" => crypt("14333043","workmate"), "usuario_nombre" => "CRISTIAN ALONSO", "usuario_apellido" => "RIQUELME REYES", "usuario_email" => "rrll.cmdic@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "nelson.riveros@live.com", "usuario_password" => crypt("15126586","workmate"), "usuario_nombre" => "NELSON FRANCISCO", "usuario_apellido" => "RIVEROS HERRERA", "usuario_email" => "nelson.riveros@live.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "alex.riveros22@hotmail.cl", "usuario_password" => crypt("6866364","workmate"), "usuario_nombre" => "ALEJANDRO ROBINSON", "usuario_apellido" => "RIVEROS ROMO", "usuario_email" => "alex.riveros22@hotmail.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "pedro.rodriguez.a@hotmail.com", "usuario_password" => crypt("10276114","workmate"), "usuario_nombre" => "PEDRO ANDRES", "usuario_apellido" => "RODRIGUEZ ARANGUIZ", "usuario_email" => "pedro.rodriguez.a@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "abrahamrodriguez@workmate.cl", "usuario_password" => crypt("17233426","workmate"), "usuario_nombre" => "ABRAHAM ", "usuario_apellido" => "RODRIGUEZ BORQUEZ", "usuario_email" => "abrahamrodriguez@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "rodrigogourdet@workmate.cl", "usuario_password" => crypt("17390452","workmate"), "usuario_nombre" => "JUAN RODRIGO", "usuario_apellido" => "RODRIGUEZ GOURDET", "usuario_email" => "rodrigogourdet@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "brunorodriguez@workmate.cl", "usuario_password" => crypt("15395063","workmate"), "usuario_nombre" => "BRUNO ALEJANDRO", "usuario_apellido" => "RODRIGUEZ VALDIVIESO", "usuario_email" => "brunorodriguez@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "borisrojas@workmate.cl", "usuario_password" => crypt("9818277","workmate"), "usuario_nombre" => "BORIS ", "usuario_apellido" => "ROJAS GAHONA", "usuario_email" => "borisrojas@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "dennisrojas@workmate.cl", "usuario_password" => crypt("14108815","workmate"), "usuario_nombre" => "DENNIS IVAN", "usuario_apellido" => "ROJAS VEGA", "usuario_email" => "dennisrojas@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "angeloromero@workmate.cl", "usuario_password" => crypt("15535337","workmate"), "usuario_nombre" => "ANGELO WILLIAM", "usuario_apellido" => "ROMERO PARRA", "usuario_email" => "angeloromero@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "abelignacio2496@gmail.com", "usuario_password" => crypt("19354140","workmate"), "usuario_nombre" => "ABEL IGNACIO", "usuario_apellido" => "ROSAS ATENAS", "usuario_email" => "abelignacio2496@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "MELKI15@HOTMAIL.COM", "usuario_password" => crypt("10186307","workmate"), "usuario_nombre" => "MELKI BENEDICTO", "usuario_apellido" => "SAAVEDRA CARVAJAL", "usuario_email" => "MELKI15@HOTMAIL.COM", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "Hernan.a.saavedra2017@gmail.com", "usuario_password" => crypt("16821630","workmate"), "usuario_nombre" => "HERNAN ALEXIS", "usuario_apellido" => "SAAVEDRA GUERRERO", "usuario_email" => "Hernan.a.saavedra2017@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "franci_saavedra@hotmail.com", "usuario_password" => crypt("15020173","workmate"), "usuario_nombre" => "FRANCISCA FABIOLA", "usuario_apellido" => "SAAVEDRA MOLINA", "usuario_email" => "franci_saavedra@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "wilsonsalvatierra@workmate.cl", "usuario_password" => crypt("12348608","workmate"), "usuario_nombre" => "WILSON DAVID", "usuario_apellido" => "SALVATIERRA FERNANDEZ", "usuario_email" => "wilsonsalvatierra@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "SANCHEZHINOJOSA@GMAIL.COM", "usuario_password" => crypt("16141460","workmate"), "usuario_nombre" => "JORGE SEBASTIAN", "usuario_apellido" => "SANCHEZ HINOJOSA", "usuario_email" => "SANCHEZHINOJOSA@GMAIL.COM", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "marielasanders@workmate.cl", "usuario_password" => crypt("14145068","workmate"), "usuario_nombre" => "MARIELA BEATRIZ", "usuario_apellido" => "SANDERS MAYA", "usuario_email" => "marielasanders@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "gabrielsantander@workmate.cl", "usuario_password" => crypt("11935557","workmate"), "usuario_nombre" => "GABRIEL DEL CARMEN", "usuario_apellido" => "SANTANDER RIVERA", "usuario_email" => "gabrielsantander@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "andres_seleme@hotmail.com", "usuario_password" => crypt("13863947","workmate"), "usuario_nombre" => "ANDRES NASIF", "usuario_apellido" => "SELEME PEZO", "usuario_email" => "andres_seleme@hotmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "gabrielasilva@workmate.cl", "usuario_password" => crypt("14109527","workmate"), "usuario_nombre" => "GABRIELA ANDREA", "usuario_apellido" => "SILVA MENZEL", "usuario_email" => "gabrielasilva@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "psotob.66@gmail.com", "usuario_password" => crypt("10351995","workmate"), "usuario_nombre" => "PATRICIO PABLO", "usuario_apellido" => "SOTO BARREDA", "usuario_email" => "psotob.66@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "h.soto.rey@gmail.com", "usuario_password" => crypt("9564625","workmate"), "usuario_nombre" => "HORACIO ANTONIO", "usuario_apellido" => "SOTO REY", "usuario_email" => "h.soto.rey@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "a.tamayo.web@gmail.com", "usuario_password" => crypt("18045248","workmate"), "usuario_nombre" => "ALEJANDRO ESTEBAN", "usuario_apellido" => "TAMAYO ECHAVARRIA", "usuario_email" => "a.tamayo.web@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "andreatapia@workmate.cl", "usuario_password" => crypt("15027847","workmate"), "usuario_nombre" => "ANDREA ALICIA", "usuario_apellido" => "TAPIA LICUIME", "usuario_email" => "andreatapia@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "alvarotolaba.cist@gmail.com", "usuario_password" => crypt("15925283","workmate"), "usuario_nombre" => "ALVARO ANGELO", "usuario_apellido" => "TOLABA CISTERNAS", "usuario_email" => "alvarotolaba.cist@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "hectortoledo@workmate.cl", "usuario_password" => crypt("17083071","workmate"), "usuario_nombre" => "HECTOR ALFREDO", "usuario_apellido" => "TOLEDO ACHARAN", "usuario_email" => "hectortoledo@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "p.torres.arq@gmail.com", "usuario_password" => crypt("15675001","workmate"), "usuario_nombre" => "PRISCILLA SOLANGE", "usuario_apellido" => "TORRES ESPINOZA", "usuario_email" => "p.torres.arq@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "h.torresy@gmail.com", "usuario_password" => crypt("9763957","workmate"), "usuario_nombre" => "HERMANN ALEJANDRO", "usuario_apellido" => "TORRES YAÑEZ", "usuario_email" => "h.torresy@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "troncosomarko@gmail.com", "usuario_password" => crypt("12894169","workmate"), "usuario_nombre" => "MARCO ANTONIO", "usuario_apellido" => "TRONCOSO VILLALOBOS", "usuario_email" => "troncosomarko@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "marcelourzua@workmate.cl", "usuario_password" => crypt("16749229","workmate"), "usuario_nombre" => "MARCELO ANDRES", "usuario_apellido" => "URZUA CADIZ", "usuario_email" => "marcelourzua@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "karinavaldebenito@workmate.cl", "usuario_password" => crypt("16399806","workmate"), "usuario_nombre" => "KARINA ALEJANDRA", "usuario_apellido" => "VALDEBENITO ALCOTA", "usuario_email" => "karinavaldebenito@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "hectorvaldes@workmate.cl", "usuario_password" => crypt("12600085","workmate"), "usuario_nombre" => "HECTOR MARCELO", "usuario_apellido" => "VALDES VIVAR", "usuario_email" => "hectorvaldes@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "jennyvaldiviam@gmail.com", "usuario_password" => crypt("14112055","workmate"), "usuario_nombre" => "JENNY CECILIA", "usuario_apellido" => "VALDIVIA MALLA", "usuario_email" => "jennyvaldiviam@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "mj.valenzuela.ramirez@gmail.com", "usuario_password" => crypt("16818744","workmate"), "usuario_nombre" => "MARIA JOSE", "usuario_apellido" => "VALENZUELA RAMIREZ", "usuario_email" => "mj.valenzuela.ramirez@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "rodrigovalladares@workmate.cl", "usuario_password" => crypt("16360083","workmate"), "usuario_nombre" => "RODRIGO ALEJANDRO", "usuario_apellido" => "VALLADARES GONZALEZ", "usuario_email" => "rodrigovalladares@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "fabiolavargas@workmate.cl", "usuario_password" => crypt("13539138","workmate"), "usuario_nombre" => "FABIOLA ANDREA", "usuario_apellido" => "VARGAS ALLENDE", "usuario_email" => "fabiolavargas@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "carito24vc5@gmail.com", "usuario_password" => crypt("17355910","workmate"), "usuario_nombre" => "CAROLINA ANDREA", "usuario_apellido" => "VARGAS CORONADO", "usuario_email" => "carito24vc5@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "AXELRODX@HOTMAIL.COM", "usuario_password" => crypt("15693204","workmate"), "usuario_nombre" => "ALEXIS RODRIGO", "usuario_apellido" => "VEAS ALFARO", "usuario_email" => "AXELRODX@HOTMAIL.COM", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "credencializacionzn@workmate.cl", "usuario_password" => crypt("14589939","workmate"), "usuario_nombre" => "MARIA ESMERALDA", "usuario_apellido" => "VEAS ARAYA", "usuario_email" => "credencializacionzn@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "ladyvega@workmate.cl", "usuario_password" => crypt("14347372","workmate"), "usuario_nombre" => "LADY YANETTE", "usuario_apellido" => "VEGA FLORES", "usuario_email" => "ladyvega@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "kevinvergara@workmate.cl", "usuario_password" => crypt("17643600","workmate"), "usuario_nombre" => "KEVIN ANDRES", "usuario_apellido" => "VERGARA MUÑOZ", "usuario_email" => "kevinvergara@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 18, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "ibarvilches@workmate.cl", "usuario_password" => crypt("16572751","workmate"), "usuario_nombre" => "IBAR ALEJANDRO", "usuario_apellido" => "VILCHES CURIHUENTRO", "usuario_email" => "ibarvilches@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "olivervillar@workmate.cl", "usuario_password" => crypt("15343961","workmate"), "usuario_nombre" => "OLIVER LAWRENCE", "usuario_apellido" => "VILLAR WYSS", "usuario_email" => "olivervillar@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "rodrigozerbi@workmate.cl", "usuario_password" => crypt("7023145","workmate"), "usuario_nombre" => "RODRIGO JORGE", "usuario_apellido" => "ZERBI FRIEDL", "usuario_email" => "rodrigozerbi@workmate.cl", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));
		//----------------------------------------------------------------------------------------------------------------------------

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "vasquezpincheira.raul@gmail.com", "usuario_password" => crypt("13502619","workmate"), "usuario_nombre" => "PATRICIO RAUL", "usuario_apellido" => "VASQUEZ  PINCHEIRA", "usuario_email" => "vasquezpincheira.raul@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

		$id_user = DB::table('sys_user')->insertGetId(array("usuario_user" => "johntapiacaceres@gmail.com", "usuario_password" => crypt("10415358","workmate"), "usuario_nombre" => "JOHN ELWIN", "usuario_apellido" => "TAPIA CACERES", "usuario_email" => "johntapiacaceres@gmail.com", "fkid_perfiles" => 0, "fkid_empresa" => 0, "fkid_persona" => 0, "deleted" => 0, "cambio_password" => 0, "date_upd_psw" => date("Y-m-d H:i:s")));
		DB::table('sys_userperfiles')->insertGetId(array("fkid_usuario" => $id_user, "fkid_perfil" => 19, "deleted" => 0));

	}

}