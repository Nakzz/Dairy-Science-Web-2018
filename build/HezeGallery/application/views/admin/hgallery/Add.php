
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
	<a href="<?php echo H_ADMIN;?>&view=hgallery&do=viewall&catid=<?php echo get('catid');?>&ctype=<?php echo get('ctype');?>" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_CREATE_NEW;?> <?php echo CatName(get('catid'));?> Gallery</h3></div>
  <div class="panel-body pformmargin">
	
	 
	 <p>
	 <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
     
	<input type="hidden" name="catid" value="<?php echo get('catid');?>">
    <input type="hidden" name="ctype" value="<?php echo get('ctype');?>">
    
	<div class="form-group">
    <label class="control-label" for="gtitle">Title</label>
	<input id="gtitle" name="gtitle" type="text" maxlength="100"  value="" class="form-control styler" />
	</div>

	<div class="form-group">
    <label class="control-label" for="gimage">Image</label>
	<input id="gimage" name="gimage"type="file" class="form-control styler"/>
	</div>

	<div class="form-group">
    <label class="control-label" for="gdesc">Description</label>
	<?php //HezecomEditor('gdesc'); ?>
		<textarea rows="5" id="gdesc" name="gdesc" class="form-control " /></textarea>
	</div>


	 <div class="controls">
	 <div class="col-md-2" style="padding:0;">
	 <input type="submit" name="button" id="hButton" class="btn btn-primary btn-lg" value="<?php echo LANG_CREATE_RECORD;?>" />
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
	