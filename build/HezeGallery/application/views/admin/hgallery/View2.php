
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
	 AjaxDragAndDrop(''.H_ADMIN.'&view=hgallery&do=saveorder');
	?>
	
	<div class="heze-table">
	<div class="col-lg-12">	
	<ul class="nav nav-tabs pull-right">
    
     <?php if(get('client_id')){?>
     <a href="<?php echo H_ADMIN;?>&view=clients&do=details&client_id=<?php echo get('client_id');?>" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
     
	 <?php }else{?>
     <a href="<?php echo H_ADMIN;?>&view=categories&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
<?php }?>
        <a href="<?php echo H_ADMIN;?>&view=hgallery&do=addmulti&catid=<?php echo get('catid');?>" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> <?php echo LANG_MULTI_UPLOAD;?></a>

	<a href="<?php echo H_ADMIN;?>&view=hgallery&do=add&catid=<?php echo get('catid');?>" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> <?php echo LANG_ADD;?></a>
 
	</ul>
	
	<div class="panel panel-default">

  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i><strong> <?php echo ucwords(ClientName(get('client_id')));?> <?php echo CatName(get('catid'));?> Gallery</strong></h3></div>
  <div class="panel-body">
  
    

 
 
<div class="row"> 
 <?php foreach($result as $rows){ ?>
  <?php if(is_file(UPLOAD_FOLDER.$rows->gimage)){?>
  
 <a href="<?php echo UPLOAD_FOLDER.$rows->gimage;?>" class=" col-lg-3 col-md-4 col-xs-6 thumb" data-toggle="lightbox" data-gallery="multiimages" data-title="People walking down stairs" style="padding-right:10px;"><img src="<?php echo THUMB_FOLDER.$rows->gimage;?>" class="img-responsive">
 </a>
 <?php }}?>
 </div>

	
    
<ul class="pagination"><?php echo $paging;?></ul>

</div>
 </div><!--/col-12-->
 </div><!--/heze-table-->