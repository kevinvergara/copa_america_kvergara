<?php

class PaisController extends \BaseController {

	/**
	 * Display a listing of pais
	 *
	 * @return Response
	 */
	public function index()
	{
		$pais = Pais::all();

		return View::make('pais.index', compact('pais'));
	}

	/**
	 * Show the form for creating a new pai
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pais.create');
	}

	/**
	 * Store a newly created pai in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Pais::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Pais::create($data);

		return Redirect::route('pais.index');
	}

	/**
	 * Display the specified pai.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pai = Pais::findOrFail($id);

		return View::make('pais.show', compact('pai'));
	}

	/**
	 * Show the form for editing the specified pai.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pai = Pais::find($id);

		return View::make('pais.edit', compact('pai'));
	}

	/**
	 * Update the specified pai in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$pai = Pais::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Pais::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$pai->update($data);

		return Redirect::route('pais.index');
	}

	/**
	 * Remove the specified pai from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Pais::destroy($id);

		return Redirect::route('pais.index');
	}

}
