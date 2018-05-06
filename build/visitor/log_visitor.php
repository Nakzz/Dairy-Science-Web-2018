<?php
// The 'email' cookie should have been set at this point.
// We just log the email address.

/**
 * Log the activity of the visitor.
 * @param tool The name of the tool.
 */
function log_visitor($tool) {
	// Don't log visitors visiting the development version of
	// the website dev.dairymanagement.wisc.edu.
	
	//if (strpos($_SERVER['HTTP_HOST'], 'dev.dairymanagement.wisc.edu') === FALSE) {
		require ('db.php');
		$email = $_COOKIE['email'];
		// Connect to the database.
		$dsn = 'mysql:host=' . VISITORDB_HOST . ';dbname=' . VISITORDB_NAME . ';charset=' . VISITORDB_CHARSET;
		$username = VISITORDB_USERNAME;
		$password = VISITORDB_PASSWORD;
		try {
			$db = new PDO($dsn, $username, $password);
			// Log the visit.
			$query = "INSERT INTO visitors.visits (email, tool) VALUES('" . $email . "', '" . $tool . "')";
			$db -> exec($query);
			$db = null;
		} catch (PDOException $ex) {
			echo "ERROR: " . $ex -> getMessage() . "<br/>";
			exit();
		}
	//}
	
}
?>
