<?php

class ApuestasController extends \BaseController {

	/**
	 * Display a listing of apuestas
	 *
	 * @return Response
	 */
	public function index()
	{
		$perfiles = array_column($_SESSION['DATA_USER']["perfiles"],"fkid_perfil");

		$data = [];

        if(in_array(18,$perfiles)){
			$data["apuestas"] = Apuesta::all();
			$data["titulo"] = "Listado de Apuestas";
		}elseif(in_array(19,$perfiles)){
			$data["apuestas"] = Apuesta::where('iduser',$_SESSION['DATA_USER']["usuario"]->id)->orderBy('idpartido','ASC')->get();
			$data["titulo"] = "Mis Apuestas";
		}

		return View::make('apuestas.index', $data);
	}

	/**
	 * Show the form for creating a new apuesta
	 *
	 * @return Response
	 */
	public function create($id)
	{
		$id = Crypt::decrypt($id);
		$data = [];
		$data['fase'] = Fase::find($id);
		$data['partidos'] = Partido::where('idfase',$id)->orderBy('fechahora_partido','ASC')->get();
		return View::make('apuestas.create',$data);
	}

	/**
	 * Store a newly created apuesta in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();

		$validator = Validator::make($data, Apuesta::$rules);

		$validacionHora = $this->validarHora($data);
		$validacionRepetido = $this->validarRepetido($data);

		if ($validator->fails() || !$validacionHora || $validacionRepetido)
		{
			return Redirect::back();
		}

		$a = Apuesta::create($data);
		
		$id_fase = Crypt::encrypt(Partido::find($a->idpartido)->idfase);

		return Redirect::to("apuestas/create/".$id_fase."/");
	}

	/**
	 * Display the specified apuesta.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$apuesta = Apuesta::findOrFail($id);

		return View::make('apuestas.show', compact('apuesta'));
	}

	/**
	 * Show the form for editing the specified apuesta.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$apuesta = Apuesta::find($id);

		return View::make('apuestas.edit', compact('apuesta'));
	}

	/**
	 * Update the specified apuesta in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$data = Input::all();

		$validacionHora = $this->validarHora($data);

		$apuesta = Apuesta::findOrFail($id);

		$validator = Validator::make($data, Apuesta::$rules);

		if ($validator->fails() || !$validacionHora)
		{
			return Redirect::back();
		}

		$apuesta->update($data);

		$id_fase = Crypt::encrypt(Partido::find($apuesta->idpartido)->idfase);

		return Redirect::to("apuestas/create/".$id_fase."/");
	}

	public function selectfase(){
		$data = [];
		$data["fases"] = Fase::all();
		$data["maxiapuestas"] = Maxiapuestum::all();
		return View::make('apuestas.selectfase',$data);
	}

	public function validarHora($inputs){
		if(strtotime(date('Y-m-d H:i:s')) < strtotime(Partido::find($inputs["idpartido"])->fechahora_partido)){
			return true;
		}else{
			return false;
		}
	}

	public function validarRepetido($inputs){

		log::info($inputs);

		$existe_apuesta = Apuesta::where('iduser',$_SESSION['DATA_USER']["usuario"]->id)->where('idpartido',$inputs["idpartido"])->first();

		log::info($existe_apuesta);

		if($existe_apuesta){
			return true;
		}else{
			return false;
		}
	}

}
