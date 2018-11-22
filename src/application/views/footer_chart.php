

<script>
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Year', 'Sales', 'Expenses'],
    ['2004',  660, 400],
    ['2005',  1170,      460],
    ['2006',  Math.random()*1000,       1120],
    ['2007',  1030,      540]
  ]);

  var options = {
    title: 'Company Performance',
    curveType: 'function',
    legend: { position: 'bottom' },
    vAxis: {
      viewWindowMode:'explicit',
      viewWindow: {
        max:1200,
        min:0
      }
    }

  };

  var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

  chart.draw(data, options);
}

$(document).ready(function() {


    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);


});

</script>
