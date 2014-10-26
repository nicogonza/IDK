<?php 
// Need the database connection:
	require ('mysqli_connect.php');
		$sql = "SELECT * FROM student order by student_ID ASC";
$r = @mysqli_query ($dbc, $sql);
while($row = mysqli_fetch_array($r)){	
	   $comments = $row['comments'];
		}
?>