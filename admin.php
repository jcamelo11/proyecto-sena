<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="imagenes/logo/logosena.png">
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/tooplate-style.css">
    <link rel="stylesheet" href="css/style-periodos.css">
    <link rel="stylesheet" href="css/logo.css">
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
          ['inicio', <?php include "contador/inicio.php"?>],
          ['caprendizaje', <?php include "contador/caprendizaje.php"?>],
          ['inicio de EP', <?php include "contador/inicioep.php"?>],
          ['generador',  <?php include "contador/generador.php"?>],
          ['Formatos de seguimiento',  <?php include "contador/formatos.php"?>],
          ['Requisitos de certificacion',  <?php include "contador/requisitos.php"?>]
          
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



    <div class="container" >
        <div class="row " >
            <div class="col" >
                <table class="rwd-table">
                    <thead>
                        <tr> 
                            <th class="text-center">Inicio</th> 
                            <td class="text-center"><?php include "contador/inicio.php"?></td>
                        </tr>
                        <tr>
                          <th class="text-center">Caprendizaje</th>
                          <td class="text-center"><?php include "contador/caprendizaje.php"?></td> 
                        </tr>
                        <tr>
                          <th class="text-center">Inicial de EP</th>
                          <td class="text-center"><?php include "contador/inicioep.php"?></td>
                        </tr>
                        <tr>
                          <th class="text-center">Generador</th>
                          <td class="text-center"><?php include "contador/generador.php"?></td> 
                        </tr>
                        <tr>
                          <th class="text-center">Formatos de seguimiento</th>
                          <td class="text-center"> <?php include "contador/formatos.php"?></td>
                        </tr>
                        <tr>
                          <th class="text-center">Requisitos de certificacion</th>
                          <td class="text-center"><?php include "contador/requisitos.php"?></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </body>
</html>
