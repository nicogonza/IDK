<?php 
// Need the database connection:
	require ('mysqli_connect.php');
$sql = "SELECT * FROM student order by student_ID DESC";
$r = @mysqli_query ($dbc, $sql);
$row = mysqli_fetch_array($r);
	   $comments = $row['comments'];
		echo $comments;
		echo "Class ID: ".$row['class_ID'];
?>