$(function worker(){
    $.ajaxSetup ({
        cache: false,
        complete: function() {
          setTimeout(worker, 10000);
        }
    });
$.post('proffquery.php', { key: 'comments'}).done(function(data) {
	$('div#data2').text(data);
	$('div#data2').append("<br>");
});
$.post('post.php', { key: 'times_pressed'}).done(function(data) {
	$('div#data2').text(data);
	$('div#data2').append("<br>");
});
drawChart();
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Selection', 'Per'],
          ['IDK',     Math.random(300)],
          ['K',      Math.random(300)]
        ]);
        var options = {
          title: 'IDK'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
});