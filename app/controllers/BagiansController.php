<?php

class BagiansController extends \BaseController {

	/**
	 * Display a listing of bagians
	 *
	 * @return Response
	 */
	public function index()
	{
		$bagians = Bagian::all();

		return View::make('bagians.index', compact('bagians'));
	}

	/**
	 * Show the form for creating a new bagian
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('bagians.create');
	}

	/**
	 * Store a newly created bagian in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Bagian::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Bagian::create($data);

		return Redirect::route('bagians.index');
	}

	/**
	 * Display the specified bagian.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$bagian = Bagian::findOrFail($id);

		return View::make('bagians.show', compact('bagian'));
	}

	/**
	 * Show the form for editing the specified bagian.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$bagian = Bagian::find($id);

		return View::make('bagians.edit', compact('bagian'));
	}

	/**
	 * Update the specified bagian in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$bagian = Bagian::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Bagian::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$bagian->update($data);

		return Redirect::route('bagians.index');
	}

	/**
	 * Remove the specified bagian from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Bagian::destroy($id);

		return Redirect::route('bagians.index');
	}

}
