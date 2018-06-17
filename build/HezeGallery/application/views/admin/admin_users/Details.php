
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
	<a href="<?php echo H_ADMIN;?>&view=admin_users&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=admin_users&userid=<?php echo $rows->userid;?>&do=updatepwd" title="<?php echo LANG_TIP_UPDATE;?> Record" class="btn btn-default btn-sm tip"><i class="fa fa-lock"></i> Change Password</a>
    
	<a href="<?php echo H_ADMIN;?>&view=admin_users&userid=<?php echo $rows->userid;?>&do=update" title="<?php echo LANG_TIP_UPDATE;?> Record" class="btn btn-default btn-sm tip"><i class="fa fa-edit"></i> <?php echo LANG_UPDATE;?></a>
	
	<a href="<?php echo H_ADMIN;?>&view=admin_users&userid=<?php echo $rows->userid;?>&do=delete&dfile=" title="<?php echo LANG_TIP_DELETE_ALL;?>" class="btn btn-default btn-sm tip" data-confirm="<?php echo LANG_DELETE_AUTH;?>"><i class="fa fa-trash-o"></i> <?php echo LANG_DELETE;?></a>
	</ul>
	
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> Admin User <?php echo LANG_DETAILS;?></h3></div>
  <div class="panel-body">
   
  </div>
	<table class="table table-striped table-bordered" data-page-size="100">
	 <tbody>
		  	
	<tr>
	<th width="86">Name</th><td width="197"><?php echo $rows->name;?></td>
	<td width="36" rowspan="5" class='gallery' align="center">
	  <?php if(is_file(UPLOAD_FOLDER.$rows->user_avarta)){?>
	  <a href='<?php echo UPLOAD_FOLDER.$rows->user_avarta;?>' data-rel='hezebox'><img src='<?php echo THUMB_FOLDER.$rows->user_avarta;?>' style="width:200px; height:200px;" /></a>
	  <?php }else{?>
       <span class="fa fa-user" style="color:#CCC; font-size:150px;"></span>
       <?php }?>
	</td>
	</tr>
		
	<tr>
	<th>Email</th><td><?php echo $rows->email;?></td>
	</tr>
		
	<tr>
	<th>Phone</th><td><?php echo $rows->phone;?></td>
	</tr>
		
	<tr>
	<th>Username</th><td><?php echo $rows->username;?></td>
	</tr>

	<tr>
	<th>User Status</th><td><?php echo $rows->user_status;?></td>
	</tr>
		
	<tr>
	<th>User Position</th><td colspan="2"><?php echo $rows->user_position;?></td>
	</tr>
		
	<tr>
	  <th>Date Created</th><td colspan="2"><?php echo $rows->date_created;?></td>
	  </tr>
		
	
	</tbody>
	</table>
	</div>
 </div><!--/col-12-->
 </div><!--/heze-table-->
	