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
	define('HEZECOM_PORTFOLIO','HezeGallery'); //Main app folder. Unless you change the folder name leave it like this.
	include(HEZECOM_PORTFOLIO.'/config/config.php');
	include(HEZECOM_PORTFOLIO.'/language/eng.php');
	include(HEZECOM_PORTFOLIO.'/libraries/functions.php');
	include_once(HEZECOM_PORTFOLIO.'/libraries/class_dbcon.php');
	include_once(HEZECOM_PORTFOLIO.'/libraries/upload_class.php');
	include(APP_FOLDER.'/models/objects/hgallery.php');
	include(APP_FOLDER.'/models/objects/categories.php');
	include('hezecom-gallery-theme.php');
	include('hezecom-gallery-js.php');
	// include ('chromePhp.php');
	

	class HezecomGallery {
	function __construct(){
	$this->category = new categories_model();	
	$this->gallery = new hgallery_model();
	}	

	
	//PORTFOLIO/GALLERY 
	function HezecomPortfolioGallery2($type,$desktop,$tablet,$mobile,$pagination='normal'){
	
	$catid = get('catid');
	if(!empty($catid))
	{

			$hcat=$this->category->SelectOne(get('catid'));
			$hcatname=$hcat->category_name;

			$hezegallery='<div style="width:100%">';
			$galler_view = $this->gallery->SelectAll($type,get('catid'), 1000000);
			$paging = pagination($this->gallery->CountRow($type,get('catid')),1000000,$_SERVER['PHP_SELF'].'?catid='.get('catid'));
			//$hezegallery.=$this->ListCategory($type);
			$hezegallery.= '
			<div class="category_heading" >'.$hcatname.'</div>
			<div  class="backpage" >
			<a href="'.$_SERVER['PHP_SELF'].'?catid=" class="btn btn-primary backBtn" >Back</a></div>
			<div style="clear:both" ></div>
			' ;
			$hezegallery.='<div class="gallery">';
			foreach($galler_view as $rows){ 
			if(is_file(HEZECOM_PORTFOLIO.'/'.UPLOAD_FOLDER.$rows->gimage)){
			$hezegallery.='
			 <div class="'.$desktop.' '.$tablet.' '.$mobile.' thumb gallery">
			<a href="'.HEZECOM_PORTFOLIO.'/'.UPLOAD_FOLDER.$rows->gimage.'" data-hez="prettyPhoto[gallery1]" class="thumbnail" title="'.$rows->gtitle.'" alt="MyGallery">
			<img data-original="'.HEZECOM_PORTFOLIO.'/'.THUMB_FOLDER.$rows->gimage.'" 	width="300px" height="300px"
			class="img-responsive lazy">
			
			</a>';
			//portfolio contents
			if($type=='portfolio' and $rows->gtitle){
			$hezegallery.='<div class="panel-footer" style="margin-top:-20px;">';
			$hezegallery.=' <h4>'.$rows->gtitle.'</h4>';
			
			if($rows->gdesc){ //desc
				$hezegallery.='<p>';
			 $hezegallery.=truncate_word($rows->gdesc,20);
			   $hezegallery.=' <a href="#" data-toggle="lightbox"  data-title="<h3>'.$rows->gtitle.'</h3> '.nl2br($rows->gdesc).'" data-type="image"  class="btn btn-primary btn-xs"> more</a> ';
			   $hezegallery.='</p>';
			}//end desc
			  $hezegallery.='</div>';
			}//end portfolio content
			
			 }
			 $hezegallery.='</div>';
			}
		//	$hezegallery.='<ul class="pagination" style="margin-top:-5px;">'.$paging.'</ul>';
			$hezegallery.='</div>';
			print $hezegallery;
	}
	else
	{	 print "Entered else";

			$hezegallery='<div class="gallery">';

		   foreach($this->category->CategoryGroupList($type) as $hrow)
			{
			   $hezegallery.='
				 <div class="'.$desktop.' '.$tablet.' '.$mobile.' thumb gallery">
				<a href="'.$_SERVER['PHP_SELF'].'?catid='.$hrow->catid.'" class="catthumbnail" title="'.$hrow->category_name.'" alt="'.$hrow->category_name.'" >
				<img data-original="'.HEZECOM_PORTFOLIO.'/'.THUMB_FOLDER.$hrow->coverimg.'" class="img-responsive lazy"  	width="300px" height="300px" >
				<div class="catname" >'.$hrow->category_name.'</div>
				<div class="catcount" ><i class="glyphicon glyphicon-picture"></i>&nbsp;'.$hrow->totalout.'</div>	
				</a>';
				$hezegallery.='
				<img class="shadow_img col-md-3 col-sm-4 col-xs-6 thumb gallery" src="'.HEZECOM_PORTFOLIO.'/'.H_THEME.'/images/album_stack_3_hovered.png"  />
				</div>';
			 } 
			 $hezegallery.='</div>';
			print $hezegallery;
	}
	
	}

	function split_name($str, $length=25)
	{
			if(strlen($str) <= $length)
				 return $str;

			return substr($str, 0, ($length-4))."...";
	}
	//PORTFOLIO/GALLERY 
	function HezecomPortfolioGallery($type,$desktop,$tablet,$mobile,$pagination='normal'){

	$hezegallery='<div style="width:100%">';
	$galler_view=$this->gallery->SelectAll($type,get('catid'),RECORD_PER_PAGE);
	$paging = pagination($this->gallery->CountRow($type,get('catid')),RECORD_PER_PAGE,$_SERVER['PHP_SELF'].'?catid='.get('catid'));
	$hezegallery.=$this->ListCategory($type);
	
	$hezegallery.='<div class="gallery">';
	foreach($galler_view as $rows){ 
	if(is_file(HEZECOM_PORTFOLIO.'/'.UPLOAD_FOLDER.$rows->gimage)){
	$hezegallery.='
	 <div class="'.$desktop.' '.$tablet.' '.$mobile.' thumb gallery">
	<a href="'.HEZECOM_PORTFOLIO.'/'.UPLOAD_FOLDER.$rows->gimage.'" data-hez="prettyPhoto[gallery1]" class="thumbnail" title="'.$rows->gtitle.'" alt="MyGallery">
	<img src="'.HEZECOM_PORTFOLIO.'/'.THUMB_FOLDER.$rows->gimage.'" class="img-responsive"></a>';
	//portfolio contents
	if($type=='portfolio' and $rows->gtitle){
    $hezegallery.='<div class="panel-footer" style="margin-top:-20px;">';
	$hezegallery.=' <h4>'.$rows->gtitle.'</h4>';
	
	if($rows->gdesc){ //desc
        $hezegallery.='<p>';
     $hezegallery.=truncate_word($rows->gdesc,20);
       $hezegallery.=' <a href="#" data-toggle="lightbox"  data-title="<h3>'.$rows->gtitle.'</h3> '.nl2br($rows->gdesc).'" data-type="image"  class="btn btn-primary btn-xs"> more</a> ';
       $hezegallery.='</p>';
	}//end desc
      $hezegallery.='</div>';
	}//end portfolio content
	
	 }
     $hezegallery.='</div>';
	}
	$hezegallery.='<ul class="pagination" style="margin-top:-5px;">'.$paging.'</ul>';
	$hezegallery.='</div>';
	print $hezegallery;
	}
	
	//SLIDER
	function HezecomSlider($type='slider',$catid=NULL){
	$hezegallery='<div style="width:100%">';
	$galler_view=$this->gallery->SelectAll($type,$catid,RECORD_PER_PAGE);
	$hezegallery.='
	<div class="slider-container">
	<section id="flex-main" >
	<div class="flexslider">
	<ul class="slides">';
	foreach($galler_view as $rows){
	$hezegallery.='<li>
	<img src="'.HEZECOM_PORTFOLIO.'/'.UPLOAD_FOLDER.$rows->gimage.'" alt="'.$rows->gtitle.'" title="'.$rows->gtitle.'" />';
	if($rows->gtitle){
	$hezegallery.='<div class="flex-caption">
	<div class="caption-container">
	<div class="text-container caption-bg animated '.$rows->animation.' '.$rows->caption_align.'">
	<h1>'.$rows->gtitle.'</h1>
	<p>'.nl2br($rows->gdesc).' </p>
	</div>
	</div>';
	}
	$hezegallery.='</div>
	</li>';
	}
	$hezegallery.='</ul>
	</div>
	</section>
	</div><!--/slider-container-->';
	print $hezegallery;
	}
	
	//CATEGORY LISTING
	function ListCategory($type){
	
	if(get('catid')){
	$hcat=$this->category->SelectOne(get('catid'));
	$hcatname=$hcat->category_name;
	}else{
	$hcatname='All Categories';
	}
		
	$hezegallery='
	<div class="btn-group" style="padding-left:10px;">
  <button class="btn btn-default">Categories</button>
  <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button> 
  <ul class="dropdown-menu">';	
	$hezegallery.='<li><a href="'.$_SERVER['PHP_SELF'].'">All</a></li>';
   foreach($this->category->CategoryGroupList($type) as $hrow)
			{
$hezegallery.='<li><a href="'.$_SERVER['PHP_SELF'].'?catid='.$hrow->catid.'">'.ucwords($hrow->category_name).' ('.$hrow->totalout.')</a></li>';
      }
	$hezegallery.='</ul>
</div> <strong>'.strtoupper($hcatname).'</strong><br><br>';
	return $hezegallery;
	}	
	}//end class

	//initiate class
	$heze = new HezecomGallery();