<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Professor View</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  

<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>
<script language="javascript" type="text/javascript" src="js/jquery.js">
</script>
</head>
<body id="test">
<div id="header">
  <h2 style="color:#FFFFFF">Classroom Analytics</h2>
</div>
<div id="piechart" style="width: 900px; height: 500px;"></div>
<h3 id="title"></h3>
<div id="data" style="color:#FFFFFF">

<?php
include('proffquery.php'); 
include('post.php'); 
?>

<script language="javascript" type="text/javascript" src="global.js">
</script>
</div>

<div id="data2" style="color:#FFFFFF"></div>

</body>
</html>
