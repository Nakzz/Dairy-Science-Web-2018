	<?php
	/*
	* =======================================================================
	* CLASSNAME:        class_database.php
	* DATE CREATED:  	11-11-2013
	* FOR TABLE:  		admin_users
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	if(post('Logme')){ 
	if (post('username')==ADMIN_USERNAME and post('password')==ADMIN_PASSWORD) 
	{
	$_SESSION['admin_user'] = ADMIN_USERNAME;
	$_SESSION['admin_pwd'] = ADMIN_PASSWORD;
	send_to(htmlspecialchars($_SERVER['PHP_SELF']));
	}else{
	echo'<span class="btn btn-danger">'.LANG_ADMIN_ERROR.'</span>';
	}
}
?>
	
    <div class="mylogin">
    <div class="col-lg-6">
    <div class="container">
    <div class="row">
    <h5><?php echo LANG_ADMIN_LOGIN;?></h5>
    <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" name="admin" role="form" id="hezecomform">
    <fieldset>
    <div class="form-group">
    <input type="text" name="username" class="form-control"  placeholder="<?php echo LANG_ADMIN_USERNAME;?>" required>
    </div>
    <div class="form-group">
    <input type="password" name="password" class="form-control"  placeholder="<?php echo LANG_ADMIN_PASSWORD;?>" required>
    </div>
    
     <div class="controls">
	 <div class="col-md-3" style="padding:0;">
	 <input name="Logme" class="btn btn-primary" type="submit" value="<?php echo LANG_ADMIN_BUTTON;?>">
	 </div>
	 <div class="col-md-3" style="padding:0;">
	 <div id="output"></div>
	 </div>
	 </div>

    </fieldset>
    </form>
    
    </div>
    </div>
    </div>
    </div>
