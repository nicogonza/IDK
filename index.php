<?php
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>
	require ('mysqli_connect.php');
?>
<html>
<head>
	<title> Teacher IDK </title>
</head>
<body>


</body>