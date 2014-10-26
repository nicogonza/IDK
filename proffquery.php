<?php 
// Need the database connection:
	require ('mysqli_connect.php');
		$sql = "SELECT * FROM student order by student_ID ASC";
$r = @mysqli_query ($dbc, $sql);
while($row = mysqli_fetch_array($r)){	
	   $comments = $row['comments'];
        $timesp = $row['times_pressed'];
    echo $comments;
    echo $timesp;
		}
$sql = "SELECT * FROM class";
$r = @mysqli_query ($dbc, $sql);
while($row = mysqli_fetch_array($r)){
    $classiD=$row['class_ID'];
    $class_size=$row['class_Size'];
    $student_ID=$row['student_ID'];}
echo 'percentage: ';echo ($timesp/$class_size)*100;echo '% do not understand';
?>