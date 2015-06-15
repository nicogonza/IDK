<?php
function redirect_user ($page = 'proff_view.php') {
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	$url = rtrim($url, '/\\');
	$url .= '/' . $page;
	header("Location: $url");
	exit(); 
} 
function check_login($dbc, $username = '', $password = '') {
	$errors = array(); 
	if (empty($username)) {
		$errors[] = 'You forgot to enter your username.';

	} else {
		$e = mysqli_real_escape_string($dbc, trim($username));
        echo "tesasfdasasdasddast";
        echo $e;
	}
	if (empty($password)) {
		$errors[] = ' You forgot to enter your password.';
	} else {
		$p = mysqli_real_escape_string($dbc, trim($password));
	}
	if (empty($errors)) { // If everything's OK.
		$q = "SELECT username FROM professors WHERE username='$e' AND password='$p'";
        echo $q;
		$r = @mysqli_query ($dbc, $q); // Run the query.
		if (mysqli_num_rows($r) == 1) {
			$row = mysqli_fetch_array ($r, MYSQLI_ASSOC);
			return array(true, $row);
		} else { // Not a match!
			$errors[] = 'The email address and password entered do not match those on file.';
		}
	} 
	return array(false, $errors);
} 