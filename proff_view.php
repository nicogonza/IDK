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
<body>
<div id="header">
  <h2>Classroom Analytics</h2>
</div>
<div id="piechart" style="width: 900px; height: 500px;"></div>
<h3 id="title"></h3>
<div id="data">

<?php
include('proffquery.php'); 
include('post.php'); 
?>

<script>
$(function worker(){
    $.ajaxSetup ({
        cache: false,
        complete: function() {
          setTimeout(worker, 1000);
        }
    });
$.post('proffquery.php', { key: 'comments'}).done(function(data) {
	$('div#data').text(data);
	$('div#data').append("<br>");
});
drawChart();
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Selection', 'Per'],
          ['IDK',     18],
          ['K',      5]
        ]);
        var options = {
          title: 'IDK'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
});
</script>
<script language="javascript" type="text/javascript" src="global.js">
</script>
</div>

<div id="data2"></div>

</body>
</html>
