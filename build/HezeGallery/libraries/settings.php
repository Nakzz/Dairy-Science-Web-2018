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

	$phpopen = "<?php

	/*
	Hezecom Responsive Gallery, Portfolio and Slider Manager
	Author: Hezecom Technologies (http://hezecom.com) info@hezecom.net
	COPYRIGHT 2014 ALL RIGHTS RESERVED
	
	You must have purchased a valid license from CodeCanyon.com in order to have 
	access this file.

	You may only use this file according to the respective licensing terms 
	you agreed to when purchasing this item.
	*/
	"."\n
"."$"."path=dirname(__FILE__);  
"."$"."npath = str_replace('\\\', '/', "."$"."path); 
"."$"."npath= str_replace("."$"."_SERVER['DOCUMENT_ROOT'], '', "."$"."npath); 
"."$"."absolutep= str_replace('config','',"."$"."npath);

";

$multi_upload="
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
";
	
	$base = str_replace('libraries','',dirname(__FILE__));
	$mbase = str_replace('\\','/',$base);
	$dir = "".$mbase."config/config.php";
	if($dir){
	$file = fopen($dir, 'w') or die("can't open file");

	fwrite($file, $phpopen);
	fwrite($file, "define('LOCALHOST',"."'".$_POST['host'].''."'".')'.';'."\n");
	fwrite($file, "define('DB_USERNAME',"."'".$_POST['username'].''."'".')'.';'."\n");
	fwrite($file, "define('DB_PASSWORD',"."'".$_POST['password'].''."'".')'.';'."\n");
	fwrite($file, "define('DB_NAME',"."'".$_POST['dbname'].''."'".')'.';'."\n");
	fwrite($file, "define('DB_TYPE',"."'".$_POST['dbtype'].''."'".')'.';'."//Don't adjust this!\n\n");
	
	fwrite($file, "define('H_TITLE',"."'".$_POST['ptitle'].''."'".')'.';'."\n\n");
	fwrite($file, "define('PAGINATION_TYPE',"."'".$_POST['pgtype'].''."'".')'.';'."\n\n");
	fwrite($file, "define('FILE_RENAME',"."".$_POST['frename'].''."".')'.';'."//File Rename-file with random number  (true or false)\n\n");
	//fwrite($file, "define('FRIENDLY_URL',"."'".$_POST['furl'].''."'".')'.';'."\n\n");
	fwrite($file, "define('RECORD_PER_PAGE',"."'".$_POST['recordsp'].''."'".')'.';'."\n\n");
	fwrite($file, "define('BIG_IMAGE_WIDTH',"."'".$_POST['bigsize'].''."'".')'.';'."\n");
	fwrite($file, "define('SLIDER_IMAGE_WIDTH',"."'".$_POST['slidersize'].''."'".')'.';'."\n");
	fwrite($file, "define('THUMB_IMAGE_WIDTH',"."'".$_POST['thumbsize'].''."'".')'.';'."\n\n//Admin Login Info\n");
	//fwrite($file, "define('ADMIN_USERNAME',"."'".$_POST['adminuser'].''."'".')'.';'."\n");
	//fwrite($file, "define('ADMIN_PASSWORD',"."'".$_POST['adminpwd'].''."'".')'.';'."\n\n//Upload Directory\n");
	
	fwrite($file, "define('UPLOAD_FOLDER',"."'".'public/uploads/'.''."'".')'.';'."\n");
	fwrite($file, "define('THUMB_FOLDER',"."'".'public/uploads/thumbs/'.''."'".')'.';'."\n");
	fwrite($file, "$"."base = str_replace('config','',dirname(__FILE__).DIRECTORY_SEPARATOR.'/');\n");
	fwrite($file, "define('UPLOAD_PATH',"."$"."base."."UPLOAD_FOLDER".''."".')'.';'."\n");
	fwrite($file, "define('THUMB_PATH',"."$"."base."."THUMB_FOLDER".''."".')'.';'."\n\n");
	//app dir
	fwrite($file, "define('VALID_DIR',".'1'.''.')'.';'."\n");
	fwrite($file, "define('APP_PATH',"."$"."base"."".''."".')'.';'."\n");
	fwrite($file, "define('APP_FOLDER',APP_PATH."."'".'application'.''."'".')'.';'."\n");
	fwrite($file, "define('DEFAULT_THEME',"."'".'public/themes/default'.''."'".')'.';'."\n");
	fwrite($file, "define('H_THEME',".'DEFAULT_THEME'.''.')'.';'."\n");
	fwrite($file, "define('H_ADMIN',"."'".'index.php?pg=admin'.''."'".')'.';'."\n");
	fwrite($file, $multi_upload);
	//backup dir
	//fwrite($file, "define('H_BACKUP_DIR',"."'".'public/backups/'.''."'".')'.';'."\n");
	//fwrite($file, "define('H_EDITOR_FILES',"."$"."absolutep".".'".'public/uploads/editor'."'".')'.';'."\n\n//Cpanel Settings\n");
	
	fwrite($file, "?>");
	if(isset($_GET['view'])){
	die( '<div class="alert alert-success"><span class="fa fa-check-circle"></span> Your Settings Has Been Updated Successfully!</div>'); 
	}else{
	include('../config/config.php');
	include_once('class_dbcon.php');
	$db=DB::getInstance();
	
	$sql =" CREATE TABLE IF NOT EXISTS `admin_users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `membership` varchar(30) DEFAULT NULL,
  `user_status` enum('Active','Inactive','Banned','Pending') DEFAULT NULL,
  `user_position` enum('Super Admin','Admin','Client') DEFAULT NULL,
  `user_avarta` varbinary(100) DEFAULT NULL,
  `access_level` text,
  `date_created` varchar(50) DEFAULT NULL,
  `last_login_date` date DEFAULT NULL,
  `last_login_ip` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`userid`, `name`, `email`, `phone`, `username`, `password`, `membership`, `user_status`, `user_position`, `user_avarta`, `access_level`, `date_created`, `last_login_date`, `last_login_ip`) VALUES

(1, 'app user', 'test@gmail.com', '', 'admin', '97fbff3a5d97b9be6ea1c585eeee68e5d96f297f', '', 'Active', 'Super Admin', NULL, '', '', NULL, NULL);

CREATE TABLE IF NOT EXISTS `categories` (
  `catid` int(11) NOT NULL AUTO_INCREMENT,
  `created_by` int(11) DEFAULT NULL,
  `category_name` varchar(200) DEFAULT NULL,
  `category_notes` time DEFAULT NULL,
  `category_type` varchar(100) DEFAULT NULL,
  `coverimg` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `last_updated` date DEFAULT NULL,
  `last_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `hgallery` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `listorder` int(11) DEFAULT NULL,
  `catid` int(11) DEFAULT NULL,
  `gtitle` varchar(100) DEFAULT NULL,
  `gdesc` text,
  `gimage` varbinary(100) NOT NULL,
  `gdate` date DEFAULT NULL,
  `ctype` varchar(50) DEFAULT NULL,
  `created_by` varchar(30) DEFAULT NULL,
  `last_updated` date DEFAULT NULL,
  `last_updated_by` varchar(30) DEFAULT NULL,
  `published` enum('YES','NO') DEFAULT NULL,
  `animation` varchar(50) DEFAULT NULL,
  `caption_align` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`gid`),
  KEY `catid` (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
	   ";
	$db->exec($sql); 
	echo'<script>window.location.replace("index.php");</script>';
	}
	fclose($file);
	}
?>

