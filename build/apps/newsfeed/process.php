<?php
if(!isset($_POST))
{
 	die(" No Parameters Passed ");
}
$servername = "localhost";
$username = "root";
$password = "Mysql@Dairymgt#@!1";
$dbname = "news_feed";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else if(sizeof($_POST)==0)
{
	$sql="truncate table news;";
	if (!$conn->query($sql)) {
    die("Error: " . $sql . "<br>" . $conn->error);
	}
}
else
	{
		function startsWith($haystack, $needle) {
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
}
$sql="truncate table news;";
if (!$conn->query($sql)) {
    die("Error: " . $sql . "<br>" . $conn->error);
}
$sql="";
foreach ($_POST as $key => $value) {
	if(startsWith($key,"text")===TRUE)
	{
		$sql .= "INSERT INTO news VALUES ";
		$id=$key[(strlen($key)-1)];
		$sql.='("'.$value.'","'.$_POST['link'.$id].'"); ';
	}
}
if ($conn->multi_query($sql) === TRUE) {
    echo "Record Updated successfully";
} else {
    die("Error: " . $sql . "<br>" . $conn->error);
}
}
echo 'DB Updated Successfully';
mysql_close($conn);
?>