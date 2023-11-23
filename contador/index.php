<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['inicio', <?php include "inicio.php"?>],
          ['caprendizaje', <?php include "caprendizaje.php"?>],
          ['inicio de EP', <?php include "inicioep.php"?>],
          ['generador',  <?php include "generador.php"?>],
          ['Formatos de seguimiento',  <?php include "formatos.php"?>],
          ['Requisitos de certificacion',  <?php include "requisitos.php"?>]
          
        ]);

        var options = {
          title: 'Vistas ',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>


