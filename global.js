$(function worker(){
    $.ajaxSetup ({
        cache: false,
        complete: function() {
          setTimeout(worker, 1000);
        }
    });
	drawChart();
      function drawChart() {
		  $.post('proffquery.php', { key: 'comments'}).done(function(data) {
    $('div#data').append(data);
	$('div#data').append("<br>");
});
        var data = google.visualization.arrayToDataTable([
          ['Selection', 'Per'],
          ['IDK',     11],
          ['K',      5]
        ]);
        var options = {
          title: 'IDK'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
$.post('proffquery.php', { key: 'comments'}).done(function(data) {
    $('div#data').append(data);
	$('div#data').append("<br>");
});
});