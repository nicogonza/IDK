<?php 
	require ('mysqli_connect.php');
$sql = "SELECT * FROM student order by student_ID DESC";
$r = @mysqli_query ($dbc, $sql);
$row = mysqli_fetch_array($r);
	   $timesp = intval($row['times_pressed']);
	   echo $timesp;
?>