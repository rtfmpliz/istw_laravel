<?php

class JabatansController extends \BaseController {

	/**
	 * Display a listing of jabatans
	 *
	 * @return Response
	 */
	public function index()
	{
		$jabatans = Jabatan::all();

		return View::make('jabatans.index', compact('jabatans'));
	}

	/**
	 * Show the form for creating a new jabatan
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('jabatans.create');
	}

	/**
	 * Store a newly created jabatan in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Jabatan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Jabatan::create($data);

		return Redirect::route('jabatans.index');
	}

	/**
	 * Display the specified jabatan.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$jabatan = Jabatan::findOrFail($id);

		return View::make('jabatans.show', compact('jabatan'));
	}

	/**
	 * Show the form for editing the specified jabatan.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$jabatan = Jabatan::find($id);

		return View::make('jabatans.edit', compact('jabatan'));
	}

	/**
	 * Update the specified jabatan in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$jabatan = Jabatan::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Jabatan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$jabatan->update($data);

		return Redirect::route('jabatans.index');
	}

	/**
	 * Remove the specified jabatan from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Jabatan::destroy($id);

		return Redirect::route('jabatans.index');
	}

}
