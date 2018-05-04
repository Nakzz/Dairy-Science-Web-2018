<?php 
if(!isset($_GET['name']))
die('No Files specified to delete');
if (!file_exists($_GET['name'])) {
    die ('Error: File doesnt exists ');
}
if(unlink($_GET['name']))
	echo 'File Successfully Deleted';
else
	echo 'Error Deleting File';

?>
