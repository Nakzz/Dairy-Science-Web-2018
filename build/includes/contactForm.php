<?php

$to_Email = "naqibprio10@gmail.com";
$subject = 'Enquiry from Dairy Mgt Contact form'; //Subject line for emails


if(isset($_POST['submit'])){
$name = $_POST['name'];
$subjectFromuser = $_POST['subject'];
$email = $_POST['email'];
$messageFromUser = $_POST['message'];

	//Sanitize input data using PHP filter_var().
	$Name        = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
	$Email       = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);


$message = "Dear Admin,\n\nNew enquiry from Dairy MGT.\nEnquiry Details:\n";
$message .= "Name: $name\n";
$message .= "Subject: $subjectFromuser\n";
$message .= "Email: $email\n";
$message .= "Email: $messageFromUser\n";

//proceed with PHP email.
$headers = 'From: ' . $email . '' . "\r\n" .
'Reply-To: ' . $email . '' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

$sentMail = @mail($to_Email, $subject, $message, $headers);

if (!$sentMail) {
    $output = json_encode(array('type' => 'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
    die($output);
} else {
    $output = json_encode(array('type' => 'message', 'text' => 'Your message has been sent'));
    die($output);
}




}