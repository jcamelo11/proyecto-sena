<?php 

error_reporting(0);

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto']; 
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];


//echo $correo . " " . $nombre . " " . $mensaje;


$destinatario = "paredesjcamelo@gmail.com";
$cuerpo = '
    <html> 
        <head> 
            <title>Prueba de envio de correo</title> 
        </head>
        <body> 
            <h1>Solicitud de duda enviada desde sitio web</h1>
            <style> background: rgb(201, 31, 31);</style>

            <p> 
                Asunto:  '. $asunto . '<br>
                contacto: '. $nombre .' - ' . $correo .'<br>
                Mensaje: '. $mensaje .' 
                
            </p> 
        </body>
    </html>
';
//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=UTF8\r\n"; 

//dirección del remitente

$headers .= "FROM: $asunto <$correo>\r\n";
mail($destinatario,$asunto,$cuerpo,$headers);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Correo enviado exitosamente</title>
    <link rel="shortcut icon" href="imagenes/logo/logosena.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/unicons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/logo.css">
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body>
    <!-- MENU -->
   <?php
    include "include.php"
    ?>
    <!-- MENU /-->
    <!-- about -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <h1 class="animated animated-text">
                            <span class="mr-2">¡Correo enviado exitosamente!</span>
                                <div class="animated-info">
                                    <span class="animated-item">Aprende</span>
                                    <span class="animated-item">Consulta</span>
                                    <span class="animated-item">Certificate</span>
                                </div>
                                <p>Tu correo será tratado por un especialista en el tema.
                                </p>
                                
                        </h1>                        
                        <div class="custom-btn-group mt-4" >
                          <a href="index.php" class="btn mr-lg-2 custom-btn" ><i class='uil uil-file-alt'></i> Volver al inicio</a>
                          <a href="req-certificacion.php" class="btn custom-btn custom-btn-bg custom-btn-link">Requisitos de certificación</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="imagenes/undraw/correo.svg" class="img-fluid" alt="svg image">
                    </div>
                </div>
            </div>
        </div>
    </section>


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