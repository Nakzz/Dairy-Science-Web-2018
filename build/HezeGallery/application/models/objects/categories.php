
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
	
	include_once(APP_FOLDER.'/models/classes/class_categories.php');
	
	class categories_model{
	
	// SELECT ALL
	public function SelectAll($type,$limit=10000)
	{
	$dbc = new dboptions();
	$startpg = pageparam($limit);
	if($type){
	$record = $dbc->rawSelect ("SELECT * FROM categories WHERE category_type='$type' ORDER BY catid ASC LIMIT {$startpg} , {$limit}");
	}else{
	$record = $dbc->rawSelect ("SELECT * FROM categories ORDER BY catid LIMIT {$startpg} , {$limit}");
	}
	return $record->fetchAll(PDO::FETCH_OBJ);
	}
	//Select Count for Pagination
	public function CountRow($type)
	{
	$dbc = new dboptions();
	if($type){
	return $dbc->SelectCount("SELECT COUNT(*) as num FROM categories WHERE category_type='$type'");
	}else{
	return $dbc->SelectCount("SELECT COUNT(*) as num FROM categories");	
	}
	}
	// SELECT Category For Menu
	public function ListCategory($type,$limit=10000)
	{
	$dbc = new dboptions();
	$record = $dbc->rawSelect("SELECT * FROM categories WHERE category_type='$type'  LIMIT 0 , $limit");
	return $record->fetchAll(PDO::FETCH_OBJ);
	}
	//LIST CATEGORY
	public function CategoryGroupList($type=NULL,$limit=NULL)
	{
	$dbc = new dboptions();
	if($limit){
	$startpg = pageparam($limit);
	$record = $dbc->rawSelect("SELECT COUNT(categories.catid) AS totalout, categories.*
	FROM hgallery INNER JOIN categories ON (hgallery.catid = categories.catid) WHERE categories.category_type='$type'
	GROUP BY categories.catid ORDER BY categories.catid DESC LIMIT $limit");
	}else{
	$record = $dbc->rawSelect("SELECT COUNT(hgallery.catid) AS totalout, categories.*
	FROM hgallery INNER JOIN categories ON (hgallery.catid = categories.catid) WHERE categories.category_type='$type'
	GROUP BY categories.catid ORDER BY categories.catid DESC  ");	
	}
	return $record->fetchAll(PDO::FETCH_OBJ);
	}
	// SELECT ONE
	public function SelectOne($id)
	{
	$db=DB::getInstance();
    $sql = "SELECT * FROM categories WHERE catid=:id";
	$stmt=$db->prepare($sql);
	$stmt->bindParam(':id',$id, PDO::PARAM_INT);
	$stmt->execute();
	return $stmt->fetch(PDO::FETCH_OBJ);
	}
	
	// DELETE
	public function Delete($id,$redirect_to)
	{
	$db=DB::getInstance();
	$dbc = new dboptions();
    $sql = "SELECT gimage FROM hgallery WHERE gid=:id";
	$stmt=$db->prepare($sql);
	$stmt->bindParam(':id',$id, PDO::PARAM_INT);
	$stmt->execute();
	$results= $stmt->fetchAll(PDO::FETCH_OBJ);
	foreach($results as $rowt){ 
	delete_files(UPLOAD_PATH.$rowt->gimage);
	delete_files(THUMB_PATH.$rowt->gimage);
	}
	$dbc->dbDelete('categories', 'catid',$id);
	$dbc->dbDelete('hgallery', 'catid',$id);
	send_to($redirect_to);
	}
	
	// INSERT
	public function Insert($redirect_to)
	{
	$dbc=new dboptions();

	$submit=post('button');
	if($submit){

	$newupload = new UploadControl;
	$uploadname=$newupload->ImageUplaodResize('coverimg',THUMB_IMAGE_WIDTH,BIG_IMAGE_WIDTH,UPLOAD_PATH,THUMB_PATH,90);
	if($uploadname==''){
	$values = array(array( 'created_by'=>UserID(),'category_name'=>post('category_name'),'category_notes'=>post('category_notes'),'category_position'=>post('category_position'),'category_type'=>post('category_type'),'date_created'=>DATE_SET ));
	}else{
	$values = array(array( 'coverimg'=>$uploadname,'created_by'=>UserID(),'category_name'=>post('category_name'),'category_notes'=>post('category_notes'),'category_position'=>post('category_position'),'category_type'=>post('category_type'),'date_created'=>DATE_SET));
	}
	$dbc->dbInsert('categories', $values);
	send_to($redirect_to);
	}
	}
	
	// UPDATE
	public function Update($redirect_to)
	{
	$id=post('catid');
	$this->category_name=post('category_name');
	$this->category_notes=post('category_notes');
	$this->category_type=post('category_type');
	$this->category_position=post('category_position');
	$this->coverimg=post('coverimg');
	$this->last_updated=DATE_SET;
	$this->last_updated_by=UserID();
	
	$submit=post('button');
	if($submit){

	$db=DB::getInstance();
	$newupload = new UploadControl;
	$uploadname=$newupload->ImageUplaodResize('coverimg',THUMB_IMAGE_WIDTH,BIG_IMAGE_WIDTH,UPLOAD_PATH,THUMB_PATH,90);
	if($uploadname==''){
	$sql = " UPDATE categories SET  category_name ='$this->category_name',category_notes ='$this->category_notes',category_type ='$this->category_type',category_position ='$this->category_position',last_updated ='$this->last_updated',last_updated_by ='$this->last_updated_by' WHERE catid = :id ";
	}else{
	$sql = " UPDATE categories SET  coverimg='$uploadname',category_name ='$this->category_name',category_notes ='$this->category_notes',category_type ='$this->category_type', category_position ='$this->category_position' ,last_updated ='$this->last_updated',last_updated_by ='$this->last_updated_by' WHERE catid = :id ";
	}
	$stmt=$db->prepare($sql);
	$stmt->bindParam(':id',$id, PDO::PARAM_INT);
	$stmt->execute();
	send_to($redirect_to);
	}
	
	}
	
	
	} // end class
	
	?>
	
	