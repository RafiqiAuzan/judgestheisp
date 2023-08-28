google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);
      
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Providers', 'Accuracy', 'Precision', 'Recall', 'F1-Score'],
                ['Biznet', 84, 85, 84, 84],
                ['First Media', 83, 85, 83, 83],
                ['Iconnect', 89, 91, 89, 89],
                ['Indihome', 85, 85, 85, 85],
                ['MNC Play', 85, 87, 85, 81],
                ['Myrepublic', 89, 89, 89, 88]
              ]);
      
              var options = {
                chart: {
                },
                bars: 'vertikal' // Required for Material Bar Charts.
              };
      
              var chart = new google.charts.Bar(document.getElementById('metrikchart'));
      
              chart.draw(data, google.charts.Bar.convertOptions(options));
            }