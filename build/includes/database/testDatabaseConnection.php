<?php
include_once 'DBConnection.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

<?php
$db = new DBConnection('');
$databaseName = 'Utils';
//$db->getConnection($databaseName);

if ($db->connect($databaseName)) {
  echo "Connection successful.";
}

?>

   </body>
 </html>
