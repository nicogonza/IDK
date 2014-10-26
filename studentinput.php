<html>
<?php
	// Need the database connection:
	require ('mysqli_connect.php');
	
	if (isset($_POST['response'])) {
		echo "Working";
		
		$sql = "SELECT * FROM `student`";
		$r = @mysqli_query ($dbc, $sql);
		while($row = mysqli_fetch_array($r)){
		
	//	$student = $row['student_ID'];
		$timep = $row['times_pressed'];
		$class = $row['class_ID'];
		
		}
		$question = $_POST['question'];
		//query
		$sql = "INSERT INTO `student`(`class_ID`,`comments`, `student_ID`,`times_pressed`) values(1000,$question, 1, $timep+1);";
		$r = @mysqli_query ($dbc, $sql);
		if ($r){
			echo '<h1> Thank you for your question <h1>';
		}else {
			echo '<h1>Error!</h1>';
		}
	}
?>
<head>
	<title> Student IDK </title>
	<script type="text/javascript" src="https://cdn.firebase.com/v0/firebase.js"></script>
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
</head>
<body>
	<div class="student-input">
	<input type='text' id='question' placeholder="Type your question here..." > <br />
	<input type='button' id='submit' value="Do Not Understand" onclick="sendComment(document.getElementById('question').value)">
	</div>
    
    <p id="demo"></p>
	
	<script>
	function sendComment(text) { 
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
		xmlhttp.open("POST","studentinput.php?response="+text,true);
		xmlhttp.send();
	}
	</script>
	
</body>
