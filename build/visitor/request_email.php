<?php
// The coookie name.
define("COOKIE_NAME", "email");

// The email placeholder
$placeholder = "joe@example.com";

// Database details.
//require($_SERVER['DOCUMENT_ROOT']) . '/beta/visitor/db.php';
require 'db.php';
// Start a session to store the originally requested URI.
ini_set('session.cookie_path', './');
session_start();
if (!isset($_SESSION['original_uri'])) {
	$_SESSION['original_uri'] = $_SERVER['REQUEST_URI'];
}
// If the visitor is submitting his email address:
// 1. Store the email address if it is valid
// 2. Redirect user to originally requested page.
$submitted_form = FALSE;
$email = "";
$email_valid = FALSE;
if (isset($_POST['submit_email'])) {
	// Set the cookie, store the email address, and redirect user if the email address
	// is valid. Else, re-display the email form.
	$email = $_POST['email'];
	$submitted_form = TRUE;
	if (filter_var($email, FILTER_VALIDATE_EMAIL) && strcmp($email, $placeholder) != 0) {
		// Set the cookie
		if (!setcookie(COOKIE_NAME, $email, time() + 60 * 60 * 24 * 365 * 10, '/', $_SERVER['HTTP_HOST'])) {
			exit("Please enable cookies in your browser.");
		}
		store_email($email);
		$email_valid = TRUE;
		$original_uri = $_SESSION['original_uri'];
		// Destroy the session.
  		session_destroy();
  		setcookie(session_name(), FALSE, time() - 864000);
		// Redirect visitor to originally requested page.
		header("Location: " . $original_uri);
	} else {
		show_email_form($placeholder, $submitted_form, $email, $email_valid);
	}
} else {
	// Display the email form.
	show_email_form($placeholder, $submitted_form, $email, $email_valid);
}

// Function Definitions
function show_email_form($placeholder, $submitted_form, $email, $email_valid) {
	require 'email_form.php';
}

// Store an email in the database.
function store_email($email) {
	// Connect to the database.
	$dsn = 'mysql:host='.VISITORDB_HOST.';dbname='.VISITORDB_NAME.';charset='.VISITORDB_CHARSET;
	$username = VISITORDB_USERNAME;
	$password = VISITORDB_PASSWORD;
	try {
		$db = new PDO($dsn, $username, $password);
		// Insert the email address (ignore any warnings/errors if the email already exists).
		$query = "INSERT INTO visitors.emails (email) VALUES('" . $email . "')";
		$db->exec($query);
		$db = null;
	} catch (PDOException $ex) {
		echo "ERROR: " . $ex->getMessage() . "<br/>";
		exit();
	}
	
}

?>
