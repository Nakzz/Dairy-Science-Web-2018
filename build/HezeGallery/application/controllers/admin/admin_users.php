
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
	
	//Expeort	
	if(get('do')=='export'){
	$result = $this->admin_users_model->SelectAll();
	include(APP_FOLDER.'/views/admin/admin_users/Export.php');
	}
	
	//setup	
	if(get('do')=='setup'){
	include('config/setup.php');
	}
	
	//ADD //////////////////////////////////////////////////
	elseif(get('do')=='add'){
	if(post('button')){
	$dbc = new dboptions();
	//validation 
	 if ($dbc->user_exist_checker(post('username'),'admin_users') === true) {
            $errors[] = 'That username already exists';
        }
        elseif(!ctype_alnum(post('username'))){
            $errors[] = 'Please enter a username with only alphabets and numbers';	
        }
        elseif (strlen(post('password')) <5){
            $errors[] = 'Your password must be atleast 5 characters';
        } elseif (strlen(post('password')) >30){
            $errors[] = 'Your password cannot be more than 30 characters long';
        }
		elseif (post('password')!=post('password2')){
            $errors[] = 'Your passwords are not the same.';
        }
        elseif (filter_var(post('email'), FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = 'Please enter a valid email address';
        }
		elseif(empty($errors) === true){
		$username 	= htmlentities(post('username'));
		$password 	= sha1(post('password'));
		
		
	$this->admin_users_model->Insert(post('name'),post('email'),post('phone'),post('username'),$password,post('membership'),post('user_status'),post('user_position'),'',date('d-m-Y'),post('last_login_date'),post('last_login_ip'),UserID());
	send_to(''.H_ADMIN.'&view=admin_users&do=viewall&msg=add');
	}
	}
	$mytable=$this->admin_users_model->CustomShow();
	include(APP_FOLDER.'/views/admin/admin_users/Add.php');
	}
	
	//UPDATE ////////////////////////////////////////////////
	elseif(get('do')=='update'){
	if(post('button')){
	
        if (filter_var(post('email'), FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = 'Please enter a valid email address';
        }
		elseif(empty($errors) === true){
		
	$this->admin_users_model->Update(post('name'),post('email'),post('phone'),post('membership'),post('user_status'),post('user_position'),'',post('userid'));
	send_to(''.H_ADMIN.'&view=admin_users&userid='.get('userid').'&do=details&msg=update');
	}
	}
	$rows = $this->admin_users_model->SelectOne(get('userid'));
	$mytable=$this->admin_users_model->CustomShow();
	include(APP_FOLDER.'/views/admin/admin_users/Update.php');
	}
	
	//CHANGE PASSWORD
	elseif(get('do')=='updatepwd'){
	if(post('button')){
	
	 	  if (post('password')==''){
            $errors[] = 'Your password cannot be empty';
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
	send_to(''.H_ADMIN.'&view=admin_users&userid='.get('userid').'&do=details&msg=update');
	}
	}
	$rows = $this->admin_users_model->SelectOne(get('userid'));
	include(APP_FOLDER.'/views/admin/admin_users/ChangePwd.php');
	}
	
	//Details
	elseif(get('do')=='details'){
	$rows = $this->admin_users_model->SelectOne(get('userid'));
	include(APP_FOLDER.'/views/admin/admin_users/Details.php');
	}
	//truncate
	elseif(get('do')=='truncate'){
	$this->admin_users_model->TruncateTable(''.H_ADMIN.'&view=admin_users&do=viewall&msg=truncate');
	include(APP_FOLDER.'/views/admin/admin_users/View.php');
	}
	//Delete
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('userid') and $dfile==''){
	$del = $this->admin_users_model->Delete(get('userid'),''.H_ADMIN.'&view=admin_users&do=viewall&msg=delete');
	}
	elseif(get('userid') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->admin_users_model->Delete(get('userid'),''.H_ADMIN.'&view=admin_users&do=viewall&msg=delete');
	}
	elseif(get('userid') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_ADMIN.'&view=admin_users&userid='.get('userid').'&do=update&msg=delete');
	}
	}
	}//end invoke
	}//end class
	?>
	