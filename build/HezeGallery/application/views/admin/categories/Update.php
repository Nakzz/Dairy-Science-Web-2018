
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
	<a href="<?php echo H_ADMIN;?>&view=categories&catid=<?php echo $rows->catid;?>&do=details&ctype=<?php echo get('ctype');?>" title="View Details" class="btn btn-default btn-sm tip"><i class="fa fa-th-list"></i> <?php echo LANG_DETAILS;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=categories&catid=<?php echo $rows->catid;?>&do=delete&dfile=<?php echo $rows->coverimg;?>&ctype=<?php echo get('ctype');?>" title="<?php echo LANG_TIP_DELETE;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=categories&do=viewall&ctype=<?php echo get('ctype');?>" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_UPDATE;?> Categories</h3></div>
  <div class="panel-body pformmargin">
	
	 
	 <p>
	 <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<input type="hidden" name="catid" value="<?php echo $rows->catid;?>">
	

	<div class="form-group">
    <label class="control-label" for="category_name">Category Name</label>
	<input id="category_name" name="category_name" type="text" maxlength="200"  value="<?php echo $rows->category_name;?>" class="form-control styler" />
	</div>
    
     <div class="form-group">
    <label class="control-label" for="category_type">Category Type</label>
	<select name="category_type" id="category_type" class=" form-control styler choz">
	<option value="<?php echo $rows->category_type;?>"><?php echo $rows->category_type;?></option>
    <option value="gallery">Gallery</option>
	<option value="portfolio">Portfolio</option>
	<option value="slider">Slider</option>
    <option value="products">Products</option>
    <option value="posts">Posts</option>
	</select>
	</div>
    

	<div class="form-group">
    <label class="control-label" for="coverimg">Cover Image</label>
	<input id="coverimg" name="coverimg"type="file" class="styler"/><br><?php if(is_file(UPLOAD_FOLDER.$rows->coverimg)){?><a href="#"><img src="<?php echo THUMB_FOLDER.$rows->coverimg;?>" width="100" height="100"></a><br><?php }?>
	<?php if(is_file(UPLOAD_FOLDER.$rows->coverimg)){?>
	<a href="<?php echo H_ADMIN;?>&view=categories&catid=<?php echo $rows->catid;?>&dfile=<?php echo $rows->coverimg;?>&do=delete&fdel=file" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><span class="btn btn-xs btn-danger"><i class="fa fa-remove"></i> <?php echo LANG_DELETE;?></span></a><br><?php }?>
	
	</div>

	<div class="form-group">
    <label class="control-label" for="category_position">Category Position</label>
	<input id="category_position" name="category_position" type="text" maxlength="200"  value="<?php echo $rows->category_position; ?>" class="form-control styler" data-toggle="tooltip" data-placement="left" title="Position For Your Category To Display"/>
	</div>

	<div class="form-group">
    <label class="control-label" for="category_notes">Category Notes</label>
	<?php //HezecomEditor('category_notes'); ?>
		<textarea rows="5" id="category_notes" name="category_notes" class="form-control styler" /><?php echo $rows->category_notes;?></textarea>
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
	