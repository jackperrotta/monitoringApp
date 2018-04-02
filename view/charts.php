<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>

<!-- Graphs -->
<script src="<?php echo $base_path;?>/styles/charts/charts.min.js"></script>

<script>
  var ctx = document.getElementById("myChart");
  var myChart = new Chart(ctx, {
    type: 'scatter',
       data: {
           datasets: [{
               label: 'Scatter Dataset',
               data: [{
                   x: 8,
                   y: 7
               }, {
                   x: 4,
                   y: 10
               }, {
                   x: 13,
                   y: 5
               }]
           }]
       },
       options: {
           scales: {
               xAxes: [{
                   type: 'linear',
                   position: 'bottom'
               }]
           }
       }
   });
</script>
