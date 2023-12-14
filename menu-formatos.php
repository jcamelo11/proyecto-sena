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
    <link rel="stylesheet" href="css/style-periodos.css">
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/tooplate-style.css">
    <link rel="stylesheet" href="css/escritura.css">
    
  </head>
  <body>
<!-- 
  <?php
    // $archivo_contador = 'contador/contador.txt';

    // Intenta leer el archivo
    // if (file_exists($archivo_contador)) {
        // $contador = (int)file_get_contents($archivo_contador);
    
        // Manejo de errores al leer el archivo
        // if ($contador === false) {
        //     die('Error al leer el archivo de contador.');
        // }
    
    //     $contador++;
    // } else {
    //     $contador = 1;
    // }
    
    // Intenta escribir en el archivo
    // if (file_put_contents($archivo_contador, $contador) === false) {
    //     die('Error al escribir en el archivo de contador.');
    // }
    
    // echo '<div style="position:fixed;bottom:20px;z-index:9;right:20px;background: #28a745;padding: 2px 10px;color: #fff;font-size: 20px;border-radius: 80px;">' . $contador . '</div>';    
    // ?> -->

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
    <h2 class="text-center mt-4 text-">Elige el formato que quieres <span class="text-success">diligenciar</span></h2>
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
                      <button type="button" class="btn btn-success btn-sm mb-0">Ver tutorial</button>
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
                      <button type="button" class="btn btn-success btn-sm mb-0">Ver tutorial</button>
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
                        Aprende a diligenciar el formatos F147
                    </p>
                    <a href="bitacora.php">
                      <button type="button" class="btn btn-success btn-sm mb-0">Ver tutorial</button>
                    </a>
                </div>
            </div>
        </div>
      </div>
  </div>
  <section class="resume mt-2 py-5 d-lg-flex justify-content-center align-items-center" id="resume">
        <div class="container">
            <div class="row">

            <style>
              .timeline-sebas {
                position: relative;
                padding: 22px 0;
              }
              .timeline-sebas:last-child:before {
                height: 0;
              }
              .timeline-sebas:before {
                content: "";
                background: #28a745;
                width: 3px;
                height: 100%;
                position: absolute;
                left: 38px;
              }
            </style>

            <div class="col-lg-6 col-12">
                  <h2 class="mb-4">¿Cómo deben de llamarse mis <span class="text-success">Informes</span>?</h2>
    
                    <div class="timeline ">
                        <div class="timeline-sebas">
                             <div class="timeline-yr bg-success">
                                  <span>1</span>
                             </div>
                             <div class="timeline-info ">
                                 
                                  <p>Los informes de seguimiento solo se los deben entregar o enviar a su instructor de seguimiento </p>
                             </div>
                        </div>

                        <div class="timeline-sebas ">
                            <div class="timeline-yr bg-success">
                                <span>2</span>
                            </div>
                            <div class="timeline-info">
                                <h5><span>No. De informes de Seguimiento:</span><small></small></h5>
                                <p>Para los aprendices que iniciaron Etapa Productiva en el año 2022, recuerden que los informes de seguimiento son 15 (3 formatos 023 y 12 Bitácoras en el formato 147). </p>
                                <p>Para los aprendices que iniciaron y terminaron Etapa Productiva en el año 2021, recuerden que los informes de seguimiento son 12 (3 formatos 023 y 09 Bitácoras en el formato 147) </p>
                            </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr bg-success">
                                <span>3</span>
                            </div>
                            <div class="timeline-info">
                               
                                <p>La nomenclatura que deben llevar los informes (pedro pérez = primer nombre y primer apellido del aprendiz) y miguel calderón = primer nombre y primer apellido del instructor de seguimiento que se le asignó a cada aprendiz</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 mx-auto my-auto col-12">
                    <div class="about-image  svg">
                        <img src="imagenes/project/nomenclatura.png" class="img-fluid" alt="svg image">
                    </div>
                </div>

            </div>
            <div class="container">
                <h2 class="text-center mt-4 text-">Elige el formato que quieres <span class="text-success">diligenciar</span></h2>
                <p class="col-md-9 mx-auto">Si ya entregaste todos los formatos de seguimiento de etapa productiva a tu instructor de seguimiento y están bien diligenciados, es hora de conocer los requisitos que debes entregar para poder certificarte.</p>
                <div class="row mt-3 ">
                   <a class="mx-auto" href="req-certificacion.php" Target="_blank"> <img src="imagenes/project/requisitos.png" class="sombra mt-4" alt="Editado por heyder canchila" style="width: 675px;" ></a>
                </div>
            </div>
        </div>
    </section>
    
    <p class="mt-5 mb-3 text-center text-muted">&copy; Versión 2.0</p> 
    
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