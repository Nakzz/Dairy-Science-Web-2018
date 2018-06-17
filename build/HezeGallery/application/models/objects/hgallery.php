
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
	
	include_once(APP_FOLDER.'/models/classes/class_hgallery.php');
	
	class hgallery_model{
	
	// SELECT ALL
	public function SelectAll($ctype,$id=NULL,$limit=NULL)
	{
	$dbc = new dboptions();
	$startpg = pageparam($limit);
	if($id){
	$record = $dbc->rawSelect ("SELECT * FROM hgallery WHERE ctype='$ctype' AND catid='$id' ORDER BY listorder LIMIT {$startpg} , {$limit}");
	}else{
	$record = $dbc->rawSelect ("SELECT * FROM hgallery WHERE ctype='$ctype' ORDER BY listorder LIMIT {$startpg} , {$limit}");	
	}
	return $record->fetchAll(PDO::FETCH_OBJ);
	}
	
	//Select Count for Pagination
	public function CountRow($ctype,$id=NULL)
	{
	$dbc = new dboptions();
	if($id){
	return $dbc->SelectCount("SELECT COUNT(*) as num FROM hgallery WHERE ctype='$ctype' AND catid='$id'");
	}else{
	return $dbc->SelectCount("SELECT COUNT(*) as num FROM hgallery WHERE ctype='$ctype'");
	}
	}
	
	//using infinite scroll ajax
	public function SelectAllApproved($offset,$postnumbers,$id=NULL)
	{
	$dbc = new dboptions();
	if($id){
	$record = $dbc->rawSelect ("SELECT * FROM hgallery WHERE catid='$id' ORDER BY listorder LIMIT ".$postnumbers." OFFSET ".$offset);
	}else{
	$record = $dbc->rawSelect ("SELECT * FROM hgallery ORDER BY listorder LIMIT ".$postnumbers." OFFSET ".$offset);	
	}
	return $record->fetchAll(PDO::FETCH_OBJ);
	}
	
		
	// SELECT ONE
	public function SelectOne($id)
	{
	$db=DB::getInstance();
    $sql = "SELECT * FROM hgallery WHERE gid=:id";
	$stmt=$db->prepare($sql);
	$stmt->bindParam(':id',$id, PDO::PARAM_INT);
	$stmt->execute();
	return $stmt->fetch(PDO::FETCH_OBJ);
	}
	
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$dbc = new dboptions();
	$dbc->dbDelete('hgallery', 'gid',$id);
	send_to($redirect_to);
	}
	
	// INSERT UserID()
	public function Insert($bigimg,$redirect_to)
	{
	$dbc=new dboptions();

	$submit=post('button');
	if($submit){

	$newupload = new UploadControl;
	$uploadname=$newupload->ImageUplaodResize('gimage',THUMB_IMAGE_WIDTH,$bigimg,UPLOAD_PATH,THUMB_PATH,90);
	if($uploadname==''){
	$values = array(array('catid'=>post('catid'),'gtitle'=>post('gtitle'),'gdesc'=>post('gdesc'),'gdate'=>DATE_SET,'created_by'=>UserID(),'published'=>'YES','animation'=>post('animation'),'caption_align'=>post('caption_align'),'ctype'=>post('ctype')));
	}else{
	$values = array(array( 'gimage'=>$uploadname,'catid'=>post('catid'),'gtitle'=>post('gtitle'),'gdesc'=>post('gdesc'),'gdate'=>DATE_SET,'created_by'=>UserID(),'published'=>'YES','animation'=>post('animation'),'caption_align'=>post('caption_align'),'ctype'=>post('ctype')));
	}
	$dbc->dbInsert('hgallery', $values);
	send_to($redirect_to);
	}
	}
	
	// UPDATE
	public function Update($redirect_to)
	{
	$id=post('gid');
	$this->gorder=post('gorder');
	$this->catid=post('catid');
	$this->gtitle=post('gtitle');
	$this->gdesc=post('gdesc');
	$this->gimage=post('gimage');
	$this->gdate=post('gdate');
	$ctype=post('ctype');
	$animation=post('animation');
	$caption_align=post('caption_align');
	$last_upated=DATE_SET;
	$last_updated_by=UserID();
	
	$submit=post('button');
	if($submit){

	$db=DB::getInstance();
	$newupload = new UploadControl;
	if(get('ctype')=='slider'){
	$uploadname=$newupload->ImageUplaodResize('gimage',THUMB_IMAGE_WIDTH,SLIDER_IMAGE_WIDTH,UPLOAD_PATH,THUMB_PATH,90);
	}else{
	$uploadname=$newupload->ImageUplaodResize('gimage',THUMB_IMAGE_WIDTH,BIG_IMAGE_WIDTH,UPLOAD_PATH,THUMB_PATH,90);
	}
	if($uploadname==''){
	$sql = " UPDATE hgallery SET  gtitle ='$this->gtitle',gdesc ='$this->gdesc',last_updated_by ='$last_updated_by',last_updated ='$last_upated',animation ='$animation',caption_align ='$caption_align' WHERE gid = :id ";
	}else{
	$sql = " UPDATE hgallery SET  gimage='$uploadname', gtitle ='$this->gtitle',gdesc ='$this->gdesc',last_updated_by ='$last_updated_by',last_updated ='$last_updated',animation ='$animation',caption_align ='$caption_align' WHERE gid = :id ";
	}
	$stmt=$db->prepare($sql);
	$stmt->bindParam(':id',$id, PDO::PARAM_INT);
	$stmt->execute();
	send_to($redirect_to);
	}
	}
	
	// Save Order
	public function SaveOrder()
	{
	$db=DB::getInstance();
	$array	= $_POST['arrayorder'];
	if ($_POST['update'] == "update"){
	$count=1;
	foreach ($array as $id) {
	$sql="UPDATE hgallery SET  listorder='$count' WHERE gid = :id";
	$stmt=$db->prepare($sql);
	$stmt->bindParam(':id',$id, PDO::PARAM_INT);
	$stmt->execute();
	$count++;	
	}
	}
	}
	
	} // end class
	
	?>
	
	