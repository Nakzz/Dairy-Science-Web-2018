
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
	<a href="<?php echo H_ADMIN;?>&view=admin_users&do=add" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_ADD;?>"><i class="fa fa-plus"></i> Create User</a>
	<a href="<?php echo H_ADMIN;?>&view=admin_users&do=export&hexport=yes&etype=printer" target="_blank" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_PRINT;?>"><i class="fa fa-print"></i> <?php echo LANG_PRINT;?></a>
	<a href="<?php echo H_ADMIN;?>&view=admin_users&do=export&hexport=yes&etype=excel" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_EXCEL;?>"><i class="fa fa-table"></i> <?php echo LANG_EXCEL;?></a>
	
	</ul>
	
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> Admin Users</h3></div>
  <div class="panel-body">
   <p>
	<input id="filter" class="input-sm" type="text" placeholder="<?php echo LANG_QUICK_SEARCH;?>"/>
	</p>
  </div>
	
	<table class="table table-bordered table-hover table-striped" data-filter="#filter" data-page-size="<?php echo RECORD_PER_PAGE;?>" data-page-previous-text="<?php echo LANG_PREVIOUS;?>" data-page-next-text="<?php echo LANG_NEXT;?>">
	<thead>
    <tr>
      <th width="291">Name</th>
	  <th width="226" data-hide="phone,tablet">Email</th>
	  <th width="198" data-hide="phone,tablet">Phone</th>
	  <th width="156" data-hide="phone,tablet">Username</th>
	  <th width="107"><?php echo LANG_ACTIONS;?></th>
	</tr>
  </thead>
  <tbody>
  
   <?php
	foreach($result as $rows)
			{
	?>
	<tr>
	<td><?php echo $rows->name;?></td>
	<td><?php echo $rows->email;?></td>
	<td><?php echo $rows->phone;?></td>
	<td><?php echo $rows->username;?></td>
	<td class="table-actions">
	 <div class="btn-group">
     <a href="<?php echo H_ADMIN;?>&view=admin_users&userid=<?php echo $rows->userid;?>&do=updatepwd"  class="btn btn-info btn-xs"><span class="fa fa-lock tip" title="Change Password"></span></a>
	 <a href="<?php echo H_ADMIN;?>&view=admin_users&userid=<?php echo $rows->userid;?>&do=details"  class="btn btn-info btn-xs"><span class="fa fa-search-plus tip" title="<?php echo LANG_TIP_DETAILS;?>"></span></a>
	<a href="<?php echo H_ADMIN;?>&view=admin_users&userid=<?php echo $rows->userid;?>&do=update" class="btn btn-primary btn-xs"><span class="fa fa-edit tip" title="<?php echo LANG_TIP_UPDATE;?>"></span></a>
	 <a href="<?php echo H_ADMIN;?>&view=admin_users&userid=<?php echo $rows->userid;?>&do=delete&dfile=<?php echo $rows->user_avarta;?>" class="btn btn-danger btn-xs" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><span class="fa fa-times tip" title="<?php echo LANG_TIP_DELETE;?>"></span></a>
     
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