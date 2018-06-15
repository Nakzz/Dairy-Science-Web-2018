<?php
/*

This script handles AJAX requests from "Send me an email when it's done" form
and store emails in a file or the database.

Author: AJ
 */

include "vendor/chromePhp.php";
require 'database/DBCredentials.php';


$STORE_MODE = "database";
$STORE_FILE = "../assets/subscribers";


$dbname = "Utils";
$found =0;


/**********************************************************************************

All the work runs below

 **********************************************************************************/

// Allow only post method
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["email"])) {

    $email = $_POST["email"];

    // Send headers
    header('HTTP/1.1 200 OK');
    header('Status: 200 OK');
    header('Content-type: application/json');

    // Check if email is valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        // Store in a file
        if ($STORE_MODE == "file") { // Store in a file

            // Success
            if (@file_put_contents($STORE_FILE, strtolower($email) . "\r\n", FILE_APPEND)) {
                echo json_encode(array(
                    "status" => "success",
                ));
                // Error
            } else {
                echo json_encode(array(
                    "status" => "error",
                    "type" => "FileAccessError",
                ));
            }

        } elseif ($STORE_MODE == "database") { // Store in a databse

$email = strtolower($email);

// Create connection
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Newsletter";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"] . " - Name: " . $row["Email"] . "<br>";
        $dbEmail = $row["Email"];
        $dbEmail = strtolower($dbEmail);

        chromePhp::log("Dbemail: $dbEmail");

        if ($dbEmail == $email) {
			$found++;
		} 
		
    }
}

if ($found == 0) {
    chromePhp::log("adding: $email");

    $sql = "INSERT INTO Newsletter (id, email)
VALUES (null, '$email')";

    if ($conn->query($sql) === true) {
        //echo "New record created successfully";
        echo json_encode(array(
            "status" => "success",
        ));

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

} else {
    chromePhp::log("Already Exsits");

    echo json_encode(array(
        "status" => "exists",
    ));

}


$conn->close();


        } else {
            echo json_encode(array(
                "status" => "error",
            ));
        }
        // Error
    } else {
        echo json_encode(array(
            "status" => "error",
            "type" => "ValidationError",
        ));
    }
} else {
    //header('HTTP/1.1 403 Forbidden');
    //header('Status: 403 Forbidden');
}
