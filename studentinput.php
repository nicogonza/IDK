<html>
<?php
	// Need the database connection:
	require ('mysqli_connect.php');
	
	if (isset($_POST['press'])) {
		
		$sql = "SELECT * FROM `student` order by student_ID ASC";
		$r = @mysqli_query ($dbc, $sql);
		while($row = mysqli_fetch_array($r)){
		
	//	$student = $row['student_ID'];
		$timep = $row['times_pressed'];
		$class = $row['class_ID'];
		$sid = $row['student_ID'];
		}
		//query
		$question = $_POST["name"];
		$timep= $timep+1;
		$sid = $sid+1;
		$sql = "INSERT INTO `student`(`class_ID`,`comments`, `student_ID`,`times_pressed`) values(1000,\"$question\", $sid, $timep)";
		echo "<br>";
		echo $sql;
		$r = @mysqli_query ($dbc, $sql);
		if ($r){
			echo '<h1> Thank you for your question <h1>';
		}else {
			echo '<h1>Error!</h1>';
		}
	} else {
?>
<head>
	<title> Student IDK </title>
	<script type="text/javascript" src="https://cdn.firebase.com/v0/firebase.js"></script>
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
</head>
<body>
	<div class="student-input">
    <form method="post" action="studentinput.php">
    <input type="text" name="name"><br>
	<input type='submit' id='submit' name='press' value="Do Not Understand" onclick="sendComment(document.getElementById('question').value)">
    </form>
	</div>
    
    <p id="demo"></p>
	
	<script>
	function sendComment(text) { 
	document.getElementById("demo").innerHTML = text;
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onstatechange=function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("student-input").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","studentinput.php?response="+text,true);
		xmlhttp.send();
	}
	</script>	
</body>
<?php } ?>

