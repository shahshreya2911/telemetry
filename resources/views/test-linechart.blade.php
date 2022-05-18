<!DOCTYPE html>
<html>
<head>
    <title>Laravel ChartJS Chart Example - ItSolutionStuff.com</title>
</head>
    
<body>
    <h1>Laravel ChartJS Chart Example - ItSolutionStuff.com</h1>
    <div style="margin: 5%; ">
        <canvas id="myChart" height="100px"></canvas>    
    </div>
    
</body> 
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script type="text/javascript">
  
        var year = <?php echo $year; ?>;
        var user = <?php echo $user; ?>;
        var user2 = <?php echo $user2; ?>;
        var color = <?php echo $color; ?>;  
  
      const data = {
        labels: year,
        datasets: [{
          label: 'My First dataset',
          backgroundColor: 'green',
          borderColor: 'green',
          data: user,
        },
        {
          label: 'My Second dataset',
          backgroundColor: 'red',
          borderColor: 'red',
          data: user2,
        }]
      };
  
      const config = {
        type: 'line',
        data: data,
        options: {}
      };
  
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
  
</script>
</html>