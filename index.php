<?php
session_start();
if(!session_is_registered(myusername)){
    echo 'if is true';
header("location:login.php");
}
?>
<html>
<head>
	<title> Teacher IDK </title>
</head>
<body>


</body>
