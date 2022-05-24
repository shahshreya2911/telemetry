@extends('layouts.app_new')
@section('page-heading', 'Charts')
@section('breadcrumbs')
    <li class="breadcrumb-item active">
       Charts
    </li>
@stop

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Charts</h2>
            </div>
            <div class="card-body">
                <div class="row chart_area">
                    <!-- chart data -->
                    <div class="col-md-8 chart_data">
                        <h3>Bar Chart</h3>
                        <canvas id="canvas" width="100%"></canvas>
                    </div>
                    <div class="col-md-8 chart_data">
                        <h3>Line Chart</h3>
                        <canvas id="canvas_linechart" height="280" width="600"></canvas>
                    </div>
                    <div class="col-md-8 chart_data">
                        <h3>Pie Chart</h3>
                        <canvas id="canvas_piechart" height="280" width="600"></canvas>
                    </div>
                    <div class="col-md-8 chart_data">
                        <h3>Polar Area Chart</h3>
                        <canvas id="canvas_polarchart" height="280" width="600"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@push('scripts')

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // var year = <?php echo $year; ?>;
    // var user = <?php echo $user; ?>;
    // var user2 = <?php echo $user2; ?>;

    var days = <?php echo $days; ?>;
    var marchAllData = <?php echo $marchAllData; ?>;
    var aprAllData = <?php echo $aprAllData; ?>;

    var color = <?php echo $color; ?>;

    var barChartData = {
        labels: days,
        datasets: [{
          label: 'March Data',
          backgroundColor: '#EB984E',
          borderColor: '#EB984E',
          data: marchAllData,
        },
        {
          label: 'April Data',
          backgroundColor: '#409FC0',
          borderColor: '#409FC0',
          data: aprAllData,
        }]
    };

    window.onload = function() {

        ///////////////// Bar chart 
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Yearly User Joined'
                }
            }
        });

        ///////////////// Line  chart 
        var ctx = document.getElementById("canvas_linechart").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'line',
            data: barChartData,
        });

        ///////////////// Pie chart 
        var ctx = document.getElementById("canvas_piechart").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'pie',
            data: barChartData,
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Yearly User Joined'
                }
            }
        });

        ///////////////// Pyramid chart 
        var ctx = document.getElementById("canvas_polarchart").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'polarArea',
            data: barChartData,
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Yearly User Joined'
                }
            }
        });
    };
</script>
@endpush

@stop
