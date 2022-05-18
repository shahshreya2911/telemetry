@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- chart here  -->

        <div class="col-md-12">
            <h3>Bar Chart</h3>
            <canvas id="canvas" height="280" width="600"></canvas>
        </div>
        <div class="col-md-12">
            <h3>Line Chart</h3>
            <canvas id="canvas_linechart" height="280" width="600"></canvas>
        </div>
        <div class="col-md-12">
            <h3>Pie Chart</h3>
            <canvas id="canvas_piechart" height="280" width="600"></canvas>
        </div>
        <div class="col-md-12">
            <h3>Polar Area Chart</h3>
            <canvas id="canvas_polarchart" height="280" width="600"></canvas>
        </div>

    </div>
</div>

@endsection

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var year = <?php echo $year; ?>;
    var user = <?php echo $user; ?>;
    var user2 = <?php echo $user2; ?>;
    var color = <?php echo $color; ?>;

    var barChartData = {
        labels: year,
        datasets: [{
          label: 'March Data',
          backgroundColor: 'blue',
          borderColor: 'blue',
          data: user,
        },
        {
          label: 'April Data',
          backgroundColor: 'red',
          borderColor: 'red',
          data: user2,
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
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Yearly User Joined'
                }
            }
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