
<li><a href="<?php echo H_ADMIN;?>&view=categories&do=viewall"><i class="fa fa-folder-open"></i> Gallery Categories</a></li>
<li><a href="<?php echo H_ADMIN;?>&view=hgallery&do=viewall"><i class="fa fa-picture-o"></i> Photo Gllery</a></li>
 <?php if(UserAccess()->user_position=='Super Admin'){?>
 <li><a href="<?php echo H_ADMIN;?>&view=admin_users&do=viewall"><i class="fa fa-eye"></i> Admin Users</a></li>
<li><a href="<?php echo H_ADMIN;?>&view=admin_users&do=setup"><i class="fa fa-cog"></i> Settings</a></li>
<?php }?>