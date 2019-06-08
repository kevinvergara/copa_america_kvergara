<?php

class MaxiapuestasController extends \BaseController {

	/**
	 * Display a listing of maxiapuestas
	 *
	 * @return Response
	 */
	public function index()
	{
		$maxiapuestas = Maxiapuestum::all();

		return View::make('maxiapuestas.index', compact('maxiapuestas'));
	}

	/**
	 * Show the form for creating a new maxiapuesta
	 *
	 * @return Response
	 */
	public function create()
	{	
		$perfiles = array_column($_SESSION['DATA_USER']["perfiles"],"fkid_perfil");

        if(in_array(18,$perfiles)){
			return View::make('maxiapuestas.create');
		}

		return Redirect::to('home/index');

		
	}

	/**
	 * Store a newly created maxiapuesta in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Maxiapuestum::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Maxiapuestum::create($data);

		return Redirect::route('maxiapuestas.index');
	}

	/**
	 * Display the specified maxiapuesta.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$maxiapuesta = Maxiapuestum::findOrFail($id);

		return View::make('maxiapuestas.show', compact('maxiapuesta'));
	}

	/**
	 * Show the form for editing the specified maxiapuesta.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$maxiapuesta = Maxiapuestum::find($id);

		return View::make('maxiapuestas.edit', compact('maxiapuesta'));
	}

	/**
	 * Update the specified maxiapuesta in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$maxiapuesta = Maxiapuestum::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Maxiapuestum::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$maxiapuesta->update($data);

		return Redirect::route('maxiapuestas.create');
	}


}
