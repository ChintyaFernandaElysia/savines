<!doctype html>
<html lang="en">
  <head>
    <title>Laravel 9 Google Line Graph Chart - Tutsmake.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
 
    <div class="container p-5">
        <h5>Laravel 9 Google Line Chart | Tutsmake.com</h5>
        <a href="{{ url('/chart') }}"></a>
        <div id="chart" style="width: 900px; height: 500px"></div>
 
    </div>
    
    <script src = "https://code.highcharts.com/highcharts.js"></script>
    <script type = "text/javascript">
  var incomes = <?php echo json_encode($amount)?>;
  var month = <?php echo json_encode($month)?>;
  Highchart.chart('chart', {
    title:{
      text: 'Incomes (Monthly)'
    },
    xAxis:{
      categories: month
    }
    yAxis:{
      title:{
        text: 'Monthly Incomes'
      }
    },
    plotOptions:{
      series:{
        allowPointSelect: true
      }
    },
    series: [
    {
      name: "Incomes Amount",
      data: incomes
    }
    ]
  });
</sc>
      
</body>
</html> 