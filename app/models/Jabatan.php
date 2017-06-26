<?php

class Jabatan extends \Eloquent {

	// Add your validation rules here
	public static $rules = [ 'name' => 'required|unique:jabatans'
];

		// 'title' => 'required'
	// ];

	// Don't forget to fill this array
	protected $fillable = ['name'];

}