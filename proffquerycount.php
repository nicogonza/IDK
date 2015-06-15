<?php 
// Need the database connection:
	require ('mysqli_connect.php');
$sql = "SELECT comments FROM student";
$r = @mysqli_query ($dbc, $sql);
echo mysqli_num_rows($r);
?>