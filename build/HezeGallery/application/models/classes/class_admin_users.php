
	<?php
	/*
	* =======================================================================
	* CLASSNAME:        admin_users
	* DATE CREATED:  	11-03-2014
	* FOR TABLE:  		admin_users
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* IMPORTANT:		
	* 'post()' is a defined function located @ lib/funtions.php
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	//Begin class
	
	class admin_users
	{
	public $userid;
	public $name; 
	public $email; 
	public $phone; 
	public $username; 
	public $password; 
	public $membership; 
	public $user_status; 
	public $user_position; 
	public $user_avarta; 
	public $access_level; 
	public $date_created; 
	public $last_login_date; 
	public $last_login_ip; 
	
	//Constructor
	public function __construct()
	{
	$this->userid = isset($userid);
	$this->name = isset($name);
	$this->email = isset($email);
	$this->phone = isset($phone);
	$this->username = isset($username);
	$this->password = isset($password);
	$this->membership = isset($membership);
	$this->user_status = isset($user_status);
	$this->user_position = isset($user_position);
	$this->user_avarta = isset($user_avarta);
	$this->access_level = isset($access_level);
	$this->date_created = isset($date_created);
	$this->last_login_date = isset($last_login_date);
	$this->last_login_ip = isset($last_login_ip);
	}
	}