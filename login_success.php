
<?php
session_start();
if(!session_is_registered(myusername)){
header("location:login.php");
}
?>

<html>
    <head><meta http-equiv="refresh" content="5;url=index.html" /></head>
<body>
Login Successful, redirecting to IDK in 5 seconds
</body>
</html>
