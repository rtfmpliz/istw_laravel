<?php

class Bagian extends BaseModel {

	// Add your validation rules here
	public static $rules = [ 'name' => 'required|unique:bagians'
];

		// 'title' => 'required'
	// ];

	// Don't forget to fill this array
	protected $fillable = ['name'];

}