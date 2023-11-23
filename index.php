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
    
<!--

Tooplate 2115 Marvel

https://www.tooplate.com/view/2115-marvel

-->
  </head>
  <body>
  <?php
  $archivo = "contador/inicio.php";
        $contador = intval(trim(file_get_contents($archivo)));
 
        $file = fopen($archivo, "w");
        fwrite($file, $contador+1 . PHP_EOL);
 
        $file = fopen($archivo, "r");
      echo '<div style="position:fixed;bottom:20px;z-index:9;right:20px;background: #ff5a19;padding: 2px 10px;color: #fff;font-size: 30px;border-radius: 20px;">'. fgets($file). '</div>' ;
        fclose($file);
      ?>
<?php
include "include.php"
?>

    <!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <span class="escritura">¡Bienvenido aprendriz a este nuevo sitio web!</span>
                        <h1 class="animated animated-text">
                            <span class="mr-2">¿Deseas certificarte? ¿Sabes que documentos entregar?</span>
                                <div class="animated-info">
                                    <span class="animated-item">Aprende</span>
                                    <span class="animated-item">Consulta</span>
                                    <span class="animated-item">Certificate</span>
                                </div>
                        </h1>

                        <p>El deber ser del aprendíz en su ETAPA PRODUCTIVA es entregar los informes F023|F147 y requisitos de certificación para lograr recibir satisfactoriamente su certificado</p>
                        
                        <div class="custom-btn-group mt-4" >
                          <a href="form-seguimiento.php" class="btn mr-lg-2 custom-btn" ><i class='uil uil-file-alt'></i> Como diligenciar 023|147</a>
                          <a href="req-certificacion.php" class="btn custom-btn custom-btn-bg custom-btn-link">Requisitos de certificación</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="imagenes/undraw/home.svg" class="img-fluid" alt="svg image">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="project py-5" id="project">
        <div class="container">
                
                <div class="row">
                  <div class="col-lg-11 text-center mx-auto col-12">

                      <div class="col-lg-8 mx-auto">
                        <h2>Genera períodos, Aprende a Diligenciar formatos de seguimiento y Conoce Requisitos de certificación</h2>
                      </div>

                      <div class="owl-carousel owl-theme">
                        <div class="item">
                          <div class="project-info">
                            <a href="generador.php"><img href="generador.php" src="imagenes/project/project-image01.png" class="img-fluid" alt="project image"></a>
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <a href="form-seguimiento.php"><img src="imagenes/project/project-image02.png" class="img-fluid" alt="project image"></a>
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <a href="generador.php"><img src="imagenes/project/project-image03.png" class="img-fluid" alt="project image"></a>
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <a href="periodos.php"><img src="imagenes/project/project-image04.png" class="img-fluid" alt="project image"></a>
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <a href="req-certificacion.php"><img src="imagenes/project/project-image05.png" class="img-fluid" alt="project image"></a>
                          </div>
                        </div>
                        <div class="item">
                          <div class="project-info">
                            <a href="descargas.php"><img src="imagenes/project/project-image06.png" class="img-fluid" alt="project image"></a>
                          </div>
                        </div>

                      </div>
                      <a href="admin.php"><p class="mt-5 mb-3 text-center">Estadísticas</p></a>

                  </div>
                </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
        <div class="container">
            <div class="row">

            <div class="col-lg-6 col-12">
                  <h2 class="mb-4">¿Sabes la ruta que debes hacer en tu <span class="text-success">Etapa Productiva</span>?</h2>
    
                    <div class="timeline ">
                        <div class="timeline-wrapper">
                             <div class="timeline-yr">
                                  <span>1</span>
                             </div>
                             <div class="timeline-info ">
                                  <h3><span>Inicio de Etapa Productiva</span><a  href="inicio-ep.php"><small></small></a></h3>
                                  <p>Al iniciar tu etapa productiva debes cumplir con algunos documentos esenciales para las afiliaciones y seguros, EPS, ARL, camara de comercio, etc.<a rel="nofollow" href="inicio-ep.php">click para saber cuales son</a> </p>
                             </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Seguimiento</span><small></small></h3>
                                <p>El seguimiento de Etapa Productiva, consta de un instructor de seguimiento e informes que evidencian tu Etapa Práctica <a rel="nofollow" href="form-seguimiento.php">click para saber cuales son</a></p>
                            </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>3</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Certificación</h3>
                                <p>Para certificarte debes cumplir con requisitos fundamentales para tu certificación tanto como pruebas icfes, TYT, Cedúla, APE, etc.<a rel="nofollow" href="req-certificacion.php">click para saber cuales son</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12 img-pos">
                  <img src="imagenes/undraw/ask.svg" style="width: 550px;"alt="">
                </div>
                
            </div>
        </div>
    </section>

    

    <!-- CONTACT -->
    <section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">
            
          <div class="col-lg-5 mr-lg-5 col-12">
            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=793&amp;height=296&amp;hl=en&amp;q=centro biotecnologico del caribe&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://mcpedls.com/">Minecraft Download</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:296px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:296px;}.gmap_iframe {height:296px!important;}</style></div>          

            <div class="google-map w-100">

            </div>

            <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                <div class="contact-info-item">
                  <h3 class="mb-3 text-white">Centro biotecnologico del Caribe</h3>
                  <p class="footer-text mb-0">+57 1 3430111</p>
                  <p><a href="mailto:servicioalciudadano@sena.edu.co">servicioalciudadano@sena.edu.co</a></p>
                  <p>Kilometro 7 via la paz</p>                
                </div>

                <ul class="social-links">
                     <li><a href="https://www.facebook.com/SENA" class="uil uil-facebook" data-toggle="tooltip" data-placement="left" title="Facebook" target="_blank"></a></li>
                     <li><a href="https://www.instagram.com/senacesar_/" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram" target="_blank"></a></li>
                     <li><a href="https://www.youtube.com/@bienestaralaprendizsenacbc6155" class="uil uil-youtube" data-toggle="tooltip" data-placement="left" title="Youtube" target="_blank"></a></li>
                </ul>
            </div>
          </div>

          <div class="col-lg-6 col-12">
            <div class="contact-form">
              <h2 class="mb-4">¿Tienes dudas?</h2>
              <p>Este espacio fue diseñado solo para solicitar apoyo relacionado con el tema de informes, asegurese de haber explorado previamente el sitio web, o recurre a la oficina de coordinación académica de tu centro. </p>

              <form action="correo.php" method="post">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="nombre" placeholder="nombre" id="nombre" required>
                  </div>
                  <div class="col-lg-6 col-12">
                    <input type="email" class="form-control" name="correo" placeholder="correo" id="correo" required>
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="asunto" placeholder="asunto" id="asunto" required>
                  </div>
                  
                  <div class="col-12">
                    <textarea name="mensaje" rows="6" class="form-control" id="mensaje" placeholder="mensaje" required></textarea>
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <button type="submit" class="form-control submit-btn"  id="success">Enviar email</button>
                  </div>
                </div>
                
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>
    
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