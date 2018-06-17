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
	
	class UploadControl{
	
	//Random Numbers
	function randNum(){
		  $code = '';
	  for($x = 0; $x<5; $x++) {
		  $code .= ''.substr(rand(0,999999999999999),2,3);
	  }
	  $code = substr($code,1);
	  return $code;
  	}

	//IMAGE UPLOAD AND RESIZE
	function ImageResize($hWidth,$hHeight,$MaxSize,$ToFolder,$SrcImage,$quality,$ImageType)
	{
	if($hWidth <= 0 || $hHeight <= 0) {return false;}
	//size of new image
	$ImageScale = min($MaxSize/$hWidth, $MaxSize/$hHeight); 
	$NewWidth = ceil($ImageScale*$hWidth);
	$NewHeight = ceil($ImageScale*$hHeight);
	$NewCanves = imagecreatetruecolor($NewWidth, $NewHeight);
	imagesavealpha($NewCanves, true); 
	$color = imagecolorallocatealpha($NewCanves,0x00,0x00,0x00,127); 
	imagefill($NewCanves, 0, 0, $color);
	// Resize Image
	if(imagecopyresampled($NewCanves, $SrcImage,0, 0, 0, 0, $NewWidth, $NewHeight, $hWidth, $hHeight))
	{
	switch(strtolower($ImageType)){
	case 'image/png': imagepng($NewCanves,$ToFolder);break;
	case 'image/gif': imagegif($NewCanves,$ToFolder);break;			
	case 'image/jpeg':
	case 'image/pjpeg': imagejpeg($NewCanves,$ToFolder,$quality);break;
	default: return false;
	}
	if(is_resource($NewCanves)) {imagedestroy($NewCanves);} 
	return true;
	}}
	//corps image 
	function ImageCrop($hWidth,$hHeight,$iSize,$ToFolder,$SrcImage,$quality,$ImageType)
	{	 
	if($hWidth <= 0 || $hHeight <= 0) {return false;}
	if($hWidth>$hHeight){$y_offset = 0;$x_offset = ($hWidth - $hHeight) / 2;
	$square_size 	= $hWidth - ($x_offset * 2);
	}else{
	$x_offset = 0;$y_offset = ($hHeight - $hWidth) / 2;$square_size = $hHeight - ($y_offset * 2);
	}
	$NewCanves 	= imagecreatetruecolor($iSize, $iSize);
	imagesavealpha($NewCanves, true); 
	$color = imagecolorallocatealpha($NewCanves,0x00,0x00,0x00,127); 
	imagefill($NewCanves, 0, 0, $color);	
	if(imagecopyresampled($NewCanves, $SrcImage,0, 0, $x_offset, $y_offset, $iSize, $iSize, $square_size, $square_size))
	{
	switch(strtolower($ImageType)){
	case 'image/png':imagepng($NewCanves,$ToFolder);break;
	case 'image/gif':imagegif($NewCanves,$ToFolder);break;			
	case 'image/jpeg':
	case 'image/pjpeg':imagejpeg($NewCanves,$ToFolder,$quality);break;
	default: return false;
	}
	if(is_resource($NewCanves)) {imagedestroy($NewCanves);} 
	return true;
	}
	}

	function ImageUplaodResize($dfile,$thumbsize,$imgsize,$path_main,$path_thumb,$quality){
	if(isset($_POST) and $_FILES[$dfile]['name']!='')
	{
	if(!isset($_FILES[$dfile]) || !is_uploaded_file($_FILES[$dfile]['tmp_name']))
	{die('Something went wrong with Upload!');}
	// Random number
	$randnum = rand(0, 9999999999); 
	$ImageName = str_replace(' ','-',strtolower($_FILES[$dfile]['name'])); 
	$ImageSize = $_FILES[$dfile]['size'];
	$TempSrc = $_FILES[$dfile]['tmp_name'];
	$ImageType = $_FILES[$dfile]['type'];
	switch(strtolower($ImageType)){
	case 'image/png': $CreatedImage = imagecreatefrompng($_FILES[$dfile]['tmp_name']);break;
	case 'image/gif': $CreatedImage = imagecreatefromgif($_FILES[$dfile]['tmp_name']);break;			
	case 'image/jpeg':
	case 'image/pjpeg': $CreatedImage = imagecreatefromjpeg($_FILES[$dfile]['tmp_name']);break;
	default: die('Unsupported File Format!');
	}
	list($hWidth,$hHeight)=getimagesize($TempSrc);
	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
  	$ImageExt = str_replace('.','',$ImageExt);
	$ImageName 		= preg_replace("/\\.[^.\\s]{3,4}$/", "", $ImageName); 
	$NewImageName = $randnum.'.'.$ImageExt;
	//img path
	$paththumb 	= $path_thumb.$NewImageName; //Thumb
	$pathfull 	= $path_main.$NewImageName; //Main Image
	//Resize
	if($this->ImageResize($hWidth,$hHeight,$imgsize,$pathfull,$CreatedImage,$quality,$ImageType))
	{
	if(!$this->ImageCrop($hWidth,$hHeight,$thumbsize,$paththumb,$CreatedImage,$quality,$ImageType))
	{echo 'Error Creating Thumbnail';}

	return $NewImageName;
		
	}else{
		die('Image Resize Error'); //output error
	}
	}

	}//end

	//MULTI-IMAGE UPLOADS
	function MultiImageUplaodResize($prid,$thumbsize,$imgsize,$path_main,$path_thumb,$quality){
	
	foreach($_FILES as $hezfile)
	{
	$fileName 	= $hezfile['name'];
	$fileSize 	= $hezfile['size'];
	$tempName = $hezfile['tmp_name'];
	$fileType = $hezfile['type'];
	
	if (is_array($fileName)) 
	{
	$c = count($fileName);
	for ($i=0; $i < $c; $i++)
	{
	$processfile = true;	
		
	//rename image
	$Rename= $this->randNum();

	if(isset($fileName[$i]) and is_uploaded_file($tempName[$i]))
		{
	/*echo '<div class="error">An Error has occurred while trying to process <strong>'.$fileName[$i].'</strong>!</div>';
		}
	else{*/
	switch(strtolower($fileType[$i])){
	case 'image/png': $createImage = imagecreatefrompng($tempName[$i]);break;
	case 'image/gif': $createImage = imagecreatefromgif($tempName[$i]);break;
	case 'image/jpeg':
	case 'image/pjpeg': $createImage = imagecreatefromjpeg($tempName[$i]);break;
	default:
	$processfile = false; //not supported!
	}
	list($hWidth,$hHeight)=getimagesize($tempName[$i]);
	$newext = substr($fileName[$i], strrpos($fileName[$i], '.'));
	$newext = str_replace('.','',$newext);
	$NewfileName = $Rename.'.'.$newext;
	$paththumb 	= $path_thumb.$NewfileName; //Thumb name
	$pathfull 	= $path_main.$NewfileName; //Big Image name
	//resize
	if($processfile && $this->ImageResize($hWidth,$hHeight,$imgsize,$pathfull,$createImage,$quality,$fileType[$i]))
	{
	if(!$this->ImageCrop($hWidth,$hHeight,$thumbsize,$paththumb,$createImage,$quality,$fileType[$i]))
	{
	echo 'Error occured while creating thumbnail';
	}
	//return $fileName[$i];
	$dbc=new dboptions();
	$valuesd = array(array(''.H_FILE.''=>$Rename.'.'.$newext,''.RELATE_ID.''=>$prid,''.H_DATE.''=>date('Y-m-d')));
	$dbc->dbInsert(UPLOAD_TABLE, $valuesd);
	
	}else{
	echo '<div class="error">Error occurred while trying to upload <strong>'.$fileName[$i].'</strong>! Please check if file is supported</div>'; //output error
	}}
	}}}
	}//function
	
	//Start Multi File Upload
	function MultiFilesUpload($prid,$path_main){
	for($i=0; $i<count($_FILES['gfile']['name']); $i++) {
	if (!@file_exists($path_main)) {die("Make sure Upload directory exist!");}
	if($_POST){	
	if(!isset($_FILES['gfile']['name'][$i])){die("File is empty!");}
	if($_FILES['gfile']['error'][$i]){die($this->upload_errors($_FILES['gfile']['error'][$i]));}
	$FileName = strtolower($_FILES['gfile']['name'][$i]);
	$fileExt = substr($FileName, strrpos($FileName, '.'));
	$FileType = $_FILES['gfile']['type'][$i]; //file type
	$FileSize = $_FILES['gfile']["size"][$i]; //file size
	$RandNumber = $this->randNum();
	//$uploaded_date	= date("Y-m-d H:i:s");
	$mianext=substr($fileExt,1);
	//valid entensions
	$this->ValidFileExt($mianext);
	$Hfilename = $RandNumber.'.'.$mianext;
   if(move_uploaded_file($_FILES['gfile']["tmp_name"][$i], $path_main . $Hfilename ))
   {
	$dbc=new dboptions();
   $valuesd = array(array(''.H_FILE.''=>$Hfilename,''.RELATE_ID.''=>$prid,''.H_DATE.''=>date('Y-m-d')));
	$dbc->dbInsert(UPLOAD_TABLE, $valuesd);

   }else{die('An error occured while trying to upload File!');
   }}
   }
   }//end fileupload


}//end class
?>