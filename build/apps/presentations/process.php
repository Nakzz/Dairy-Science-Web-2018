<?php 
include('classes/custom.php');

if(isset($_REQUEST['del_row_id']))
{
$del_link = $_REQUEST['del_row_id'];
//echo 'Deleted row is '.$del_link;
$result = DB::delete('category_files', "id=%s",$del_link);
echo $result;
die();
}

elseif(isset($_REQUEST['del_content_id']))
{
$del_content = $_REQUEST['del_content_id'];	
$result = DB::delete('category_contents', "id=%s",$del_content);
$result2 = DB::delete('category_files', "content_id=%s",$del_content);
echo $result;
}

?>