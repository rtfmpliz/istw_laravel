<?php

class JabatansController extends \BaseController {

	/**
	 * Display a listing of jabatans
	 *
	 * @return Response
	 */

 public function index()
 {
 if(Datatable::shouldHandle())
 {
 return Datatable::collection(Jabatan::all(array('id','name')))
 ->showColumns('id', 'name')
 ->addColumn('', function ($model) {
 return 'edit | hapus';
 })
 ->searchColumns('name')
 ->orderColumns('name')
 ->make();
 }
 return View::make('jabatans.index')->withTitle('jabatan');
 }

 
	/**
	 * Show the form for creating a new jabatan
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('jabatans.create')->withTitle('Tambah Jabatan');
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
 $jabatan = Jabatan::create($data);
 return Redirect::route('admin.jabatans.index')->with("successMessage", "Berhasil menyimpan $jabatan->name ");
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
