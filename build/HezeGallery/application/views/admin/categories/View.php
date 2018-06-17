
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
	<a href="<?php echo H_ADMIN;?>&view=categories&do=add&ctype=<?php echo get('ctype');?>" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> Create Categories</a>
	
	</ul>
	
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <strong><?php echo ucwords( str_replace('_',' ',get('ctype')));?> Categories</strong></h3></div>
  <div class="panel-body">
   <p>
	<input id="filter" class="input-sm" type="text" placeholder="<?php echo LANG_QUICK_SEARCH;?>"/>
	</p>
  </div>
	
	<table class="table table-bordered table-hover table-striped" data-filter="#filter" data-page-size="<?php echo RECORD_PER_PAGE;?>" data-page-previous-text="<?php echo LANG_PREVIOUS;?>" data-page-next-text="<?php echo LANG_NEXT;?>">
	<thead>
    <tr>
      <th>Created By</th>
	  <th>Category Name</th>
	  <th data-hide="phone,tablet">Category Type</th>
	  <th data-hide="phone,tablet">Cover Image</th>
	  <th data-hide="phone,tablet">Date Created</th>
      <th>Open</th>
	  <th><?php echo LANG_ACTIONS;?></th>
	</tr>
  </thead>
  <tbody>
  
   <?php
	foreach($result as $rows)
			{
	
	$current='hgallery';	
	?>
	<tr>
	<td><?php echo UserName($rows->created_by);?></td>
	<td><?php echo $rows->category_name;?> (<strong style="color:#0C6;"><?php echo RecordsCount($rows->catid,$current);?></strong>)</td>
	<td><?php echo $rows->category_type;?></td>
	<td> <div class='gallery'><?php if(is_file(UPLOAD_FOLDER.$rows->coverimg)){?><a href='<?php echo UPLOAD_FOLDER.$rows->coverimg;?>' data-rel='hezebox'><img src='<?php echo THUMB_FOLDER.$rows->coverimg;?>' width="50" height="50"></a>
	<?php }else{?>
    <span align="center" class="btn btn-default"><a href="#"><i class="fa fa-picture-o"></i></a> No Image</span>
    <?php }?>
    </td>
	<td><?php echo $rows->date_created;?></td>
    
   <td align="center"><span align="center" class="btn btn-default"><a href="<?php echo H_ADMIN;?>&view=<?php echo $current;?>&do=viewall&catid=<?php echo $rows->catid;?>&ctype=<?php echo $rows->category_type;?>" title="<?php echo LANG_OPEN_CATEGORY;?>" class="tip"><i class="fa fa-camera"></i> Open
	</a></span></td>
	<td class="table-actions">
	 <div class="btn-group">
	 <a href="<?php echo H_ADMIN;?>&view=categories&catid=<?php echo $rows->catid;?>&do=details&ctype=<?php echo get('ctype');?>"  class="btn btn-default btn-xs"><img src="<?php echo H_THEME;?>/images/details.png" class="tip" title="<?php echo LANG_TIP_DETAILS;?>"></a>
	<a href="<?php echo H_ADMIN;?>&view=categories&catid=<?php echo $rows->catid;?>&do=update&ctype=<?php echo get('ctype');?>" class="btn btn-default btn-xs"><img src="<?php echo H_THEME;?>/images/update.png"  class="tip" title="<?php echo LANG_TIP_UPDATE;?>"></a>
	 <a href="<?php echo H_ADMIN;?>&view=categories&catid=<?php echo $rows->catid;?>&do=delete&dfile=<?php echo $rows->coverimg;?>&ctype=<?php echo get('ctype');?>" class="btn btn-default btn-xs" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><img src="<?php echo H_THEME;?>/images/delete.png"  class="tip" title="<?php echo LANG_TIP_DELETE;?>"></a>
	 </div>
	 </td>
    </tr>
	<?php }?>
  </tbody>
 <?php if(PAGINATION_TYPE=="Jquery"){?>
	<tfoot>
	<tr>
	<td colspan="6">
	<ul class="pagination pull-right"></ul>
	</td>
	</tr>
	</tfoot>
	<?php }?>
</table>
<?php if(PAGINATION_TYPE=="Normal"){ ?> 
<ul class="pagination"><?php echo $paging;?></ul>
<?php }?>

</div>
 </div><!--/col-12-->
 </div><!--/heze-table-->