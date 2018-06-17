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
	class Hezeresizer
	{
	var $create_image;
	var $set_width;
	var $set_height;
	var $imageResized;
	
	function __construct($fileName)
	{
	$this->create_image = $this->loadImage($fileName);
	$this->set_width  = imagesx($this->create_image);
	$this->set_height = imagesy($this->create_image);
	}
	//optional
	function upload_errors($err_code) {
	switch ($err_code) { 
    case UPLOAD_ERR_INI_SIZE: return 'The uploaded file exceeds the upload_max_filesize directive in php.ini'; 
    case UPLOAD_ERR_FORM_SIZE: return 'The uploaded file exceeds the MAX_FILE_SIZE specified in the HTML form'; 
    case UPLOAD_ERR_PARTIAL: return 'The uploaded file was only partially uploaded'; 
    case UPLOAD_ERR_NO_FILE: return 'No file was uploaded'; 
    case UPLOAD_ERR_NO_TMP_DIR: return 'Missing a temporary folder'; 
    case UPLOAD_ERR_CANT_WRITE: return 'Failed to write file to disk'; 
    case UPLOAD_ERR_EXTENSION: return 'File upload stopped by extension'; 
    default: return 'Unknown upload error'; } 
	}
	//ext
	function fileExt($fileName){
	$newext = substr($fileName, strrpos($fileName,'.'));
	return str_replace('.','',$newext);
	}
		  
	function loadImage($file)
	{
	$extension = strtolower(strrchr($file, '.'));
	
	switch($extension)
	{
	case '.jpg':
	case '.jpeg':
	$img = @imagecreatefromjpeg($file);
	break;
	case '.gif':
	$img = @imagecreatefromgif($file);
	break;
	case '.png':
	$img = @imagecreatefrompng($file);
	break;
	default:
	$img = false;
	break;
	}
	return $img;
	}
	//resizer
	function ResizeImageTo($ImageNewWidth, $ImageNewHeight, $customizer="resize")
	{
	$customizerArray = $this->ImageOrientations($ImageNewWidth, $ImageNewHeight, $customizer);
	$resolvedWidth  = $customizerArray['resolvedWidth'];
	$resolvedHeight = $customizerArray['resolvedHeight'];
	//keep quality/transparency
	$this->imageResized = imagecreatetruecolor($resolvedWidth, $resolvedHeight);
	imagesavealpha($this->imageResized, true); 
	$color = imagecolorallocatealpha($this->imageResized,0x00,0x00,0x00,127); 
	imagefill($this->imageResized, 0, 0, $color);
	imagecopyresampled($this->imageResized, $this->create_image, 0, 0, 0, 0, $resolvedWidth, $resolvedHeight, $this->set_width, $this->set_height);
	
	if ($customizer == 'crop') {
	$this->crop($resolvedWidth, $resolvedHeight, $ImageNewWidth, $ImageNewHeight);
	}
	}

	function ImageOrientations($ImageNewWidth, $ImageNewHeight, $customizer)
	{
	switch ($customizer)
	{
	case 'normal':
	$resolvedWidth = $ImageNewWidth;
	$resolvedHeight= $ImageNewHeight;
	break;
	case 'resize':
	$customizerArray = $this->ImageMakerResizer($ImageNewWidth, $ImageNewHeight);
	$resolvedWidth = $customizerArray['resolvedWidth'];
	$resolvedHeight = $customizerArray['resolvedHeight'];
	break;
	case 'crop':
	$customizerArray = $this->ImageMakerCrop($ImageNewWidth, $ImageNewHeight);
	$resolvedWidth = $customizerArray['resolvedWidth'];
	$resolvedHeight = $customizerArray['resolvedHeight'];
	break;
	}
	return array('resolvedWidth' => $resolvedWidth, 'resolvedHeight' => $resolvedHeight);
	}
	
	function ImageMakerFixedHeight($ImageNewHeight)
	{
	$ratio = $this->set_width / $this->set_height;
	$ImageNewWidth = $ImageNewHeight * $ratio;
	return $ImageNewWidth;
	}
	
	function ImageMakerFixedWidth($ImageNewWidth)
	{
	$ratio = $this->set_height / $this->set_width;
	$ImageNewHeight = $ImageNewWidth * $ratio;
	return $ImageNewHeight;
	}
	
	function ImageMakerResizer($ImageNewWidth, $ImageNewHeight)
	{
	if ($this->set_height < $this->set_width)
	{
	$resolvedWidth = $ImageNewWidth;
	$resolvedHeight= $this->ImageMakerFixedWidth($ImageNewWidth);
	}
	elseif ($this->set_height > $this->set_width){
	$resolvedWidth = $this->ImageMakerFixedHeight($ImageNewHeight);
	$resolvedHeight= $ImageNewHeight;
	}else{
	if ($ImageNewHeight < $ImageNewWidth) {
	$resolvedWidth = $ImageNewWidth;
	$resolvedHeight= $this->ImageMakerFixedWidth($ImageNewWidth);
	} else if ($ImageNewHeight > $ImageNewWidth) {
	$resolvedWidth = $this->ImageMakerFixedHeight($ImageNewHeight);
	$resolvedHeight= $ImageNewHeight;
	} else {
	$resolvedWidth = $ImageNewWidth;
	$resolvedHeight= $ImageNewHeight;
	}
	}
	return array('resolvedWidth' => $resolvedWidth, 'resolvedHeight' => $resolvedHeight);
	}
	
	function ImageMakerCrop($ImageNewWidth, $ImageNewHeight)
	{
	$heightRatio = $this->set_height / $ImageNewHeight;
	$widthRatio  = $this->set_width /  $ImageNewWidth;
	if ($heightRatio < $widthRatio) {
	$optimalRatio = $heightRatio;
	} else {
	$optimalRatio = $widthRatio;
	}
	$resolvedHeight = $this->set_height / $optimalRatio;
	$resolvedWidth  = $this->set_width  / $optimalRatio;
	return array('resolvedWidth' => $resolvedWidth, 'resolvedHeight' => $resolvedHeight);
	}
	
	function crop($resolvedWidth, $resolvedHeight, $ImageNewWidth, $ImageNewHeight)
	{
	//croper
	$cropStartX = ( $resolvedWidth / 2) - ( $ImageNewWidth /2 );
	$cropStartY = ( $resolvedHeight/ 2) - ( $ImageNewHeight/2 );
	$crop = $this->imageResized;
	$this->imageResized = imagecreatetruecolor($ImageNewWidth , $ImageNewHeight);
	imagesavealpha($this->imageResized, true); 
	$color = imagecolorallocatealpha($this->imageResized,0x00,0x00,0x00,127); 
	imagefill($this->imageResized, 0, 0, $color);
	imagecopyresampled($this->imageResized, $crop , 0, 0, $cropStartX, $cropStartY, $ImageNewWidth, $ImageNewHeight , $ImageNewWidth, $ImageNewHeight);
	}
	
	public function SaveImageTo($ImageSavePath, $KeepQuality="100")
	{
	$extension = strrchr($ImageSavePath, '.');
	$extension = strtolower($extension);
	switch($extension)
	{
	case '.jpg':
	case '.jpeg':
	if (imagetypes() & IMG_JPG) {
	imagejpeg($this->imageResized, $ImageSavePath, $KeepQuality);
	}
	break;
	case '.gif':
	if (imagetypes() & IMG_GIF) {
	imagegif($this->imageResized, $ImageSavePath);
	}
	break;
	case '.png':
	$scaleQuality = round(($KeepQuality/100) * 9);
	// quality  0 is best
	$InvertScaleQuality = 9 - $scaleQuality;
	if (imagetypes() & IMG_PNG) {
	imagepng($this->imageResized, $ImageSavePath, $InvertScaleQuality);
	}
	break;
	default:
	break;
	}
	imagedestroy($this->imageResized);
	}
	
	}//end class
	?>
