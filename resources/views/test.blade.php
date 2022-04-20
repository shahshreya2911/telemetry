@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- chart here  -->

        <div class="col-md-12">
                    <canvas id="canvas" height="280" width="600"></canvas>
                </div>
        <div class="col-md-6">
            <h3>Line Chart</h3>
            <div id="chartContainer_linechart" style="height: 370px; width: 100%;"></div>
        </div>
        <div class="col-md-6">
            <h3>Area Chart</h3>
            <div id="chartContainer_areachart" style="height: 370px; width: 100%;"></div>
        </div>
        <div class="col-md-6">
            <h3>Pie Chart</h3>
            <div id="chartContainer_piechart" style="height: 370px; width: 100%;"></div>
        </div>
        <div class="col-md-6">
            <h3>Pyramid Chart</h3>
            <div id="chartContainer_pyramidchart" style="height: 370px; width: 100%;"></div>
        </div>
    </div>
</div>

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
    var year = <?php echo $year; ?>;
    var user = <?php echo $user; ?>;
    var barChartData = {
        labels: year,
        datasets: [{
            label: 'User',
            backgroundColor: "pink",
            data: user
        }]
    };

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#c1c1c1',
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
    };
</script>