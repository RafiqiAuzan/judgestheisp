google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);
      
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Providers', 'Accuracy', 'Precision', 'Recall', 'F1-Score'],
                ['Biznet', 83, 84, 83, 83],
                ['First Media', 80, 82, 80, 80],
                ['Indihome', 83, 83, 83, 83],
                ['Myrepublic', 83, 84, 83, 83],
                ['Xlhome', 68, 73, 68, 67]
              ]);
      
              var options = {
                chart: {
                },
                bars: 'vertikal' // Required for Material Bar Charts.
              };
      
              var chart = new google.charts.Bar(document.getElementById('metrikchart'));
      
              chart.draw(data, google.charts.Bar.convertOptions(options));
            }