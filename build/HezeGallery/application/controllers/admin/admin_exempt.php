
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
	
	include(APP_FOLDER.'/models/objects/admin_users.php');
	
	class admin_users_controller {
	public $admin_users_model;
	
	public function __construct()  
    {  
        $result = $this->admin_users_model = new admin_users_model();
    } 
	
	public function invoke_admin_users()
	{
	
	//Select	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->admin_users_model->SelectAll(RECORD_PER_PAGE);
	$paging = pagination($this->admin_users_model->CountRow(),RECORD_PER_PAGE,''.H_ADMIN.'&view=admin_users&do=viewall');
	}else{
	$result = $this->admin_users_model->SelectAll();	
	}
	include(APP_FOLDER.'/views/admin/admin_users/View.php');
	}
	
	
	//UPDATE ////////////////////////////////////////////////
	elseif(get('do')=='update'){
	if(post('button')){
		
        if (filter_var(post('email'), FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = 'Please enter a valid email address';
        }
		elseif(empty($errors) === true){
		$username 	= htmlentities(post('username'));
		$password 	= sha1(post('password'));
		
	$this->admin_users_model->UpdateExempt(post('name'),post('email'),post('phone'),UserID());
	send_to(''.H_ADMIN.'&view=admin_exempt&userid='.get('userid').'&do=details&msg=update');
	}
	}
	$rows = $this->admin_users_model->SelectOne(UserID());
	$mytable=$this->admin_users_model->CustomShow();
	include(APP_FOLDER.'/views/admin/admin_users/Update2.php');
	}
	
	//CHANGE PASSWORD
	elseif(get('do')=='updatepwd'){
	$dbc=new dboptions();
	if(post('button')){
		
	 if (post('password')==''){
            $errors[] = 'Your password cannot be empty';
        } 
	
	elseif ($dbc->current_password(UserID(), post('oldpassword'),'admin_users') === false) {
		$errors[] = 'Your old password is not correct!';
	}
	 	elseif (post('password')!='' and strlen(post('password')) <5){
            $errors[] = 'Your password must be atleast 5 characters';
        } 
		elseif (strlen(post('password')) >30){
            $errors[] = 'Your password cannot be more than 30 characters long';
        }
		elseif (post('password')!=post('password2')){
            $errors[] = 'Your passwords are not the same.';
        }
       
		elseif(empty($errors) === true){
		$password 	= sha1(post('password'));
	
	$this->admin_users_model->UpdatePassword($password,post('userid'));
	send_to(''.H_ADMIN.'&view=admin_exempt&userid='.get('userid').'&do=details&msg=update');
	}
	}
	include(APP_FOLDER.'/views/admin/admin_users/ChangePwd2.php');
	}
	
	//Details
	elseif(get('do')=='details'){
	$rows = $this->admin_users_model->SelectOne(UserID());
	include(APP_FOLDER.'/views/admin/admin_users/Details2.php');
	}
	
	}//end invoke
	}//end class
	?>
	