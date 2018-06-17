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
	

$path=dirname(__FILE__);  
$npath = str_replace('\\', '/', $path); 
$npath= str_replace($_SERVER['DOCUMENT_ROOT'], '', $npath); 
$absolutep= str_replace('config','',$npath);

define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','Mysql@Dairymgt#@!1');
define('DB_NAME','hezegallery2');
define('DB_TYPE','mysql');//Don't adjust this!

define('H_TITLE','Dairy Management Gallery');

define('PAGINATION_TYPE','Normal');

define('FILE_RENAME',false);//File Rename-file with random number  (true or false)

define('RECORD_PER_PAGE','20');

define('BIG_IMAGE_WIDTH','800');
define('SLIDER_IMAGE_WIDTH','1400');
define('THUMB_IMAGE_WIDTH','300');

//Admin Login Info
define('UPLOAD_FOLDER','public/uploads/');
define('THUMB_FOLDER','public/uploads/thumbs/');
$base = str_replace('config','',dirname(__FILE__).DIRECTORY_SEPARATOR.'/');
define('UPLOAD_PATH',$base.UPLOAD_FOLDER);
define('THUMB_PATH',$base.THUMB_FOLDER);

define('VALID_DIR',1);
define('APP_PATH',$base);
define('APP_FOLDER',APP_PATH.'application');
define('DEFAULT_THEME','public/themes/default');
define('H_THEME',DEFAULT_THEME);
define('H_ADMIN','index.php?pg=admin');

define('RECORD_PER_PAGE_ADMIN','24');
define('DATE_SET',date('Y-m-d'));
//upload handling file path
define('UPLOAD_FILE_URL','uploader/upload.php');
define('AJAX_UPLOAD_PATH','../../public/uploads/');
define('AJAX_UPLOAD_PATH_THUMB','../../public/uploads/thumbs/');
//Specify what files to browse for
define('UPLOAD_SUPPORT_EXT','jpg,gif,png'); //Files Extensions
define('MAX_FILE_COUNT',20); // Number of files user can upload at a go (sets multiple_queues to false for unlimited) 
define('MAX_FILE_SIZE','10mb'); // Maximum file size in MB
//support jquery ui only
define('UPLOAD_VISIBILITY','thumbs'); //thumbs or list (this is active state)
?>
