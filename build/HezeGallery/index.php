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
	session_start();
	include('config/config.php');
	include('language/eng.php');
	include('libraries/functions.php');
	include_once('libraries/class_dbcon.php');
	include_once('libraries/upload_class.php');
?>
<?php
if(!get('hexport')){
//////////////////////////////////////
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo H_TITLE;?> </title>
<link rel="stylesheet" type="text/css" href="<?php echo H_THEME;?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo H_THEME;?>/css/font-awesome.min.css">
<link href="<?php echo H_THEME;?>/css/admin.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo H_THEME;?>/css/footable.core.min.css" type="text/css">
<!--LIGHT BOX-->
<link rel="stylesheet" href="<?php echo H_THEME;?>/css/jquery.lightbox.min.css" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo H_THEME;?>/css/boot-lightbox.min.css">

<link href="<?php echo H_THEME;?>/css/chosen.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo H_THEME;?>/uploader/jquery.plupload.queue/css/jquery.plupload.queue.css" type="text/css" />

<script src="<?php echo H_THEME;?>/js/modernizr.custom.js"></script>
<!--
<script type="text/javascript" src="libraries/editor/tinymce/tinymce.min.js"></script>
-->
 <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src='<?php echo H_THEME;?>/js/jquery.js'></script>
<script src="<?php echo H_THEME;?>/js/jquery-ui-1.10.3.custom.min.js"></script>

</head>

<body>
  		<?php
  		if(get('msg')=='add'){success_msg(LANG_SUCCESS_ADD);}
		elseif(get('msg')=='update'){success_msg(LANG_SUCCESS_UPDATE);}
		elseif(get('msg')=='delete'){success_msg(LANG_SUCCESS_DELETE);}
		elseif(get('msg')=='truncate'){success_msg(LANG_SUCCESS_TRUNCATE);}
		elseif(get('msg')=='error'){error_msg(LANG_ERROR_MSG);}
		elseif(get('msg')=='backup'){success_msg(LANG_BACKUP_CREATED);}
		elseif(get('dbrestore')!=''){success_msg(LANG_BACKUP_RESTORED);}
		elseif(get('dbfile')!=''){success_msg(LANG_BACKUP_DELETED);}
		elseif(get('msg')=='importer'){success_msg(LANG_CSV_SUCCESS);}
		elseif(get('msg')=='cat_error'){error_msg(CATEGORY_ERROR);}
		elseif(get('msg')=='client_error'){error_msg(CLIENT_ERROR);}
		?>
        
    <div id="hezewraper">
      <div class="navbar navbar-static-top navbar-fixed-top navbar-inverse">
          <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" id="showLeft" style="border:0;">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <a class="navbar-brand" style="color:#FFF;" href="index.php"><i class="fa fa-desktop"></i> <?php echo H_TITLE;?></a>
          <div class="collapse navbar-collapse navbar-ex1-collapse">
          <?php  if(isset($_SESSION['admin_user'])){?>
            <p class="navbar-text pull-right" style="color:#FFF;">
              <?php echo LANG_LOGIN_IN_AS.'  '.$_SESSION['admin_user'];?>  <a href="libraries/logout.php" class="btn btn-info btn-sm"> <i class=" fa fa-power-off"></i> <?php echo LANG_LOGOUT;?></a> 
              <a href="<?php echo H_ADMIN;?>&view=admin_exempt&userid=<?php echo UserID();?>&do=details" class="btn btn-danger btn-sm"> <i class=" fa fa-lock"></i> Account</a>
              
            </p>
            <?php }?>
          </div><!--/.nav-collapse -->
       
      </div>
      
     <?php  if(isset($_SESSION['admin_user'])){?> 
    <!--MOBILE NAV-->  
      <div class="phone-navigation">
      <div class="heze-mobilemenu-push">
		<nav class="heze-mobilemenu heze-mobilemenu-vertical heze-mobilemenu-left" id="heze-mobilemenu-s1">
        <div class="divscroll">
			<ul class="heze-accordion">
			<li id="one" class="files">
		<a href="#1" class="active"><i class="fa fa-dashboard aln"></i> <?php echo LANG_DASHBOARD;?><span><i class="fa fa-chevron-down"></i></span></a>
		<ul class="sub-menu" style="display: block;">
		<li><a href="<?php echo H_ADMIN;?>&view=hezedata"><i class="fa fa-cloud-download"></i><?php echo LANG_DATABASE_MANAGER;?></a></li>
		<li><a href="libraries/logout.php"><i class="fa fa-chevron-right"></i><?php echo LANG_LOGOUT;?></a></li>
        <?php include(APP_FOLDER.'/views/admin/menu.php');?>
				</ul>
                </li>
                
        
           
           </ul>
           </div>
		</nav>
        </div>
        </div>
      <!--/MOBILE NAV-->

     <!-- SIDE MENU -->
     
    <div class="heze-navmenu">
    <div class="divscroll">
			<ul class="heze-accordion">
			<li id="one" class="files">
				<a href="#1" class="active"><i class="fa fa-dashboard aln"></i> <?php echo LANG_DASHBOARD;?><span><i class="fa fa-chevron-down"></i></span></a>
				<ul class="sub-menu" style="display: block;">
                <?php include(APP_FOLDER.'/views/admin/menu.php');?>
				</ul>
                </li>
           </ul>
           </div>
</div>
<!-- END SIDE MENU -->
<?php }?>
<!-- BODY CONTENTS -->
<div class="heze-container">
<h4><?php echo H_TITLE;?> </h4>

  <!--TABLE-->
  <?php }//END HEADE DISPLAY///////
		if(!isset($_SESSION['admin_user'])){include('libraries/views/admin/login.php');}
		elseif(get('view')){
		include(APP_FOLDER.'/controllers/admin/main.php');
		}else{
		?>
     
 <div class="col-lg-12">
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> Welcome!</h3></div>
  <div class="panel-body" style="padding:10px;">
   <p>
   Hezecom Responsive Gallery, Portfolio and Slider Manager.
   </p>
  </div>

</div>
 </div><!--/col-12-->
 <?php }?>
      
 </div><!--/heze-container-->       
</div><!--hezewraper-->
  
 <?php
if(!get('hexport')){
//////////////////////////////////////
?>   
 <div id="footer" class="navbar-fixed-bottom">
      <div class="container">
        <p class="text-muted credit">&copy; <?php echo date('Y')?> <a href="http://
        .com">Hezecom Technologies</a></p>
      </div>
    </div>
    

<script src="<?php echo H_THEME;?>/js/bootstrap.min.js"></script>
<script src="<?php echo H_THEME;?>/js/footable.js" type="text/javascript"></script>
<script src="<?php echo H_THEME;?>/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo H_THEME;?>/js/jquery.lightbox.min.js" type="text/javascript"></script>
<script src="<?php echo H_THEME;?>/js/bootstrap-datepicker.js"></script>
<script src="<?php echo H_THEME;?>/js/jquery.form.js"></script>
<script src="<?php echo H_THEME;?>/js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="<?php echo H_THEME;?>/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="<?php echo H_THEME;?>/uploader/jquery.plupload.queue/jquery.plupload.queue.js"></script>
<script src="<?php echo H_THEME;?>/js/boot-lightbox.min.js"></script>
<script src="<?php echo H_THEME;?>/js/hezecom.custom.js"></script>
<?php }?>
  </body>
  </html>
