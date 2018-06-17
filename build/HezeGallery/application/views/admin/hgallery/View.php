
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
    
     <a href="<?php echo H_ADMIN;?>&view=categories&do=viewall&ctype=<?php echo get('ctype');?>" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>

<?php if(get('ctype')=='slider'){;?>
<a href="<?php echo H_ADMIN;?>&view=hgallery&do=addslide&catid=<?php echo get('catid');?>&ctype=<?php echo get('ctype');?>" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> <?php echo LANG_CREATE_SLIDER;?></a>
 <?php }else{?>
 <a href="<?php echo H_ADMIN;?>&view=hgallery&do=add&catid=<?php echo get('catid');?>&ctype=<?php echo get('ctype');?>" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> <?php echo LANG_ADD;?></a>
    
     <a href="<?php echo H_ADMIN;?>&view=hgallery&do=addmulti&catid=<?php echo get('catid');?>&ctype=<?php echo get('ctype');?>" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> <?php echo LANG_MULTI_UPLOAD;?></a>  
 <?php }?>
	</ul>
	
	<div class="panel panel-default">

  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i><strong>  <?php if(get('catid'))echo CatName(get('catid'));?> Gallery</strong></h3></div>
  <div class="panel-body">
  
   <div class="row" id="hezedrag"> 
 <?php foreach($result as $rows){ ?>
      
        <div class="col-md-2 col-sm-4 col-xs-6 thumb gallery" id="arrayorder_<?php echo $rows->gid; ?>">
        <?php if(is_file(UPLOAD_FOLDER.$rows->gimage)){?><a href="<?php echo UPLOAD_FOLDER.$rows->gimage;?>" data-rel="hezebox" class="thumbnail" data-caption="" ><img src="<?php echo THUMB_FOLDER.$rows->gimage;?>" class="img-responsive" ></a><?php }?>
        
        <div class="panel-footer text-center" style="margin-top:-20px;"">
                     <a href="<?php echo H_ADMIN;?>&view=hgallery&gid=<?php echo $rows->gid;?>&do=details&catid=<?php echo get('catid');?>&ctype=<?php echo $rows->ctype;?>"  class="btn btn-primary btn-xs tip" title="<?php echo LANG_TIP_DETAILS;?>"><span class="fa fa-search-plus" ></span></a>
                     
	<a href="<?php echo H_ADMIN;?>&view=hgallery&gid=<?php echo $rows->gid;?>&do=update&catid=<?php echo get('catid');?>&ctype=<?php echo $rows->ctype;?>" class="btn btn-info btn-xs tip" title="<?php echo LANG_TIP_UPDATE;?>"><span class="fa fa-edit"></span></a>
    
	 <a href="<?php echo H_ADMIN;?>&view=hgallery&gid=<?php echo $rows->gid;?>&do=delete&dfile=<?php echo $rows->gimage;?>&catid=<?php echo get('catid');?>&ctype=<?php echo $rows->ctype;?>" class="btn btn-danger btn-xs tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>" title="<?php echo LANG_TIP_DELETE;?>"><span class="fa fa-times"></span></a>
                </div>
        </div>
     
	<?php }?>
    </div>
    
  </div>
	
	
    
<ul class="pagination"><?php echo $paging;?></ul>

</div>
 </div><!--/col-12-->
 </div><!--/heze-table-->