google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);
      
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Providers', 'Positif', 'Negatif', 'Netral'],
                ['Biznet', 16.2, 34.9, 48.9],
                ['First Media', 7.7, 32.2, 60.1],
                ['Indihome', 20, 31.5, 48.5],
                ['Myrepublic', 14.3, 23.9, 61.8],
                ['Xlhome', 23.2, 43.6, 33.3]
              ]);
      
              var options = {
                chart: {
                },
                bars: 'vertikal' // Required for Material Bar Charts.
              };
      
              var chart = new google.charts.Bar(document.getElementById('sentimenchart'));
      
              chart.draw(data, google.charts.Bar.convertOptions(options));
            }