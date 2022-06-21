@extends('layouts.app_new')
@section('page-heading', 'Event Chart')
@section('breadcrumbs')
    <li class="breadcrumb-item active">
       Event Chart 
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
                        <h3>Line Chart</h3>
                        <canvas id="canvas_linechart" height="280" width="600"></canvas>
                    </div>
                    <div class="col-md-8 chart_data">
                        <h3>Bar Chart</h3>
                        <canvas id="canvas" width="100%"></canvas>
                    </div>
                    <div class="col-md-8 chart_data">
                        <h3>Pie Chart</h3>
                        <canvas id="canvas_piechart" height="280" width="600"></canvas>
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

    var days = <?php echo $days; ?>;
    var event_data_final = <?php echo $event_data_final; ?>;
    // console.log(days); 
    // console.log(marchAllData); 
    // console.log(aprAllData); 

    
    var barChartData = {
        datasets: [{
          label: 'Event Data',
          backgroundColor: '#EB984E',
          borderColor: '#EB984E',
          data: event_data_final,
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

   
    };
</script>
@endpush

@stop
