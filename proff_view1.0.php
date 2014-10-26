<!DOCTYPE HTML>
<html>

<head>  
<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "How many students understand your class?",
			fontFamily: "arial black"
		},
		legend: {
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
		theme: "theme1",
		data: [
		{        
			type: "pie",
			indexLabelFontFamily: "Garamond",       
			indexLabelFontSize: 20,
			indexLabelFontWeight: "bold",
			startAngle:0,
			indexLabelFontColor: "MistyRose",       
			indexLabelLineColor: "darkgrey", 
			indexLabelPlacement: "inside", 
			toolTipContent: "{name}: {y}hrs",
			showInLegend: true,
			indexLabel: "#percent%", 
			dataPoints: [
				{  y: 50, name: "Student who understand", legendMarkerType: "triangle"},
				{  y: 5-, name: "Students who do not understand", legendMarkerType: "square"},
				
			]
		}
		]
	});
	chart.render();
}
</script>
<script type="text/javascript" src="/js/canvasjs.js"></script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
</body>

</html>
