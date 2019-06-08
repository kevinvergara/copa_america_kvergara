<?php

class PartidosController extends \BaseController {

	/**
	 * Display a listing of partidos
	 *
	 * @return Response
	 */
	public function index()
	{
		$partidos = Partido::orderBy("fechahora_partido","ASC")->get();

		return View::make('partidos.index', compact('partidos'));
	}

	/**
	 * Show the form for creating a new partido
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('partidos.create');
	}

	/**
	 * Store a newly created partido in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Partido::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Partido::create($data);

		return Redirect::route('partidos.index');
	}

	/**
	 * Display the specified partido.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$partido = Partido::findOrFail($id);

		return View::make('partidos.show', compact('partido'));
	}

	/**
	 * Show the form for editing the specified partido.
	 *
	 * @param  int  $id
	 * @return Response
	 */


	/**
	 * Update the specified partido in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$partido = Partido::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Partido::$rules);

		if ($validator->fails())
		{
			return Redirect::back();
		}

		$partido->update($data);

		if($this->calcularPuntaje($id)){
			log::info(".........puntajes generados de forma correcta...........");
		}else{
			log::info(".........hubo problemas al generar los puntajes.........");
		}

		$partidos = Partido::orderBy("fechahora_partido","ASC")->get();

		return View::make('partidos.edit', compact('partidos'));
	}

	public function resultado()
	{
		$data = Input::all();

		Partido::create($data);

		return Redirect::route('partidos.index');
	}

	public function ingreso()
	{
		$perfiles = array_column($_SESSION['DATA_USER']["perfiles"],"fkid_perfil");

        if(in_array(18,$perfiles)){

			$partidos = Partido::orderBy("fechahora_partido","ASC")->get();
			return View::make('partidos.edit', compact('partidos'));
		}

		return Redirect::to('home/index');
	}

	public function calcularPuntaje($id_partido){
		/*
		base: 1
		acertar (gano, empato): 2
		resultado: 4
		*/
		$partido = Partido::find($id_partido);
		//local empate visita
		$resultado = -1;
		
		if(!is_null($partido->res_local) && !is_null($partido->res_visita)){
			if($partido->res_local > $partido->res_visita){
				$resultado = 0;//"GANA LOCAL";
			}else if($partido->res_local < $partido->res_visita){
				$resultado = 1;//"GANA VISITA";
			}else if($partido->res_local == $partido->res_visita){
				$resultado = 2;//"EMPATE";
			}
		}

		if($resultado != -1){
			$apuestas = Apuesta::where("idpartido",$id_partido)->get();

			foreach ($apuestas as $key => $apuesta) {
				$puntaje = 1;
				$bono = 0;

				$resultado_aux = -1;
				//LOCAL EMPATE visita
				if(!is_null($apuesta->gol_local) && !is_null($apuesta->gol_visita)){
					if($apuesta->gol_local > $apuesta->gol_visita){
						$resultado_aux = 0;//"GANA LOCAL";
					}else if($apuesta->gol_local < $apuesta->gol_visita){
						$resultado_aux = 1;//"GANA VISITA";
					}else if($apuesta->gol_local == $apuesta->gol_visita){
						$resultado_aux = 2;//"EMPATE";
					}
				}
				//puntos acierto
				if($resultado_aux == $resultado){
					$puntaje = 2;
				}
				//bono acierto goles
				if($apuesta->gol_local == $partido->res_local && $apuesta->gol_visita == $partido->res_visita){
					$bono = 2;
				}
				$puntaje_nuevo = Puntaje::where("idapuesta",$apuesta->id)->first();
				if(!isset($puntaje_nuevo->id)){
					$puntaje_nuevo = new Puntaje();
					$puntaje_nuevo->created_at = date("Y-m-d H:i:s");
				}
				$puntaje_nuevo->idapuesta = $apuesta->id;
				$puntaje_nuevo->puntaje = $puntaje;
				$puntaje_nuevo->bono = $bono;
				$puntaje_nuevo->updated_at = date("Y-m-d H:i:s");

				$puntaje_nuevo->save();
			}
			return true;
		}else{
			return false;
		}
	}
}
