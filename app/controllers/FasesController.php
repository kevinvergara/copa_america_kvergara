<?php

class FasesController extends \BaseController {

	/**
	 * Display a listing of fases
	 *
	 * @return Response
	 */
	public function index()
	{
		$fases = Fase::all();

		return View::make('fases.index', compact('fases'));
	}

	/**
	 * Show the form for creating a new fase
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('fases.create');
	}

	/**
	 * Store a newly created fase in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Fase::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Fase::create($data);

		return Redirect::route('fases.index');
	}

	/**
	 * Display the specified fase.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$fase = Fase::findOrFail($id);

		return View::make('fases.show', compact('fase'));
	}

	/**
	 * Show the form for editing the specified fase.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$fase = Fase::find($id);

		return View::make('fases.edit', compact('fase'));
	}

	/**
	 * Update the specified fase in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$fase = Fase::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Fase::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$fase->update($data);

		return Redirect::route('fases.index');
	}

	/**
	 * Remove the specified fase from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Fase::destroy($id);

		return Redirect::route('fases.index');
	}

}
