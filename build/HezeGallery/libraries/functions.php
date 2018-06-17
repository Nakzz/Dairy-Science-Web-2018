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
	//post
  function post($var)
  {
      if (isset($_POST[$var]))
          return $_POST[$var];
  }
  //get
  function get($var)
  {
      if (isset($_GET[$var]))
          return $_GET[$var];
  }
  //send headers
  function send_to($direction)
  	{
      if (!headers_sent()) {
          header('Location: ' . $direction);
		  exit;
	  } else
          print '<script type="text/javascript">';
          print 'window.location.href="' . $direction . '";';
          print '</script>';
          print '<noscript>';
          print '<meta http-equiv="refresh" content="0;url=' . $direction . '" />';
          print '</noscript>';
  	}
	 //msgs
	function success_msg($dmsg){
	print('<div class="heze-notify progress-bar-success">
  <p>'.$dmsg.'</p>
  </div>
	');	
	}
	function error_msg($dmsg){
	print('<div class="heze-notify progress-bar-danger">
  <p>'.$dmsg.'</p>
  </div>
	');	
	}
	
	//File
	function delete_files($folder){
	  if(is_file($folder))
	unlink($folder);
		}
	//dir
	function app_dir($folder=NULL){
	$base = str_replace($folder,'',dirname(__FILE__));
	return str_replace('\\','/',$base);
	}

	//paging
	function pagination($query,$per_page = 10,$url=NULL,$page = 1){ 
		$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$total = $query;
        $splitter = "2";
		$url1=$url."&page=";
    	$page = ($page == 0 ? 1 : $page);  
    	$start = ($page - 1) * $per_page;
		
		$firstPage = 1;
		$prev = ($page == 1)? 1:$page - 1;
								
    	$prev = $page - 1;							
    	$next = $page + 1;
        $lastpage = ceil($total/$per_page);
    	$lpm1 = $lastpage - 1;
    	$hezpaging = "";
    	if($lastpage > 1)
    	{	
    	$hezpaging .= "<ul class='hezpaging'>";
        $hezpaging .= "<li class='details'>".LANG_PAGE." $page of $lastpage</li>";

		if ($page == 1)
		{
		$hezpaging.= "<li><a class='current'>".LANG_FIRST."</a></li>";
		$hezpaging.= "<li><a class='current'>".LANG_PREVIOUS."</a></li>";
		}
		else
		{
		$hezpaging.= "<li><a href='".$url1."$firstPage'>".LANG_FIRST."</a></li>";
		$hezpaging.= "<li><a href='".$url1."$prev'>".LANG_PREVIOUS."</a></li>"; 
		}

    		if ($lastpage < 7 + ($splitter * 2)){	
    		for ($counter = 1; $counter <= $lastpage; $counter++){
    		if ($counter == $page)
    		$hezpaging.= "<li><a class='current'>$counter</a></li>";
    		else
    		$hezpaging.= "<li><a href='".$url1."$counter'>$counter</a></li>";					
    		}}
    		elseif($lastpage > 5 + ($splitter * 2)){
    		if($page < 1 + ($splitter * 2)){
    		for ($counter = 1; $counter < 4 + ($splitter * 2); $counter++){
    		if ($counter == $page)
    		$hezpaging.= "<li><a class='current'>$counter</a></li>";
    		else
    		$hezpaging.= "<li><a href='".$url1."$counter'>$counter</a></li>";					
    		}
    		$hezpaging.= "<li class='dot'>...</li>";
    		$hezpaging.= "<li><a href='".$url1."$lpm1'>$lpm1</a></li>";
    		$hezpaging.= "<li><a href='".$url1."$lastpage'>$lastpage</a></li>";		
    		}
    		elseif($lastpage - ($splitter * 2) > $page && $page > ($splitter * 2)){
    		$hezpaging.= "<li><a href='".$url1."1'>1</a></li>";
    		$hezpaging.= "<li><a href='".$url1."2'>2</a></li>";
    		$hezpaging.= "<li class='dot'>...</li>";
    		for ($counter = $page - $splitter; $counter <= $page + $splitter; $counter++){
    		if ($counter == $page)
    		$hezpaging.= "<li><a class='current'>$counter</a></li>";
    		else
    		$hezpaging.= "<li><a href='".$url1."$counter'>$counter</a></li>";					
    		}
    		$hezpaging.= "<li class='dot'>..</li>";
    		$hezpaging.= "<li><a href='".$url1."$lpm1'>$lpm1</a></li>";
    		$hezpaging.= "<li><a href='".$url1."$lastpage'>$lastpage</a></li>";		
    		}else{
    		$hezpaging.= "<li><a href='".$url1."1'>1</a></li>";
    		$hezpaging.= "<li><a href='".$url1."2'>2</a></li>";
    		$hezpaging.= "<li class='dot'>..</li>";
    		for ($counter = $lastpage - (2 + ($splitter * 2)); $counter <= $lastpage; $counter++){
    		if ($counter == $page)
    		$hezpaging.= "<li><a class='current'>$counter</a></li>";
    		else
    		$hezpaging.= "<li><a href='".$url1."$counter'>$counter</a></li>";					
    		}}}
    		if ($page < $counter - 1){ 
    		$hezpaging.= "<li><a href='".$url1."$next'>".LANG_NEXT."</a></li>";
            $hezpaging.= "<li><a href='".$url1."$lastpage'>".LANG_LAST."</a></li>";
    		}else{
    		$hezpaging.= "<li><a class='current'>".LANG_NEXT."</a></li>";
            $hezpaging.= "<li><a class='current'>".LANG_NEXT."</a></li>";
            }
    		$hezpaging.= "</ul>\n";		
    	}
        return $hezpaging;
    }
	function pageparam($limit){
	$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    return ($page * $limit) - $limit;
	}
	
	//database layer
	function DataSelect($sql,$id=NULL)
	{
	$db=DB::getInstance();
	$stmt=$db->prepare($sql);
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	return $stmt->fetch(PDO::FETCH_OBJ);
	}
	
	//UserID
	function UserID()
	{
	$id=$_SESSION['admin_user'];
	$db=DB::getInstance();
	$stmt=$db->prepare("SELECT userid FROM admin_users WHERE username=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$row= $stmt->fetch(PDO::FETCH_OBJ);
	return $row->userid;
	}
	
	//username
	function UserName($id)
	{
	$row=DataSelect("SELECT username FROM admin_users WHERE userid=:id",$id);	
	return $row->username;
	}
	
	//counter
	function RecordsCount($id,$table,$catid='catid')
	{
	$row=DataSelect("SELECT COUNT(*) AS totalcount FROM $table WHERE $catid=:id",$id);
	return $row->totalcount;
	}
	
	//category name
	function CatName($id)
	{
	$row=DataSelect("SELECT category_name FROM categories WHERE catid=:id",$id);
	return $row->category_name;
	}
	
	//CHECK CATEGORY ID EXIST
	function Checkid($id,$location)
	{
	if(!$id){
	send_to($location);	
	}
	}
	
	//Form Messages
	function form_errors($errors){
	if(empty($errors) === false){
	echo '<div class="alert alert-danger">'.implode($errors).'</div>';	
	}	
	}
	
	//access level
	function UserAccess()
	{
	$id=$_SESSION['admin_user'];
	$db=DB::getInstance();
	$stmt=$db->prepare("SELECT access_level,user_position FROM admin_users WHERE username=:id");
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	return $stmt->fetch(PDO::FETCH_OBJ);
	}
	
  //CHECK CATEGORY ID EXIST
	function AppCategories($id,$location)
	{
	$vtype = array('gallery','portfolio','slider'); 
	if (!in_array($id, $vtype)){
	send_to($location);	
	}
	}
	//LOAD MORE ON SCROLL
	function ScrollPagination($url,$limit)
	{
	print("<script>
$(document).ready(function() {
	$('#contents-scroll').scrollPagination({
		nop     : ".$limit.",
		offset  : 0, 
		error   : 'No More Posts!',
		delay   : 500, 
		scroll  : true, // If set to false posts will not load as the user scrolls.but will still load if the user clicks.
		durl : '".$url."',
		scrollMsg : '' //scroll message (e.g = 'Scroll for more or click here')
		
	});
	
});
</script>");
}
	
	//DRAGABLE
	function AjaxDragAndDrop($url,$append=NULL){
	print('
	<script>
	$(document).ready(function(){ 
	$(function() {
		$("#hezedrag '.$append.'").sortable({ opacity: 0.6, cursor: "move", update: function() {
			var order = $(this).sortable("serialize") + "&update=update"; 
			$.post("'.$url.'", order, function(theResponse){
				$("#contentRight").html(theResponse);
			}); 															 
		}								  
		});
	});
	});
	</script>');	
	}
	
	//Limit Notes
function truncate_word( $notes, $limit, $break=" ", $pad="...") {
 if(strlen($notes) <= $limit){
    return $notes;
 }
 $notes = substr($notes, 0, $limit);
 if(false !== ($breakpoint = strrpos($notes, $break))){
    $notes = substr($notes, 0, $breakpoint);
 }
 return $notes . $pad;
}
	?>

