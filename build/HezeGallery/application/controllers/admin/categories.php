
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
	
	include(APP_FOLDER.'/models/objects/categories.php');
	
	class categories_controller {
	public $categories_model;
	
	public function __construct()  
    {  
        $result = $this->categories_model = new categories_model();
    } 
	
	public function invoke_categories()
	{
	
	//Select	
	if(get('do')=='viewall'){
	if(PAGINATION_TYPE=='Normal'){
	$result = $this->categories_model->SelectAll(get('ctype'),RECORD_PER_PAGE);
	$paging = pagination($this->categories_model->CountRow(get('ctype')),RECORD_PER_PAGE,''.H_ADMIN.'&view=categories&do=viewall&catid='.get('catid').'&ctype='.get('ctype'));
	}else{
	$result = $this->categories_model->SelectAll(get('ctype'));	
	}
	include(APP_FOLDER.'/views/admin/categories/View.php');
	}
	
	
	//Add
	elseif(get('do')=='add'){
	$this->categories_model->Insert(''.H_ADMIN.'&view=categories&do=viewall&msg=add&ctype='.get('ctype').'');
	include(APP_FOLDER.'/views/admin/categories/Add.php');
	}
	//Update
	elseif(get('do')=='update'){
	$rows = $this->categories_model->SelectOne(get('catid'));
	$this->categories_model->Update(''.H_ADMIN.'&view=categories&catid='.get('catid').'&do=details&msg=update&ctype='.get('ctype').'');
	include(APP_FOLDER.'/views/admin/categories/Update.php');
	}
	//Details
	elseif(get('do')=='details'){
	$rows = $this->categories_model->SelectOne(get('catid'));
	include(APP_FOLDER.'/views/admin/categories/Details.php');
	}
	
	//Delete
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
		if(get('catid') and $dfile==''){
	$del = $this->categories_model->Delete(get('catid'),''.H_ADMIN.'&view=categories&do=viewall&msg=delete&ctype='.get('ctype').'');
	}
	elseif(get('catid') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->categories_model->Delete(get('catid'),''.H_ADMIN.'&view=categories&do=viewall&msg=delete&ctype='.get('ctype').''.'');
	}
	elseif(get('catid') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_ADMIN.'&view=categories&catid='.get('catid').'&do=update&msg=delete&ctype='.get('ctype').'');
	}
	}
	}//end invoke
	}//end class
	?>
	