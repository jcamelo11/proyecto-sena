<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Seguimiento de Etapa Productiva</title>
    <link rel="shortcut icon" href="imagenes/logo/logosena.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/unicons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/logo.css">
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/tooplate-style.css">
    <link rel="stylesheet" href="css/escritura.css">
    
  </head>
  <body>

  <?php
    $archivo = "contador/Formatos.php";
          $contador = intval(trim(file_get_contents($archivo)));
  
          $file = fopen($archivo, "w");
          fwrite($file, $contador+1 . PHP_EOL);
  
          $file = fopen($archivo, "r");
        echo '<div style="position:fixed;bottom:20px;z-index:9;right:20px;background: #28a745;padding: 2px 10px;color: #fff;font-size: 20px;border-radius: 80px;">'. fgets($file). '</div>' ;
          fclose($file);
  ?>

<?php
include "include.php"
?>

<br>
<style>
  .bg-full{
    height:60vh;
    background-image: url('imagenes/informes/EP-f023-01-1.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-position-y: 0%;
    margin-bottom:20px;
    cursor: pointer;
  }

  .bg-full:hover{
    border: 2px solid green;
    box-shadow: 5px 5px 0px 0px;
  }
</style>
  <div class="container">
    <h3 class="text-center mt-4 text-">Elige el formato que quieres <span class="text-success">diligenciar</span></h3>
      <div class="row mt-3">
        <div class="col-lg-3 mt-3 col-md-6">
            <div class="card mt-5 mt-md-0">
                <div class="card-header p-0  position-relative z-index-2">
                    <a class="d-block blur-shadow-image">
                        <img src="imagenes/project/concertacion.png" alt="img-blur-shadow"
                            class="img-fluid border-radius-lg" loading="lazy">
                    </a>
                    <div class="colored-shadow"
                        style="background-image: url(&quot;imagenes/project/concertacion.png&quot;);"></div>
                </div>
                <div class="card-body pt-3">
                    
                    <h5 class="text-success">Informe concertación</h5>
                    <p>
                        Aprende a diligenciar los formatos F023
                    </p>
                    <a href="f023-01.php">
                      <button type="button" class="btn btn-success btn-sm mb-0">Ver tutorial</button>
                    </a>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 mt-3 col-md-6">
            <div class="card mt-5 mt-md-0">
                <div class="card-header p-0  position-relative z-index-2">
                    <a class="d-block blur-shadow-image">
                        <img src="imagenes/project/parcial.png" alt="img-blur-shadow"
                            class="img-fluid border-radius-lg" loading="lazy">
                    </a>
                    <div class="colored-shadow"
                        style="background-image: url(&quot;imagenes/project/concertacion.png&quot;);"></div>
                </div>
                <div class="card-body pt-3">
                    
                    <h5 class="text-success">Informe parcial</h5>
                    <p>
                        Aprende a diligenciar los formatos F023
                    </p>
                    <a href="f023-02.php">
                      <button type="button" class="btn btn-success btn-sm mb-0">AVer tutorial</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mt-3 col-md-6">
            <div class="card mt-5 mt-md-0">
                <div class="card-header p-0  position-relative z-index-2">
                    <a class="d-block blur-shadow-image">
                        <img src="imagenes/project/final.png" alt="img-blur-shadow"
                            class="img-fluid border-radius-lg" loading="lazy">
                    </a>
                    <div class="colored-shadow"
                        style="background-image: url(&quot;imagenes/project/final.png&quot;);"></div>
                </div>
                <div class="card-body pt-3">
                    
                    <h5 class="text-success">Informe final</h5>
                    <p>
                        Aprende a diligenciar los formatos F023
                    </p>
                    <a href="f023-03.php">
                      <button type="button" class="btn btn-success btn-sm mb-0">Ver tutorialr</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mt-3 col-md-6">
            <div class="card mt-5 mt-md-0">
                <div class="card-header p-0  position-relative z-index-2">
                    <a class="d-block blur-shadow-image">
                        <img src="imagenes/project/bitacoras.png" alt="img-blur-shadow"
                            class="img-fluid border-radius-lg" loading="lazy">
                    </a>
                    <div class="colored-shadow"
                        style="background-image: url(&quot;imagenes/project/bitacoras.png&quot;);"></div>
                </div>
                <div class="card-body pt-3">
                    
                    <h5 class="text-success">Bitácoras</h5>
                    <p>
                        Aprende a diligenciar los formatos F023
                    </p>
                    <a href="bitacora.php">
                      <button type="button" class="btn btn-success btn-sm mb-0">Ver tutorial</button>
                    </a>
                </div>
            </div>
        </div>
      </div>
  </div>
    
    <!-- FOOTER -->
     <footer class="footer py-5">
          <div class="container">
               <div class="row">


                    
               </div>
          </div>
     </footer>

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