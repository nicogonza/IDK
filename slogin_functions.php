<?php # Script 12.2 - login_functions.inc.php
// This page defines two functions used by the login/logout process.

/* This function determines an absolute URL and redirects the user there.
 * The function takes one argument: the page to be redirected to.
 * The argument defaults to index.php.
 */
function redirect_user ($page = 'studentinput.php') {

	// Start defining the URL...
	// URL is http:// plus the host name plus the current directory:
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	
	// Remove any trailing slashes:
	$url = rtrim($url, '/\\');
	
	// Add the page:
	$url .= '/' . $page;
	
	// Redirect the user:
	header("Location: $url");
	exit(); // Quit the script.

} // End of redirect_user() function.


/* This function validates the form data (the email address and password).
 * If both are present, the database is queried.
 * The function requires a database connection.
 * The function returns an array of information, including:
 * - a TRUE/FALSE variable indicating success
 * - an array of either errors or the database result
 */
function check_login($dbc, $classid = '') {

	$errors = array(); // Initialize error array.

	// Validate the email address:
	if (empty($classid)) {
		$errors[] = 'You forgot to enter your Class ID.';
	} else {
		$cid = mysqli_real_escape_string($dbc, trim($classid));
	}


	if (empty($errors)) { // If everything's OK.
		
		// Retrieve the user_id and first_name for that email/password combination:
		$q = "SELECT class_ID FROM class WHERE class_ID=\"$cid\";";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		
		//$errors[] =  "r = $r";
		// Check the result:
		if (mysqli_num_rows($r) >= 1) {

			// Fetch the record:
			$row = mysqli_fetch_array ($r, MYSQLI_ASSOC);
	
			// Return true and the record:
			return array(true, $row);
			
		} else { // Not a match!
			$errors[] = 'The Class ID entered is incorrect.';
		}
		
	} // End of empty($errors) IF.
	
	// Return false and the errors:
	return array(false, $errors);

} // End of check_login() function.