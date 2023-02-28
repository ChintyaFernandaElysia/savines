<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
  
        var data = google.visualization.arrayToDataTable({{ Js::from($result) }});
  
        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };
  
        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <h1>Laravel Google Pie Chart Example - ItSolutionStuff.com</h1>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>