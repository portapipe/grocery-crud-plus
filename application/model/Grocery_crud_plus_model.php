<?php
/**
 * PHP grocery CRUD Plus
 *
 * LICENSE
 *
 * Grocery CRUD Plus is released with dual licensing, using the GPL v3 (license-gpl3.txt) and the MIT license (license-mit.txt).
 * You don't have to do anything special to choose one license or the other and you don't have to notify anyone which license you are using.
 * Please see the corresponding license file for details of these licenses.
 * You are free to use, modify and distribute this software, but all copyright information must remain.
 *
 * @package    	grocery CRUD Plus
 * @copyright  	Copyright (c) 2018 through today, portapipe
 * @website    	https://github.com/portapipe/grocery-crud-plus/
 * @version    	1.0.0
 * @author     	portapipe
 */

// ------------------------------------------------------------------------

/**
 * Grocery CRUD Plus Model
 *
 *
 * @package    	grocery CRUD Plus
 * @author     	portapipe
 * @link		http://plus.grocerycrud.com/documentation
 */
if(!class_exists("Grocery_crud_model")) include("Grocery_crud_model.php");
class Grocery_crud_plus_model  extends Grocery_crud_model  {


	function __construct()
    {
        parent::__construct();
        
		$directory = APPPATH.'models/GCPlus_modules/';
		$files = array_diff(scandir($directory), array('..', '.'));
        foreach($files as $v){
	        include("GCPlus_modules/$v");
        }
    }
    
    function __call($functionName, $args) {
       if(function_exists($functionName))  
         return call_user_func_array($functionName, $args);
    }	

}
