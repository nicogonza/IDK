<?php 
// Need the database connection:
	require ('mysqli_connect.php');
$sql = "SELECT * FROM student order by student_ID DESC LIMIT 10";
$r = @mysqli_query ($dbc, $sql);
while ( $row = mysqli_fetch_array($r, MYSQLI_ASSOC) ) {
    $comments = $row['comments'];
    echo "<br>";
    echo $row['class_ID'];
    echo " - ".$comments;
}
?>