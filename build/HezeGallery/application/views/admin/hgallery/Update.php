
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
	<a href="<?php echo H_ADMIN;?>&view=hgallery&gid=<?php echo $rows->gid;?>&do=details&catid=<?php echo get('catid');?>&ctype=<?php echo get('ctype');?>" title="View Details" class="btn btn-default btn-sm tip"><i class="fa fa-th-list"></i> <?php echo LANG_DETAILS;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=hgallery&gid=<?php echo $rows->gid;?>&do=delete&dfile=<?php echo $rows->gimage;?>&catid=<?php echo get('catid');?>&ctype=<?php echo get('ctype');?>" title="<?php echo LANG_TIP_DELETE;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=hgallery&do=viewall&catid=<?php echo get('catid');?>&ctype=<?php echo get('ctype');?>" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_UPDATE;?> <?php echo CatName(get('catid'));?> Gallery</h3></div>
  <div class="panel-body pformmargin">
	
	 
	 <p>
	 <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	<input type="hidden" name="gid" value="<?php echo $rows->gid;?>">
	

	<div class="form-group">
    <label class="control-label" for="gtitle">Title</label>
<input id="gtitle" name="gtitle" type="text" maxlength="100"  value="<?php echo $rows->gtitle;?>" class="form-control styler" />
	</div>
    
    <?php if(get('ctype')=='slider'){?>
      <div class="form-group">
    <label class="control-label" for="animation">Caption CSS3 Animation</label>
	<select name="animation" id="animation" class=" form-control styler choz">
    <option value="<?php echo $rows->animation;?>"><?php echo $rows->animation;?> </option>
     <option value="fadeInUp">FadeInUp </option>
     <option value="fadeInLeft">fadeInLeft</option>
	<option value="bounceInLeft ">BounceInLeft </option>
	<option value="bounceInRight">bounceInRight</option>
	</select>
	</div>
    
    <div class="form-group">
    <label class="control-label" for="caption_align">Caption Text Align</label>
	<select name="caption_align" id="caption_align" class=" form-control styler choz">
     <option value="<?php echo $rows->caption_align;?>"><?php echo $rows->caption_align;?> </option>
    <option value="text-center">Center </option>
     <option value="text-left"> Left</option>
	<option value="text-right ">Right </option>
	</select>
	</div>
    <?php }?>

	<div class="form-group">
    <label class="control-label" for="gdesc">Description</label>
	<?php //HezecomEditor('gdesc'); ?>
		<textarea rows="5" id="gdesc" name="gdesc" class="form-control styler" /><?php echo $rows->gdesc;?></textarea>
	</div>

	<div class="form-group">
    <label class="control-label" for="gimage">Image</label>
	<input id="gimage" name="gimage"type="file" class="styler"/><br><?php if(is_file(UPLOAD_FOLDER.$rows->gimage)){?><a href="#"><img src="<?php echo THUMB_FOLDER.$rows->gimage;?>" width="100" height="100"></a><?php }?>
	<?php if(is_file(UPLOAD_FOLDER.$rows->gimage)){?>
	<a href="<?php echo H_ADMIN;?>&view=hgallery&gid=<?php echo $rows->gid;?>&dfile=<?php echo $rows->gimage;?>&do=delete&fdel=file&catid=<?php echo get('catid');?>&ctype=<?php echo get('ctype');?>" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><span class="btn btn-xs btn-danger"><i class="fa fa-remove"></i> <?php echo LANG_DELETE;?></span></a><br><?php }?>
	
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
	