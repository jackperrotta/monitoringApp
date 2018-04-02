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
                 label: false,
                 data: data
             }]
         },
         options: {
           legend: {
             display: false
           },
           scales: {
             yAxes: [
               {
                 scaleLabel: {
                   display: true,
                   labelString: 'Usage'
                 }
               }
             ],
             xAxes: [
               {
                 scaleLabel: {
                   display: true,
                   labelString: 'License Total Cost'
                 },
                 ticks: {
                    callback: function(value, index, values) {
                        return '$' + value;
                    }
                }
               }
             ]
           }
         }
       });
    }
  }
  xmlhttp.open("GET", "../services/getData.php", true);
  xmlhttp.send();
</script>
