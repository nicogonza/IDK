
<?php

ob_start();
require('mysqli_connect.php');
mysqli_connect(localhost,gonzodev_kavy,hacknc2014 )or die("cannot connect"); 
mysqli_select_db("gonzodev_idk")or die("cannot select DB");

// get $myusername and $mypassword from login.php
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 


$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($myusername);
$mypassword = mysqli_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($sql);

// is there such user
$count=mysqli_num_rows($result);

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:login_success.php");
}
else {
echo " Wrong Username or Password";
}
ob_end_flush();
?>

