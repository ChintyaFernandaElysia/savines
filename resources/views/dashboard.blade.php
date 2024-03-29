@extends('layouts.app')

@section('title', 'Dashboard')

@section('contents')
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@200;300;400;500&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Kodchasan:ital,wght@0,300;1,200;1,300&family=Montserrat:ital,wght@0,200;0,300;0,800;1,200;1,300;1,400;1,500;1,600;1,700&family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Parisienne&family=Playball&family=Poppins:ital,wght@0,100;0,200;0,300;0,800;0,900;1,100;1,200;1,300&family=Roboto+Condensed:wght@300;400;700&family=Roboto+Mono:ital,wght@0,100;1,100&family=Roboto:ital,wght@0,100;0,300;1,100&family=Rubik+Beastly&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <div class="row">
    <!-- Income (This Month) -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Income (This Month)</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ 'Rp '.number_format($incomeThisMonth, 0, ',', '.') }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Expense (This Month) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                Expense (This Month)</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ 'Rp '.number_format($expenseThisMonth, 0, ',', '.') }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Expense (Latest) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Expense (Latest)
              </div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ 'Rp '.number_format($latestExpenseAmount, 0, ',', '.') }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Savings -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                Savings</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ 'Rp '.number_format($savings, 0, ',', '.') }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-danger">Transactions (Monthly)</h6>
          <div id="chart">
            <div class="dropdown no-arrow">
              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Dropdown Header:</div>
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-area">
            <canvas id="myAreaChart"></canvas>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Overall</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                </div>
            </div>

            <!-- Card Body -->
            <div class="card-body">
              <div class="chart-pie pt-4 pb-2">
                <canvas id="myPieChart"></canvas>
              </div>
              <div class="mt-4 text-center small">
                <span class="mr-2">
                  <i class="fas fa-circle text-success"></i> Income
                </span>
                <span class="mr-2">
                  <i class="fas fa-circle text-danger"></i> Expense
                </span>
                <span class="mr-2">
                  <i class="fas fa-circle text-warning"></i> Savings
                </span>
              </div>
            </div>
        </div>
    </div>
  </div>

  <div class="row">
    <!-- Notes (Latest) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Notes (latest)</div>
                @if ($notes == null)
                @else
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $notes->title }}</div>
                <div class="h6 mb-0 text-gray-800">{{ $notes->description }}</div>
                @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Goals (Latest) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Goals (Latest)</div>
                @if ($goals == null)
                @else
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $goals->title }}</div>
                <div class="h6 mb-0 text-gray-800">{{ $goals->description }}</div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    

 
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    
    <script src = "https://code.highcharts.com/highcharts.js"></script>
    
  <script type="text/javascript">
    
      var labels =  {{ Js::from($labels) }};
      var users =  {{ Js::from($data) }};
    
      const data = {
          labels: labels,
          datasets: [{
              label: 'My First dataset',
              backgroundColor: 'rgb(255, 99, 132)',
              borderColor: 'rgb(255, 99, 132)',
              data: users,
          }]
      };
    
      const config = {
          type: 'line',
          data: data,
          options: {}
      };
    
      const myChart = new Chart(
          document.getElementById('myAreaChart'),
          config
      );


    
  </script>

  <script type="text/javascript">
  
  // Set new default font family and font color to mimic Bootstrap's default styling
  Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
  Chart.defaults.global.defaultFontColor = '#858796';
  
  // Pie Chart Example
  var ctx = document.getElementById("myPieChart");
  var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Income", "Expense", "Savings"],
    datasets: [{
      data: [ {{ $income }}, {{ $expense }}, {{ $savings }}],
      backgroundColor: ['#44CD9D', '#E36E64', '#EFC967'],
      hoverBackgroundColor: ['#44CD9D', '#E36E64', '#EFC967'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
  });  
  </script>

<script src = "https://code.highcharts.com/highcharts.js"></script>
@endsection
