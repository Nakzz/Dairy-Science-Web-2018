<?php
	/*
	Hezecom Responsive Gallery, Portfolio and Slider Manager
	Author: Hezecom Technologies (http://hezecom.com) info@hezecom.net
	COPYRIGHT 2014 ALL RIGHTS RESERVED
	
	You must have purchased a valid license from CodeCanyon.com in order to have 
	access this file.

	You may only use this file according to the respective licensing terms 
	you agreed to when purchasing this item.
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	 
	//UserAccessCheck();
	//admin_users	
	if(get('view')=='admin_users'){
	include(APP_FOLDER.'/controllers/admin/admin_users.php');
	$_controller = new admin_users_controller();
	$_controller->invoke_admin_users();
	}
	//categories	
	if(get('view')=='categories'){
	include(APP_FOLDER.'/controllers/admin/categories.php');
	$_controller = new categories_controller();
	$_controller->invoke_categories();
	}
	//hgallery	
	if(get('view')=='hgallery'){
	include(APP_FOLDER.'/controllers/admin/hgallery.php');
	$_controller = new hgallery_controller();
	$_controller->invoke_hgallery();
	}
	//admin_exempt	
	if(get('view')=='admin_exempt'){
	include(APP_FOLDER.'/controllers/admin/admin_exempt.php');
	$_controller = new admin_users_controller();
	$_controller->invoke_admin_users();
	}
	
	?>