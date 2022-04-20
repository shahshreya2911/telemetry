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
                <h2>My Profile</h2>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <h3>Line Chart</h3>
                        <div id="chartContainer_linechart" style="height: 370px; width: 100%;"></div>
                    </div>
                    <div class="col-md-12">
                        <h3>Area Chart</h3>
                        <div id="chartContainer_areachart" style="height: 370px; width: 100%;"></div>
                    </div>
                    <div class="col-md-12">
                        <h3>Pie Chart</h3>
                        <div id="chartContainer_piechart" style="height: 370px; width: 100%;"></div>
                    </div>
                    <div class="col-md-12">
                        <h3>Pyramid Chart</h3>
                        <div id="chartContainer_pyramidchart" style="height: 370px; width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
 
$dataPoints_linechart = array(
    array("y" => 25, "label" => "Sunday"),
    array("y" => 15, "label" => "Monday"),
    array("y" => 25, "label" => "Tuesday"),
    array("y" => 5, "label" => "Wednesday"),
    array("y" => 10, "label" => "Thursday"),
    array("y" => 0, "label" => "Friday"),
    array("y" => 20, "label" => "Saturday")
);

$dataPoints_areachart = array(
    array("x" => -50, "y" => 6.285), 
    array("x" => -40, "y" => 4.656),
    array("x" => -30, "y" => 3.530),
    array("x" => -20, "y" => 2.731),
    array("x" => -15, "y" => 2.419),
    array("x" => -10, "y" => 2.151),
    array("x" => -5, "y" => 1.920),
    array("x" => 0, "y" => 1.720),
    array("x" => 5, "y" => 1.546),
    array("x" => 10, "y" => 1.394),
    array("x" => 15, "y" => 1.261),
    array("x" => 20, "y" => 1.144),
    array("x" => 25, "y" => 1.040),
    array("x" => 30, "y" => 0.948),
    array("x" => 40, "y" => 0.794),
    array("x" => 50, "y" => 0.670),
    array("x" => 60, "y" => 0.570),
    array("x" => 70, "y" => 0.487),
    array("x" => 75, "y" => 0.45)
);

$dataPoints_piechart = array( 
    array("label"=>"Chrome", "y"=>64.02),
    array("label"=>"Firefox", "y"=>12.55),
    array("label"=>"IE", "y"=>8.47),
    array("label"=>"Safari", "y"=>6.08),
    array("label"=>"Edge", "y"=>4.29),
    array("label"=>"Others", "y"=>4.59)
);

$dataPoints_pyramidchart = array( 
    array("label"=>"Product Inquiry", "y"=>8531),
    array("label"=>"Order Configuration", "y"=>4550),
    array("label"=>"Order Booking", "y"=>4503),
    array("label"=>"Invoicing", "y"=>4491),
    array("label"=>"Shipping", "y"=>4400),
    array("label"=>"Delivery", "y"=>4395)
)

?>

@push('scripts')

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer_linechart", {
    title: {
        text: "Push-ups Over a Week"
    },
    axisY: {
        title: "Number of Push-ups"
    },
    data: [{
        type: "line",
        dataPoints: <?php echo json_encode($dataPoints_linechart, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();


var chart = new CanvasJS.Chart("chartContainer_areachart", {
    title: {
        text: "Viscosity of Ethanol at Different Temperatures"
    },
    axisX: {
        title: "Temperature",
        suffix: " °C"
    },
    axisY: {
        title: "Viscosity (in mPa·s)",
        suffix: " mPa·s"
    },
    data: [{
        type: "area",
        markerSize: 0,
        xValueFormatString: "#,##0 °C",
        yValueFormatString: "#,##0.000 mPa·s",
        dataPoints: <?php echo json_encode($dataPoints_areachart, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();

var chart = new CanvasJS.Chart("chartContainer_piechart", {
    animationEnabled: true,
    title: {
        text: "Usage Share of Desktop Browsers"
    },
    subtitles: [{
        text: "November 2017"
    }],
    data: [{
        type: "pie",
        yValueFormatString: "#,##0.00\"%\"",
        indexLabel: "{label} ({y})",
        dataPoints: <?php echo json_encode($dataPoints_piechart, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();


var chart = new CanvasJS.Chart("chartContainer_pyramidchart", {
    animationEnabled: true,
    title: {
        text: "Order Fulfillment"
    },
    data: [{
        type: "pyramid",
        indexLabel: "{label} - {y}",
        yValueFormatString: "#,##0",
        dataPoints: <?php echo json_encode($dataPoints_pyramidchart, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();

}
</script>
@endpush

@stop
