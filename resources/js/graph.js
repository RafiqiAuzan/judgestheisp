google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);
      
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Providers', 'Positif', 'Negatif', 'Netral'],
                ['Biznet', 16.5, 34.4, 49],
                ['First Media', 8, 33.8, 58.2],
                ['Iconnect', 23.1, 36.8, 40.1],
                ['Indihome', 20.6, 31.3, 48.1],
                ['MNC Play', 27, 45.9, 27.1],
                ['Myrepublic', 14.9, 22.9, 62.2]
              ]);
      
              var options = {
                chart: {
                },
                bars: 'vertikal' // Required for Material Bar Charts.
              };
      
              var chart = new google.charts.Bar(document.getElementById('sentimenchart'));
      
              chart.draw(data, google.charts.Bar.convertOptions(options));
            }