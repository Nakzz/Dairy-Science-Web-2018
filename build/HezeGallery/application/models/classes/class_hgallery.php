
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        hgallery
	* DATE CREATED:  	11-03-2014
	* FOR TABLE:  		hgallery
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ lib/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class hgallery
	{
	public $gid;
	public $gorder; 
	public $catid; 
	public $gtitle; 
	public $gdesc; 
	public $gimage; 
	public $gdate; 
	public $ctype; 
	
	//Constructor
	public function __construct()
	{
	$this->gid = isset($gid);
	$this->gorder = isset($gorder);
	$this->catid = isset($catid);
	$this->gtitle = isset($gtitle);
	$this->gdesc = isset($gdesc);
	$this->gimage = isset($gimage);
	$this->gdate = isset($gdate);
	$this->ctype = isset($ctype);
	}
	}