<?php 
include 'database/DBCredentials.php';

$DB_NAME = "Utils";
//open connection to mysql db
$connection = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME) or die("Error " . mysqli_error($connection));

$sql2 = "SELECT name, value FROM markers where value >0 ORDER BY name";
$result2 = mysqli_query($connection, $sql2) or die("Error in Selecting " . mysqli_error($connection));

while ($row2 = $result2->fetch_array(MYSQLI_ASSOC)) {

    if ($row2['name'] != 'United States') {
        $myArray[] = array($row2['name'] => $row2['value']);
    } else {
        $moveToFirst[] = array($row2['name'] => $row2['value']);
    }
}

$orderedCountries = array_merge($moveToFirst, $myArray);
$serverString = "";
for ($i = 0; $i < count($orderedCountries); $i++) {
    //var_dump($orderedCountries[$i]);
    foreach ($orderedCountries[$i] as $key => $value) {
        $serverString .= $key;

        $serverString .= "(" . $value . ")";

        if ($i < count($orderedCountries) - 1) {
            $serverString .= ', ';
        } else {
            $serverString .= '.';
        }

    }
}

print $serverString;
