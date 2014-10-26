// JavaScript Document
$(function worker(){
    // don't cache ajax or content won't be fresh
    $.ajaxSetup ({
        cache: false,
        complete: function() {
          // Schedule the next request when the current one's complete
          setTimeout(worker, 1000);
        }
    });
	drawChart();
      function drawChart() {
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
    var ajax_load = $.post('post.php',function(data){
			$('div#data').html(data);
		});
   html(ajax_load);
});