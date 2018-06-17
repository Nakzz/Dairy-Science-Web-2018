
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
	
	include_once(APP_FOLDER.'/models/classes/class_admin_users.php');
	
	class admin_users_model{
	
	// SELECT ALL
	public function SelectAll($limit=null)
	{
	$dbc = new dboptions();
	if($limit){
	$startpg = pageparam($limit);
	$record = $dbc->rawSelect ("SELECT * FROM admin_users LIMIT {$startpg} , {$limit}");
	}else{
	$record = $dbc->rawSelect ("SELECT * FROM admin_users");	
	}
	return $record->fetchAll(PDO::FETCH_OBJ);
	}
	
	//Select Count for Pagination
	public function CountRow()
	{
	$dbc = new dboptions();
	return $dbc->SelectCount('SELECT COUNT(*) as num FROM admin_users');
	}
	// SELECT ONE
	public function SelectOne($id)
	{
	$db=DB::getInstance();
    $sql = "SELECT * FROM admin_users WHERE userid=:id";
	$stmt=$db->prepare($sql);
	$stmt->bindParam(':id',$id, PDO::PARAM_INT);
	$stmt->execute();
	return $stmt->fetch(PDO::FETCH_OBJ);
	}
	
	// SELECT ONE
	public function SelectUserID($id)
	{
	$db=DB::getInstance();
    $sql = "SELECT userid FROM admin_users WHERE username=:id";
	$stmt=$db->prepare($sql);
	$stmt->bindParam(':id',$id, PDO::PARAM_INT);
	$stmt->execute();
	return $stmt->fetch(PDO::FETCH_OBJ);
	}
	
	// TRUNCATE TABLE
	public function TruncateTable($redirect_to)
	{
	$db=DB::getInstance();
   	$sql=$db->prepare("TRUNCATE admin_users");
	$sql->execute();
	send_to($redirect_to);
	}
	
	// TRUNCATE TABLE
	public function CustomShow()
	{
	$db=DB::getInstance();
   	$sql = "SHOW TABLES";
    return $db->query($sql);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$dbc = new dboptions();
	$dbc->dbDelete('admin_users', 'userid',$id);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($name,$email,$phone,$username,$password,$membership,$user_status,$user_position,$access_level,$date_created,$last_login_date,$last_login_ip)
	{
	$dbc=new dboptions();

	$newupload = new UploadControl;
	$uploadname=$newupload->ImageUplaodResize('user_avarta',THUMB_IMAGE_WIDTH,BIG_IMAGE_WIDTH,UPLOAD_PATH,THUMB_PATH,90);
	if($uploadname==''){
	$values = array(array( 'name'=>$name,'email'=>$email,'phone'=>$phone,'username'=>$username,'password'=>$password,'membership'=>$membership,'user_status'=>$user_status,'user_position'=>$user_position,'access_level'=>$access_level,'date_created'=>$date_created,'last_login_date'=>$last_login_date,'last_login_ip'=>$last_login_ip ));
	}else{
	$values = array(array( 'user_avarta'=>$uploadname,'name'=>$name,'email'=>$email,'phone'=>$phone,'username'=>$username,'password'=>$password,'membership'=>$membership,'user_status'=>$user_status,'user_position'=>$user_position,'access_level'=>$access_level,'date_created'=>$date_created,'last_login_date'=>$last_login_date,'last_login_ip'=>$last_login_ip ));
	}
	$dbc->dbInsert('admin_users', $values);
	}
	
	// UPDATE
	public function Update($name,$email,$phone,$membership,$user_status,$user_position,$access_level,$id)
	{
	$db=DB::getInstance();
	$newupload = new UploadControl;
	$uploadname=$newupload->ImageUplaodResize('user_avarta',THUMB_IMAGE_WIDTH,BIG_IMAGE_WIDTH,UPLOAD_PATH,THUMB_PATH,90);
	if($uploadname==''){
		$sql = " UPDATE admin_users SET  name ='$name',email ='$email',phone ='$phone',membership ='$membership',user_status ='$user_status',user_position ='$user_position',access_level ='$access_level' WHERE userid = :id ";
	}else{
	$sql = " UPDATE admin_users SET  user_avarta='$uploadname',name ='$name',email ='$email',phone ='$phone',membership ='$membership',user_status ='$user_status',user_position ='$user_position',access_level ='$access_level' WHERE userid = :id ";	
	}
	$stmt=$db->prepare($sql);
	$stmt->bindParam(':id',$id, PDO::PARAM_INT);
	$stmt->execute();
	}
	
	// UPDATE
	public function UpdatePassword($password,$id)
	{
	$db=DB::getInstance();
	$sql = " UPDATE admin_users SET  password ='$password' WHERE userid = :id ";
	$stmt=$db->prepare($sql);
	$stmt->bindParam(':id',$id, PDO::PARAM_INT);
	$stmt->execute();
	}
	
	// UPDATE EXEMPT
	public function UpdateExempt($name,$email,$phone,$id)
	{
	$db=DB::getInstance();
	$newupload = new UploadControl;
	$uploadname=$newupload->ImageUplaodResize('user_avarta',THUMB_IMAGE_WIDTH,BIG_IMAGE_WIDTH,UPLOAD_PATH,THUMB_PATH,90);
	if($uploadname==''){
	$sql = " UPDATE admin_users SET  name ='$name',email ='$email',phone ='$phone' WHERE userid = :id ";
	}
	else{
	$sql = " UPDATE admin_users SET  user_avarta='$uploadname',name ='$name',email ='$email',phone ='$phone' WHERE userid = :id ";	
	}
	$stmt=$db->prepare($sql);
	$stmt->bindParam(':id',$id, PDO::PARAM_INT);
	$stmt->execute();
	}
	
	
	} // end class
	
	?>
	
	