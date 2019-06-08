<?php

class PuntajesController extends \BaseController {

	/**
	 * Display a listing of puntajes
	 *
	 * @return Response
	 */
	public function index()
	{
		$id_usuarios = Sysuserperfilesmodel::where("fkid_perfil",19)->lists("fkid_usuario");

		$apostadores = Sysusermodel::whereIn("id",$id_usuarios)->get();

		return View::make('puntajes.index', compact('apostadores'));
	}

	/**
	 * Show the form for creating a new puntaje
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('puntajes.create');
	}

	/**
	 * Store a newly created puntaje in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Puntaje::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Puntaje::create($data);

		return Redirect::route('puntajes.index');
	}

	/**
	 * Display the specified puntaje.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$puntaje = Puntaje::findOrFail($id);

		return View::make('puntajes.show', compact('puntaje'));
	}

	/**
	 * Show the form for editing the specified puntaje.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$puntaje = Puntaje::find($id);

		return View::make('puntajes.edit', compact('puntaje'));
	}

	/**
	 * Update the specified puntaje in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$puntaje = Puntaje::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Puntaje::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$puntaje->update($data);

		return Redirect::route('puntajes.index');
	}

}
