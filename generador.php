<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title> Generador de períodos de informes</title>
    <link rel="shortcut icon" href="imagenes/logo/logosena.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/unicons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/logo.css">
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/tooplate-style.css">

    
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
  <?php
  $archivo = "contador/generador.php";
        $contador = intval(trim(file_get_contents($archivo)));
 
        $file = fopen($archivo, "w");
        fwrite($file, $contador+1 . PHP_EOL);
 
        $file = fopen($archivo, "r");
      echo '<div style="position:fixed;bottom:20px;z-index:9;right:20px;background: #28a745;padding: 2px 10px;color: #fff;font-size: 20px;border-radius: 80px;">'. fgets($file). '</div>' ;
        fclose($file);
      ?>

   <!-- MENU -->
   <?php
    include "include.php"
    ?>
    <!-- MENU /-->
  <br><br><br>


  <div class="container">
  <br> <br> <br>
    <div class="row mx-auto">
    <div class="col-lg-5 mx-auto my-auto">
          <div class="about-image">
              <img src="imagenes/undraw/periodo.svg" class="img-fluid" alt="svg image">
          </div>
      </div>
      <div class="col-lg-5 mx-auto my-auto">
        <form action="periodos.php" method="post">
          <h2 class="text-center mt-2">Generar períodos de <span class="text-success">Informes</span></h2>

            <span class="input-group-text" style="color: #fff;background-color: #34495e; ">Ingrese fecha Inicio de Etapa Productiva</span>
            <input type="date" id="inicio" name="inicio" class="form-control" required><br>

            <span class="input-group-text" style="color: #fff;background-color: #34495e;" >Ingrese fecha final de Etapa Productiva</span>
            <input type="date" id="final" name="final" class="form-control" required ><br>
      
            <input type="submit" class="btn btn-outline-success mb-4" value="Generar" >  
        </form>
      </div>

      
    </div>
  </div>

  <p class="mt-5 mb-3 text-muted">&copy; Versión 2.0</p> 
  
    <!-- form -->
    
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
    <script  src="js/alerts.js"></script>

  </body>
</html>
