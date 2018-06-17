
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        categories
	* DATE CREATED:  	11-03-2014
	* FOR TABLE:  		categories
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ lib/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class categories
	{
	public $catid;
	public $created_by; 
	public $category_name; 
	public $category_position;
	public $category_notes; 
	public $category_type; 
	public $coverimg; 
	public $date_created; 
	public $last_updated; 
	public $last_updated_by; 
	
	//Constructor
	public function __construct()
	{
	$this->catid = isset($catid);
	$this->created_by = isset($created_by);
	$this->category_notes = isset($category_notes);
	$this->category_position = isset($category_position);
	$this->category_type = isset($category_type);
	$this->coverimg = isset($coverimg);
	$this->date_created = isset($date_created);
	$this->last_updated = isset($last_updated);
	$this->last_updated_by = isset($last_updated_by);
	}
	}