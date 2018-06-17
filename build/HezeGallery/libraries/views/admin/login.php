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
$dbc=new dboptions();
//$dbc->logged_in_protect();
$errors = array();

if (empty($_POST) === false) {

	$username = trim(post('username'));
	$password = trim(post('password'));

	if (empty($username) === true || empty($password) === true) {
		$errors[] = 'Please enter your username and password.';
	} else if ($dbc->user_exist_checker($username,'admin_users') === false) {
		$errors[] = 'Sorry that username doesn\'t exists.';
	} else if ($dbc->account_activation($username,'admin_users') === false) {
		$errors[] = 'Sorry, but you need to activate your account.';
	} else {
		if (strlen($password) > 30) {
			$errors[] = 'The password should be less than 30 characters, without spacing.';
		}
		$login = $dbc->HezeLogin($username, $password,'admin_users');
		if ($login === false) {
			$errors[] = 'Invalid Username or Password';
		}else {
			$_SESSION['admin_user'] =  $login;
			send_to(''.H_ADMIN.'&view=categories&do=viewall');
			exit();
		}
	}
} 
?>


    <div class="col-lg-6">
	
    <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" name="admin" class="form-signin" role="form" id="hezecomform">
    <div class="form-group">
	<h2 class="form-signin-heading"><?php echo LANG_ADMIN_LOGIN;?></h2>
    <?php form_errors($errors)?>
    </div>
    
    <div class="form-group">
    <input type="text" name="username" class="form-control"  placeholder="<?php echo LANG_ADMIN_USERNAME;?>" required>
    </div>
    <div class="form-group">
    <input type="password" name="password" class="form-control"  placeholder="<?php echo LANG_ADMIN_PASSWORD;?>" required>
    </div>
    
      <div class="controls">
	 <div class="col-md-8" style="padding:0;">
	 <input name="Logme" class="btn btn-primary btn-lg " type="submit" value="<?php echo LANG_ADMIN_BUTTON;?>">
	 </div>
	 <div class="col-md-4" style="padding:0;">
	 <div id="output"></div>
	 </div>
	 </div>

    </form>
    
    </div>
