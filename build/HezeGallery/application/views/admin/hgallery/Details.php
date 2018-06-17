
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
	<div class="col-lg-12">
	
	<ul class="nav nav-tabs pull-right">
    
    
	<a href="<?php echo H_ADMIN;?>&view=hgallery&do=viewall&catid=<?php echo get('catid');?>&ctype=<?php echo get('ctype');?>" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
		
	<a href="<?php echo H_ADMIN;?>&view=hgallery&gid=<?php echo $rows->gid;?>&do=update&catid=<?php echo get('catid');?>&ctype=<?php echo get('ctype');?>" title="<?php echo LANG_TIP_UPDATE;?> Record" class="btn btn-default btn-sm tip"><i class="fa fa-edit"></i> <?php echo LANG_UPDATE;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=hgallery&gid=<?php echo $rows->gid;?>&do=delete&dfile=<?php echo $rows->gimage;?>&catid=<?php echo get('catid');?>&ctype=<?php echo get('ctype');?>" title="<?php echo LANG_TIP_DELETE_ALL;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	</ul>
	
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo CatName(get('catid'));?> Gallery <?php echo LANG_DETAILS;?></h3></div>
  <div class="panel-body">
   
  </div>
	<table class="table table-striped table-bordered">
	 <tbody>
		  	


	<tr>
	<th> Title</th><td><?php echo $rows->gtitle;?></td>
	</tr>
    <tr>
	<th> Animation</th><td><?php echo $rows->animation;?></td>
	</tr>
    <tr>
	<th> Caption Text Align</th><td><?php echo $rows->caption_align;?></td>
	</tr>
		
	<tr>
	<th>Description</th><td><?php echo nl2br($rows->gdesc);?></td>
	</tr>
		
	<tr>
	<th>Image</th><td class='gallery'><?php if(is_file(UPLOAD_FOLDER.$rows->gimage)){?><a href='<?php echo UPLOAD_FOLDER.$rows->gimage;?>' data-rel='hezebox'><img src='<?php echo THUMB_FOLDER.$rows->gimage;?>'></a><?php }?></td>
	</tr>
		
	<tr>
	<th>Create on</th><td><?php echo $rows->gdate;?></td>
	</tr>
    
    <tr>
	<th>Last Updated on</th><td><?php echo $rows->last_updated;?></td>
	</tr>
    
   <!-- <tr>
	<th>Last Updated by </th><td><?php //echo UserName($rows->last_updated_by);?></td>
	</tr>-->
		
	</tbody>
	</table>
	</div>
 </div><!--/col-12-->
 </div><!--/heze-table-->
	