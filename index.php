<html>
<head>
    <?php
    require 'includes/links.php';
    ?>
    <title>Covid-19</title>  
      <link rel="stylesheet" text="text/css" href="index.css"> 

</head>
<body>
    <?php
        require "includes/header.php";
    ?>
<body>
  <div class="content">
     <div class="content banner_image">
		<div class="inner_banner_image"></div>
                <div class="banner_content"></div>
		<div id="piechart"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Region', 'Number of cases'],
  ['Americas', 9],
  ['Europe', 5],
  ['South-East-Asia', 3],
  ['Eastern Mediterranean', 3.1],
  ['Africa', 2.6],
  ['Western-pacific', 1.5]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Dashboard of various regions(confirmed cases)', 'width':550, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    exportEnabled: true,
    animationEnabled: true,
    title: {
        text: "Dashboard of various Countries(confirmed cases)"
    },
    data: [{
        type: "pie",
        startAngle: 25,
        toolTipContent: "<b>{label}</b>: {y}%",
        showInLegend: "true",
        legendText: "{label}",
        indexLabelFontSize: 16,
        indexLabel: "{label} - {y}%",
        dataPoints: [
            { y: 36.2, label: "United States of America" },
            { y: 20.52, label: "Brazil" },
            { y: 11.86, label: "India" },
            { y: 7.37, label: "Russian Federation" },
            { y: 3.76, label: "South Africa" },
            { y: 3.37, label: "Peru" },
            { y: 3.338, label: "Mexico" },
            { y: 3.12, label: "Chile" },
            { y: 2.73, label: "The United Kingdom" },
            { y: 2.61, label: "Iran" },
            { y: 2.49, label: "Pakistan" },
            { y: 2.48, label: "Spain" }
        
        ]

    }]
});
chart.render();

}
</script>
<div id="chartContainer" style="height: 500px; width: 30%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  </div>
  </div>
<nav class="navbar navbar-inverse navbar-fixed-bottom">
<div class="footer">
	<div class="container">
		<center>"Copyright © Lifestyle Store. All Rights  Reserved” ​and ​“Contact Us: +91 90000 00000"</center>
	</div>
</div>
</nav>
</body>
</html>