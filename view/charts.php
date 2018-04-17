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
           labels: ["Slack", "IBM Lotus Notes", "Tableau", "Azure", "Box - Cloud Storage", "Office 365", "Hootsuite", "WordPress", "Salesforce"],
           datasets: [{
             label: 'Legend',
              data: data,
              pointBackgroundColor: ["rgba(63,191,63,1)", "rgba(191,63,63,1)", "rgba(191,127,63,1)", "rgba(191,127,63,1)", "rgba(63,191,63,1)", "rgba(191,127,63,1)", "rgba(191,191,63,1)", "rgba(63,191,63,1)", "rgba(191,191,63,1)"],
              radius: 6,
              borderWidth: 3
           }]
         },
         options: {
           tooltips: {
         callbacks: {
            label: function(tooltipItem, data) {
               var label = data.labels[tooltipItem.index];
               return label + ': (' + tooltipItem.xLabel + ', ' + tooltipItem.yLabel + ')';
            }
         }
      },
           legend: {
             display: false
           },
           scales: {
             yAxes: [
               {
                 scaleLabel: {
                   display: true,
                   labelString: 'Usage',
                   fontSize: 14
                 }
               }
             ],
             xAxes: [
               {
                 scaleLabel: {
                   display: true,
                   labelString: 'License Total Cost',
                   fontSize: 14
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

<script type="text/javascript">
var donut = document.getElementById("donutOne");
var myDoughnutChart = new Chart(donut, {
   type: 'doughnut',
   data: {
     datasets: [{
         data: [10, 20, 25, 30, 50, 70]
     }],

     // These labels appear in the legend and in the tooltips when hovering different arcs
     labels: [
          'Lotus Notes',
         'iMessage',
         'Slack',
         'Atom',
         'Salesforce',
         'Chrome'
     ]
 }
});
</script>

<script type="text/javascript">
var donutTwo = document.getElementById("donutTwo");
var myDoughnutChart = new Chart(donutTwo, {
   type: 'doughnut',
   data: {
     datasets: [{
         data: [10, 20, 25, 30, 50, 70]
     }],

     // These labels appear in the legend and in the tooltips when hovering different arcs
     labels: [
          'Lotus Notes',
         'iMessage',
         'Slack',
         'Atom',
         'Salesforce',
         'Chrome'
     ]
 }
});
</script>

<script>
var ctx1 = document.getElementById("myChart1");
var stackedBar1 = new Chart(ctx1, {
  type: 'bar',
  data: {
        labels: ['03-01', '03-02', '03-03', '03-04', '03-05', '03-06', '03-07'],
        datasets: [{
          // unutilizaed time loop
        label: 'unutilizaed',
        data: [3, 3, 3, 3, 5, 6, 8],
      backgroundColor: [
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',

        ],
      borderWidth: 1,
    borderColor: 'rgb(79, 89, 107)'}, {
          // utilizaed time loop
        label: 'utilized',
        data: [3, 3, 2, 3, 6, 8, 11, 12],
        backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 99, 132, 0.2)',
        ],

        borderWidth: 1,
        borderColor: 'rgb(79, 89, 107)'
        }],
      },
  options: {
      scales: {
          xAxes: [{
              stacked: true
          }],
          yAxes: [{
              stacked: true
          }]
      }
  }
})
var ctx2 = document.getElementById("myChart2");
var stackedBar2 = new Chart(ctx2, {
  type: 'line',
  data: {
        labels: ['03-01', '03-02', '03-03', '03-04', '03-05', '03-06', '03-07'],
        datasets: [{
          // sales loop
        label: 'Sales',
        data: [131, 231,167,98, 368,157,198],
        borderColor:  'rgb(237, 113, 191)',
        pointBackgroundColor  :'rgb(237, 113, 191)',
        pointRadius: 4,
        pointHoverRadius: 10,
        fill:false,
        borderWidth : 3,
      },
     {
          // average sales loop
        label: 'Average Sales',
        data: [77, 98, 57, 37, 87, 68, 77, 58],
        borderColor:  'rgb(140, 247, 174)',
        pointBackgroundColor  :'rgb(140, 247, 174)',
        pointRadius: 4,
        pointHoverRadius: 10,
       fill:false,
       borderWidth  : 3,
        },
        {
          // Number of order loop
        label: 'Orders',
        data: [5, 8, 6, 4, 13, 7, 6, 6],
        borderColor:  'rgb(40, 47, 74)',
        pointBackgroundColor  :'rgb(40, 47, 74)',
        pointRadius: 4,
        pointHoverRadius: 10,
       fill:false,
       borderWidth  : 3,
        }],
  options: {
      scales: {
          yAxes: [{
              ticks: {
                  beginAtZero:true
              }
          }]
      }
  }
      },
  })
var ctx3 = document.getElementById("myChart3");
var stackedBar3 = new Chart(ctx3, {
  type: 'bar',
  data: {
  //date loop
        labels: ['03-01', '03-02', '03-03', '03-04', '03-05', '03-06', '03-07'],
        datasets: [{
          // # of new customer loop
        label: 'New Customer',
        data: [1, 2, 3, 3, 2, 4, 5],
      backgroundColor: [
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',

        ],
      borderWidth: 1,
    borderColor: 'rgb(79, 89, 107)'
  }, {
          // # of return customer loop
        label: 'Return Customer',
        data: [3, 4, 5, 5, 3, 5, 5, 6],
        backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 99, 132, 0.2)',
        ],

        borderWidth: 1,
        borderColor: 'rgb(79, 89, 107)'
        }],
      },
  options: {
      scales: {
          xAxes: [{
              stacked: true
          }],
          yAxes: [{
              stacked: true
          }]
      }
  }
})
var ctx4 = document.getElementById("myChart4");
var myChart = new Chart(ctx4, {
  type: 'bar',
  data: {
    // product loop
      labels: ["screen", "earphone", "case", "charge", "cable", "accessories"],
      datasets: [{
          label: 'Cost',
          // purchased price Loop
          data: [35, 33, 21, 18, 15, 10],
          backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 99, 132, 0.2)'
          ],
          borderColor: [
              'rgba(255,99,132,1)',
              'rgba(255,99,132,1)',
              'rgba(255,99,132,1)',
              'rgba(255,99,132,1)',
              'rgba(255,99,132,1)',
              'rgba(255,99,132,1)'
          ],
          borderWidth: 2,},
      { label:'Price',
      data: [54, 53 ,34, 37, 33, 24],
          backgroundColor: [
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)'
          ],
          borderColor: [
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(54, 162, 235, 1)'
          ],
           borderWidth:2,},
          {label: 'Profit',
          // # of order Loop
          data: [83, 78, 67, 98, 144, 68],
           borderColor:  'rgb(105,105,105)',
        type: 'line',
        pointRadius: 3,
        fill: false,
        pointBackgroundColor  :'rgb(0,0,0)'



      },
  ],
  options: {
      scales:{
          xAxes: [{
              stacked: true
          }],
          yAxes: [{
              stacked: true
              }],
              ticks: {
                  beginAtZero:true
              }
          }
        }}}
            )
var ctx5 = document.getElementById("myChart5");
var myChart5 = new Chart(ctx5, {
  type: 'doughnut',
  data: {
    // name of service Loop
      labels: ["repair", "fix", "repairme", "fixme","hello","hi","nihao"],
      datasets: [{
          label: '# of Votes',
          // sales of service Loop
          data: [3, 3, 2, 3, 5, 6, 8],
          backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)',
              'rgba(234, 12, 87, 0.6)'
          ],
          borderColor: [
              'rgba(255,99,132,1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)',
              'rgba(234, 12, 87, 0.6)'
          ],
          hoverBackgroundColor: [
               'rgb(244, 66, 212)',
                'rgb(244, 66, 212)',
                'rgb(244, 66, 212)',
                'rgb(244, 66, 212)',
                'rgb(244, 66, 212)',
                'rgb(244, 66, 212)',
                'rgb(244, 66, 212)',
          ],

          hoverBorderColor:[
           'rgb(73, 30, 66)',
           'rgb(73, 30, 66)',
           'rgb(73, 30, 66)',
           'rgb(73, 30, 66)',
           'rgb(73, 30, 66)',
           'rgb(73, 30, 66)',
           'rgb(73, 30, 66)',
           ],
           hoverBorderWidth: 3,
          borderWidth: 2
      }]
  },
  }
  )


var ctx7 = document.getElementById("myChart7");
var stackedBar7 = new Chart(ctx7, {
  type: 'bar',
  data: {
    // hour loop
        labels: ['12am', '3', '6', '9', '12pm', '3', '6','9'],
        datasets: [{
          // unutilizaed time loop
        label: 'AVG Sales',
        data: [0, 0, 0, 0, 5, 8, 6,0],
      backgroundColor: [
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(54, 162, 235, 0.2)',

        ],
      borderWidth: 1,
    borderColor: 'rgb(79, 89, 107)'},
    ],
      },
  options: {
      scales: {
          }
      }
  }
)
var ctx8 = document.getElementById("myChart8");
var myChart8 = new Chart(ctx8, {
  type: 'bar',
  data: {
    // Day of week Loop
      labels: ["Mon", "Tues", "Wed", "Thur", "Fri", "Sat", "Sun"],
      datasets: [{
          label: '# of Votes',
          // Number of Order Loop
          data: [3, 3, 2, 3, 5, 6, 8],
        borderColor:  'rgb(237, 113, 191)',
        pointBackgroundColor  :'rgb(237, 113, 191)',
        pointRadius: 5,
        pointHoverRadius: 10,
        fill:false,
        borderWidth : 3,
      }]
  },
  options: {
      scales: {
          yAxes: [{
              ticks: {
                  beginAtZero:true
              }
          }]
      }
  }
})
</script>
