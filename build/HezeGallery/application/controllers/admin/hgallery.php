
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
	
	include(APP_FOLDER.'/models/objects/hgallery.php');
	
	class hgallery_controller {
	public $hgallery_model;
	
	public function __construct()  
    {  
        $result = $this->hgallery_model = new hgallery_model();
    } 
	
	public function invoke_hgallery()
	{
	
	//Select by category	
	if(get('do')=='viewall' and get('catid')){
	$result = $this->hgallery_model->SelectAll(get('ctype'),get('catid'),RECORD_PER_PAGE_ADMIN);
	$paging = pagination($this->hgallery_model->CountRow(get('ctype'),get('catid')),RECORD_PER_PAGE_ADMIN,''.H_ADMIN.'&view=hgallery&do=viewall&catid='.get('catid').'&ctype='.get('ctype'));
	include(APP_FOLDER.'/views/admin/hgallery/View.php');
	}
	
	//select all
	elseif(get('do')=='viewall'){
	Checkid(get('catid') and get('ctype'),''.H_ADMIN.'&view=categories&do=viewall&msg=cat_error');
	$result = $this->hgallery_model->SelectAll('','',RECORD_PER_PAGE_ADMIN);
	$paging = pagination($this->hgallery_model->CountRow('',''),RECORD_PER_PAGE_ADMIN,''.H_ADMIN.'&view=hgallery&do=viewall');
	include(APP_FOLDER.'/views/admin/hgallery/View.php');	
	}
	
	//Save order /////////////////////////////////////////////////
	if(get('do')=='saveorder'){
	$this->hgallery_model->SaveOrder();
	}
	
	
	//Add
	elseif(get('do')=='add'){
	Checkid(get('catid') and get('ctype'),''.H_ADMIN.'&view=categories&do=viewall&msg=cat_error');
	$this->hgallery_model->Insert(BIG_IMAGE_WIDTH,''.H_ADMIN.'&view=hgallery&do=viewall&msg=add&catid='.get('catid').'&ctype='.get('ctype').'');
	include(APP_FOLDER.'/views/admin/hgallery/Add.php');
	}
	//Add Slider
	elseif(get('do')=='addslide'){
	Checkid(get('catid') and get('ctype'),''.H_ADMIN.'&view=categories&do=viewall&msg=cat_error');
	$this->hgallery_model->Insert(SLIDER_IMAGE_WIDTH,''.H_ADMIN.'&view=hgallery&do=viewall&msg=add&catid='.get('catid').'&ctype='.get('ctype').'');
	include(APP_FOLDER.'/views/admin/hgallery/AddSlide.php');
	}
	//Add
	elseif(get('do')=='addmulti'){
	Checkid(get('catid') and get('ctype'),''.H_ADMIN.'&view=categories&do=viewall&msg=cat_error');
	include('libraries/uploader/create.php');
	}
	//Update
	elseif(get('do')=='update'){
	$rows = $this->hgallery_model->SelectOne(get('gid'));
	$this->hgallery_model->Update(''.H_ADMIN.'&view=hgallery&gid='.get('gid').'&catid='.get('catid').'&do=details&msg=update&ctype='.get('ctype').'');
	include(APP_FOLDER.'/views/admin/hgallery/Update.php');
	}
	//Details
	elseif(get('do')=='details'){
	$rows = $this->hgallery_model->SelectOne(get('gid'));
	include(APP_FOLDER.'/views/admin/hgallery/Details.php');
	}
	//truncate
	elseif(get('do')=='truncate'){
	$this->hgallery_model->TruncateTable(''.H_ADMIN.'&view=hgallery&do=viewall&msg=truncate&catid='.get('catid').'&ctype='.get('ctype').'');
	include(APP_FOLDER.'/views/admin/hgallery/View.php');
	}
	//Delete
	elseif(get('do')=='delete'){
	$dfile=get('dfile');
	if(get('gid') and $dfile==''){
	$del = $this->hgallery_model->Delete(get('gid'),''.H_ADMIN.'&view=hgallery&do=viewall&msg=delete&catid='.get('catid').'&ctype='.get('ctype').'');
	}
	elseif(get('gid') and $dfile!='' and get('fdel')==''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	$del = $this->hgallery_model->Delete(get('gid'),''.H_ADMIN.'&view=hgallery&do=viewall&msg=delete&catid='.get('catid').'&ctype='.get('ctype').'');
	}
	elseif(get('gid') and $dfile!='' and get('fdel')!=''){
	delete_files(UPLOAD_PATH.get('dfile'));
	delete_files(THUMB_PATH.get('dfile'));
	send_to(''.H_ADMIN.'&view=hgallery&gid='.get('gid').'&do=update&msg=delete&catid='.get('catid').'&ctype='.get('ctype').'');
	}
	}
	}//end invoke
	}//end class
	?>
	