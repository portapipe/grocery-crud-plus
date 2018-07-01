<?php
/**
 * PHP grocery CRUD PLUS
 *
 * A Grocery CRUD addon library that enhance it with tons of modular stuff without loosing the easy way to do any stuff.
 *
 * Copyright (C) 2018 - Today  portapipe.
 *
 * LICENSE
 *
 * Grocery CRUD PLUS is released with dual licensing, using the GPL v3 (license-gpl3.txt) and the MIT license (license-mit.txt).
 * You don't have to do anything special to choose one license or the other and you don't have to notify anyone which license you are using.
 * Please see the corresponding license file for details of these licenses.
 * You are free to use, modify and distribute this software, but all copyright information must remain.
 *
 * @package		grocery CRUD PLUS
 * @copyright		Copyright (c) 2018 through today, portapipe
 * @website		https://github.com/portapipe/grocery-crud-plus/
 * @version		1.0.0
 * @author		portapipe
 */

if(!class_exists("Grocery_CRUD")) include("Grocery_CRUD.php");
class Grocery_CRUD_PLUS extends Grocery_CRUD
{
	/**
	 * Grocery CRUD PLUS
	 *
	 * @var	string
	 */
	const	VERSION = "1.0.0";
	/**
	 *
	 * Constructor
	 *
	 * @access	public
	 */
	public function __construct()
	{
		$ci = &get_instance();
		$ci->load->model('Grocery_crud_plus_model');
	}


}
