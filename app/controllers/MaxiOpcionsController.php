<?php

class MaxiOpcionsController extends \BaseController {

	/**
	 * Display a listing of maxiopcions
	 *
	 * @return Response
	 */
	public function index()
	{
		$maxiopcions = Maxiopcion::all();

		return View::make('maxiopcions.index', compact('maxiopcions'));
	}

	/**
	 * Show the form for creating a new maxiopcion
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('maxiopcions.create');
	}

	/**
	 * Store a newly created maxiopcion in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Maxiopcion::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Maxiopcion::create($data);

		return Redirect::route('maxiopcions.index');
	}

	/**
	 * Display the specified maxiopcion.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$maxiopcion = Maxiopcion::findOrFail($id);

		return View::make('maxiopcions.show', compact('maxiopcion'));
	}

	/**
	 * Show the form for editing the specified maxiopcion.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$maxiopcion = Maxiopcion::find($id);

		return View::make('maxiopcions.edit', compact('maxiopcion'));
	}

	/**
	 * Update the specified maxiopcion in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$maxiopcion = Maxiopcion::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Maxiopcion::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$maxiopcion->update($data);

		return Redirect::route('maxiopcions.index');
	}

	/**
	 * Remove the specified maxiopcion from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Maxiopcion::destroy($id);

		return Redirect::route('maxiopcions.index');
	}

}
