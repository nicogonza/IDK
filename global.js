$(function worker(){
    $.ajaxSetup ({
        cache: false,
        complete: function() {
          setTimeout(worker, 1000);
        }
    });
$.post('proffquery.php', { key: 'comments'}).done(function(data) {
	$('div#data2').text(data);
	$('div#data2').append("<br>");
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