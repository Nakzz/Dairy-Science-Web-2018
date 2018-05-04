<?php
$servername = "localhost";
$username = "root";
$password = "Mysql@Dairymgt#@!1";
$dbname = "news_feed";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
if(!isset($_GET['speed']))
{
	$sql='select value from config where parameter="speed"';
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo $row["value"];
		}
	} else {
		
		$sql = "INSERT INTO config VALUES ('speed', 0)";
		if ($conn->query($sql) === TRUE) {
			echo "0";
		} else {
			die ("Error: " . $sql . "<br>" . $conn->error);
		}
	}
}
else
{
	$sql = "UPDATE config SET value=".$_GET['speed']." WHERE parameter='speed'";
	if ($conn->query($sql) === TRUE) {
	} else {
		die("Error updating record: " . $conn->error); 
	}
}
mysql_close($conn);
?>
