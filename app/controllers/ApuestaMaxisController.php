<?php

class ApuestaMaxisController extends \BaseController {

	/**
	 * Display a listing of apuestamaxis
	 *
	 * @return Response
	 */
	public function index()
	{
		$apuestamaxis = Apuestamaxi::all();

		return View::make('apuestamaxis.index', compact('apuestamaxis'));
	}

	/**
	 * Show the form for creating a new apuestamaxi
	 *
	 * @return Response
	 */
	public function create($id)
	{
		$data = [];
		
		return View::make('apuestamaxis.create',$data);
	}

	/**
	 * Store a newly created apuestamaxi in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
		
		$validacionHora = $this->validarHora($data);

		$validator = Validator::make($data, Apuestamaxi::$rules);

		if ($validator->fails() || !$validacionHora)
		{
			return Redirect::back();
		}

		Apuestamaxi::create($data);

		return Redirect::route('apuestas.selectfase');
	}

	/**
	 * Display the specified apuestamaxi.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$apuestamaxi = Apuestamaxi::findOrFail($id);

		return View::make('apuestamaxis.show', compact('apuestamaxi'));
	}

	/**
	 * Show the form for editing the specified apuestamaxi.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$apuestamaxi = Apuestamaxi::find($id);

		return View::make('apuestamaxis.edit', compact('apuestamaxi'));
	}

	/**
	 * Update the specified apuestamaxi in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$data = Input::all();

		$apuestamaxi = Apuestamaxi::findOrFail($id);

		$validacionHora = $this->validarHora($data);

		$validator = Validator::make($data, Apuestamaxi::$rules);

		if ($validator->fails() || !$validacionHora)
		{
			return Redirect::back();
		}

		$apuestamaxi->update($data);

		return Redirect::route('apuestas.selectfase');
	}

	public function validarHora($inputs){
		if(strtotime(date('Y-m-d H:i:s')) < strtotime(Partido::orderBy('fechahora_partido','ASC')->first()->fechahora_partido)){
			return true;
		}else{
			return false;
		}
	}

}
