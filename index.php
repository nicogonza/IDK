<?php
session_start();
?>
<html>
<head>
	<title> IDK Application </title>
        <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="prof-login">
<form name="form1" method="post" action="check-login.php">
        
    <h2 class="form-signin-heading">Professor log in</h2>
        <input name="myusername" type="myusername" placeholder="Email address" required autofocus id="myusername"><br>
        <input name="mypassword" type="password" id="mypassword" placeholder="Password" required><br>
        <input name="login" value="Log in" type="submit"></input>
      </form>
</div> <!-- prof-login-->
    </div> <!-- /container -->
</body>
