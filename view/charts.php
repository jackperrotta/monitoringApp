<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>

<!-- Graphs -->
<script src="<?php echo $base_path;?>/styles/charts/charts.min.js"></script>

<script>
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState === 4 && xmlhttp.status === 200){
      var data = JSON.parse(this.responseText);
      console.log(data);
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'scatter',
           data: {
               datasets: [{
                   label: 'Scatter Dataset',
                   data: data
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
    }
  }
  xmlhttp.open("GET", "../services/getData.php", true);
  xmlhttp.send();
</script>
