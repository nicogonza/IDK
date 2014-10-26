<?php 
require ('mysqli_connect.php');
$sql = "SELECT * FROM class";
$r = @mysqli_query ($dbc, $sql);
while($row = mysqli_fetch_array($r)){
    $classiD=$row['class_ID'];
    $class_size=$row['class_Size'];
    $student_ID=$row['student_ID'];}
?>