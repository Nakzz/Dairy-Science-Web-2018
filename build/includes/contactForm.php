<?php

/**
 *
 * URL: www.freecontactform.com
 *
 * Version: FreeContactForm Free V2.2
 *
 * Copyright (c) 2013 Stuart Cochrane
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 *
 * Note: This is NOT the same code as the PRO version
 *
 */

if (isset($_POST['Email_Address'])) {


$email_to = "naqibprio10@gmail.com"; // your email address
$thankyou = "thankyou.htm"; // thank you page

$to_Email = "naqibprio10@gmail.com";
$email_subject = 'Enquiry from Dairy Mgt Contact form'; //Subject line for emails


// if you update the question on the form -
// you need to update the questions answer below
$antispam_answer = "25";


    function died($error)
    {
        echo "Sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error . "<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    if (!isset($_POST['Full_Name']) ||
        !isset($_POST['Email_Address']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['Your_Message'])
    ) {
        died('Sorry, there appears to be a problem with your form submission.');
    }

    $full_name = $_POST['Full_Name']; // required
    $email_from = $_POST['Email_Address']; // required
    $subject = $_POST['subject']; // not required
    $comments = $_POST['Your_Message']; // required


    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if (preg_match($email_exp, $email_from) == 0) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
    if (strlen($full_name) < 2) {
        $error_message .= 'Your Name does not appear to be valid.<br />';
    }
    if (strlen($comments) < 2) {
        $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    }


    $email_message = "Form details below.\r\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Full Name: " . clean_string($full_name) . "\r\n";
    $email_message .= "Email: " . clean_string($email_from) . "\r\n";
    $email_message .= "Subject: " . clean_string($subject) . "\r\n";
    $email_message .= "Message: " . clean_string($comments) . "\r\n";

    $headers = 'From: ' . $email_from . "\r\n" .
    'Reply-To: ' . $email_from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);
    header("Location: $thankyou");
    ?>
<script>location.replace('<?php echo $thankyou; ?>')</script>
<?php
}
die();
?>
























// if(isset($_POST['submit'])){
// $name = $_POST['name'];
// $subjectFromuser = $_POST['subject'];
// $email = $_POST['email'];
// $messageFromUser = $_POST['message'];

// 	//Sanitize input data using PHP filter_var().
// 	$Name        = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
// 	$Email       = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);


// $message = "Dear Admin,\n\nNew enquiry from Dairy MGT.\nEnquiry Details:\n";
// $message .= "Name: $name\n";
// $message .= "Subject: $subjectFromuser\n";
// $message .= "Email: $email\n";
// $message .= "Email: $messageFromUser\n";

// //proceed with PHP email.
// $headers = 'From: ' . $email . '' . "\r\n" .
// 'Reply-To: ' . $email . '' . "\r\n" .
// 'X-Mailer: PHP/' . phpversion();

// $sentMail = @mail($to_Email, $subject, $message, $headers);

// if (!$sentMail) {
//     $output = json_encode(array('type' => 'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
//     die($output);
// } else {
//     $output = json_encode(array('type' => 'message', 'text' => 'Your message has been sent'));
//     die($output);
// }




// }