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
                      <!--   <div id="chartContainer_barchart" style="height: 370px; width: 100%;"></div> -->
                    </div>
                    <div class="col-md-8 chart_data">
                        <h3>Area Chart</h3>
                        <div id="chartContainer_areachart" style="height: 370px; width: 100%;"></div>
                    </div>
                    <div class="col-md-8 chart_data">
                        <h3>Pie Chart</h3>
                        <div id="chartContainer_piechart" style="height: 370px; width: 100%;"></div>
                    </div>
                    <div class="col-md-8 chart_data">
                        <h3>Pyramid Chart</h3>
                        <div id="chartContainer_pyramidchart" style="height: 370px; width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@push('scripts')

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
@endpush

@stop
