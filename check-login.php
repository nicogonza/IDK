<?php
if (isset($_POST['login'])) {

	// For processing the login:<p></p>
	require ('login_functions.php');
	
	// Need the database connection:
	require ('mysqli_connect.php');
		
	// Check the login:
	list ($check, $data) = check_login($dbc, $_POST['myusername'], $_POST['mypassword']);
	if ($check) { // OK!
	
                $_SESSION['username']=$data['username'];
				
				$q = "select * from professors where username= \"".$_SESSION['username']."\";";	
		
				$r = @mysqli_query ($dbc, $q); 
				
				if($r) {
					
				$row = mysqli_fetch_array($r);
				
				} else {
					
					echo '<h1>System Error</h1>
			<p class="error">There are no entries in the table</p>'; 
	
			echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $q . '</p>';
				}
		
		// Redirect:
		redirect_user('proff_view.php');
			
	} else { // Unsuccessful!

		// Assign $data to $errors for error reporting
		// in the login_page.php file.
		$errors = $data;

	}
	  	
	mysqli_close($dbc); // Close the database connection.

} // End of the main submit conditional.
// Print any error messages, if they exist:
if (isset($errors) && !empty($errors)) {
	echo '<h1>Error!</h1>
	<p class="error">The following error(s) occurred:<br>';
	foreach ($errors as $msg) {
		echo " - $msg<br>\n";
	}
	echo '</p><p>Please try again.</p>';
}

include('login.php');
?>