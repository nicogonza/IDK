<?php
require ('mysqli_connect.php'); 
if (isset($_POST['signup'])) {
// Check for a password and match against the confirmed password:
	$username = $_POST['username'];
	$classid = $_POST['classid'];
	$classsize = $_POST['classsize'];
	if (!empty($_POST['pass1'])) {
		if ($_POST['pass1'] != $_POST['pass2']) {
			$errors[] = 'Your password did not match the confirmed password.';
		} else {
			$pass = trim($_POST['pass1']);
		}
	} else {
		$errors[] = 'You forgot to enter your password.';
	}
	if (empty($errors)) { // If everything's OK.
		$q = "SELECT * FROM professors group by id ASC";
		$r = @mysqli_query ($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.
			$row = mysqli_fetch_array($r);
			$profid = $row['id'] + 1;
		}
		$q = "INSERT INTO professors(`id`,`password`,`username`) values ($profid, \"$pass\", \"$username\")";
		$r = @mysqli_query ($dbc, $q); // Run the query.
		$q = "INSERT INTO class (`class_ID`,`class_Size`) values ($classid, $classsize)";  
		$r = @mysqli_query ($dbc, $q); // Run the query.
		mysqli_close($dbc); // Close the database connection.
        header("Location: index.html");
		exit();
    } else { // Report the errors.
		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br>';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br>";
		}
		echo '</p><p>Please try again.</p><p><br></p>';
	} // End of if (empty($errors)) IF.
}
?>

<HTML>
<head>
<link rel="stylesheet" href="css/style.css" />
</head>

<div class="signup">
  <h1 id="header">Sign Up</h1>
  <form name="form1" method="post" action="signup.php">
    <input name="username" type="text" id="myusername" placeholder="Username">
    <input name="pass1" type="password" id="pass1" placeholder="Password">
    <input name="pass2" type="password" id="pass2" placeholder="Password">
    <input name="classid" type="text" id="classid" placeholder="Class ID">
    <input name="classsize" type="text" id="classsize" placeholder="Class Size">
    <input type="submit" name="signup" value="Sign Up">
  </form>
</div>
</HTML>