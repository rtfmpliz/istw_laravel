<?php

class BagiansController extends \BaseController {

	/**
	 * Display a listing of bagians
	 *
	 * @return Response
	 */
 public function index()
 {
 if(Datatable::shouldHandle())
 {
 return Datatable::collection(Bagian::all(array('id','name')))
 ->showColumns('id', 'name')
 ->addColumn('', function ($model) {
 return 'edit | hapus';
 })
 ->searchColumns('name')
 ->orderColumns('name')
 ->make();
 }
 return View::make('bagians.index')->withTitle('Bagian');
 }


	/**
	 * Show the form for creating a new bagian
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('bagians.create')->withTitle('Tambah Bagian');
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
 $bagian = Bagian::create($data);
 return Redirect::route('admin.bagians.index')->with("successMessage", "Berhasil menyi\
 mpan $bagian->name ");
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
