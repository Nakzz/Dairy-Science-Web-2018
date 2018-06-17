
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
	?>
	
	<div class="heze-table">
	<div class="col-12">
	<ul class="nav nav-tabs pull-right">
	<a href="<?php echo H_ADMIN;?>&view=admin_exempt&userid=<?php echo $rows->userid;?>&do=details" title="View Details" class="btn btn-default btn-sm tip"><i class="fa fa-th-list"></i> <?php echo LANG_DETAILS;?></a>
	
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> Update Profile</h3></div>
  <div class="panel-body pformmargin">
	
	  
	 <p>
     <?php if(isset($errors))form_errors($errors);?>
	 <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<input type="hidden" name="userid" value="<?php echo UserID();?>">
    
	<div class="form-group">
    <label class="control-label" for="name">Name</label>
	<input id="name" name="name" type="text" maxlength="50"  value="<?php echo $rows->name;?>" class="form-control styler" />
	</div>

	<div class="form-group">
    <label class="control-label" for="email">Email</label>
	<input id="email" name="email" type="text" maxlength="50"  value="<?php echo $rows->email;?>" class="form-control styler" />
	</div>

	<div class="form-group">
    <label class="control-label" for="phone">Phone</label>
	<input id="phone" name="phone" type="text" maxlength="50"  value="<?php echo $rows->phone;?>" class="form-control styler" />
	</div>


        
	<div class="form-group">
    <label class="control-label" for="user_avarta">User Avarta</label>
	<input id="user_avarta" name="user_avarta"type="file" class="styler"/><br><?php if(is_file(UPLOAD_FOLDER.$rows->user_avarta)){?><a href="#"><img src="<?php echo THUMB_FOLDER.$rows->user_avarta;?>" style="width:200px; height:200px;"></a><br><?php }?>
	</div>

	 <div class="controls">
	 <div class="col-md-2" style="padding:0;">
     <input type="submit" name="button" id="hButton" class="btn btn-primary btn-lg" value="<?php echo LANG_UPDATE_RECORD;?>" />
	 </div>
	 <div class="col-md-3" style="padding:0;">
	 <div id="output"></div>
	 </div>
	 </div>

	  
	</form>
	</p>
	 
	
	</div>
 </div><!--/col-12-->
 </div><!--/heze-table-->
	