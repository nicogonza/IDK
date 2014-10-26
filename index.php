<?php
session_start();
?>
<html>
<head>
<title>IDK Application</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
  <div class="prof-login">
    <form name="form1" method="post" action="check-login.php">
      <h2 class="form-signin-heading">Log In</h2>
      <input name="prof" value="Log in" type="submit">
      </input>
      <input name="student" value="Log in" type="submit">
      </input>
    </form>
  </div>
  <!-- prof-login--> 
</div>
<!-- /container -->
</body>
