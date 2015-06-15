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
<a href="studentinput.php" target="_blank">Ask a question</a>
<h2>Comments:</h2>
<p id="comments"></p>
<div id="piechart" style="width: 900px; height: 500px;"></div>
<h3 id="title"></h3>
<div id="data" style="color:#FFFFFF">
</div>
<div id="data2" style="color:#FFFFFF"></div>
<script>
    var count;
    setInterval(worker, 1000);
    function worker(){
        $.ajax({
            url: "proffquerycount.php"
        })
            .done(function(html) {
                count = parseInt(html);
            });

        //ajax function that queries every minute
        //jQuery function
        $.ajax({
            url: "proffquery.php"
        })
            .done(function(html) {
                document.getElementById("comments").innerHTML = html;
            });

        drawChart();

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Selection', 'Per'],
                ['IDK',    count],
                ['K',    100-count]
            ]);
            var options = {
                title: 'Number of Knows vs. I Dont Knows'
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    }
</script>

<p>
    For test purposes, each time you ask a question, it will register as a new student instead of updating the count of the current student.
</p>
</body>
</html>
