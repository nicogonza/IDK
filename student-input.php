<?php
	// Need the database connection:
	require ('mysqli_connect.php');
?>
<html>
<head>
	<title> Student IDK </title>
	<script type="text/javascript" src="https://cdn.firebase.com/v0/firebase.js"></script>
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
</head>
<body>
	<div class="student-input">
	<input type='text' name='question' placeholder="Type your question here..."> <br />
	<input type='button' name='submit' value="Do Not Understand" onclick="send()">
	</div>
	<div class="class-status">
	
	</div>
</body>
