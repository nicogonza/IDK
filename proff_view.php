<html>
    <head><meta http-equiv="refresh" content="2" ></head>
<?php
	// Need the database connection:
	require ('mysqli_connect.php');
		$sql = "SELECT * FROM student order by student_ID ASC";
$r = @mysqli_query ($dbc, $sql);
while($row = mysqli_fetch_array($r)){	
	   $comments = $row['comments'];
        $timesp = $row['times_pressed'];
    echo "<br>";
    echo $comments;
    echo "<br>";
    echo $timesp;echo "<br>";
		}
$sql = "SELECT * FROM class";
$r = @mysqli_query ($dbc, $sql);
while($row = mysqli_fetch_array($r)){
    $classiD=$row['class_ID'];
    $class_size=$row['class_Size'];
    $student_ID=$row['student_ID'];}
echo 'percentage: ';echo ($timesp/$class_size)*100;echo '% do not understand';
?>;
    
    
    
/*
    $data = '';
		if(isset($_POST['search']))
		{
			$var = $_POST['search'];
			if($query = mysql_query("SELECT name from names_table where name LIKE '%$var%'"))
			{
				while($d = mysql_fetch_array($query))
				{
						$data .= $data . '<div>' . $d['name'] . '</div>'; //incrementation .=

				}
				echo $data;
			}
		}else{


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>tutorial 1</title>
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script type="text/javascript">
			$(function(){
				$('.input').keyup(function() {
					var a = $('.input').val();
					$.post('index.php',{"search":a},function(data){
						$('#display').html(data);
					});
				});

			});
	</script>
</head>
<body>
	<form action="index.php" method='POST'>
		<input type="text" name='search' class='input'>
	</form>
	<div id='display' style='margin-top: 100px;'></div>
</body>

</html>
<?php  } ?>* */