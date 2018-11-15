<?php

$name = $_POST['Full_Name']; // required
$email = $_POST['Email_Address']; // required
$subject = $_POST['subject']; // not required
$comments = $_POST['Your_Message']; // required


$EmailTo = "naqibprio10@gmail.com";
$Subject = "Enquiry from Dairy Mgt Contact form";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Subject: ";

$Body .= $subject;
$Body .= "\n";

$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";


$headers = 'From: register@mrgarretto.com' . "\r\n" .
'Reply-To: register@mrgarretto.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email, $headers);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>