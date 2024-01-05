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
    <link rel="stylesheet" href="css/intro.css">
       <!-- Favicon -->
   <link href= "../assets/img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> 

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
<!--

Tooplate 2115 Marvel

https://www.tooplate.com/view/2115-marvel

-->
  </head>
<body>

    <!-- MENU -->
   <?php
   include "include.php"
   ?>
   <!-- MENU /-->

   <style>

      .base{
        z-index: 3; 
        position: relative; 
        width: 900px;
        margin: auto;
      }

      .pasos{
        position: absolute; 
        z-index: 9;
        border: 2px solid red;
      }

      .brd-bt-1{
        border:1px solid gray ;
        border-bottom: 0;
        z-index: 2;
      }

      .brd-bt-2{
        border:1px solid gray ;
        border-top: 0;
        z-index: 1;
      }

      .paso1{top: 143px; left: 42px; width: 811px; height: 104px;}

      .paso2{top: 262px; left: 42px; width: 811px; height: 86px;}

      .paso3{top: 359px; left: 42px; width: 811px; height: 97px;}

      .paso4{top: 464px; left: 42px; width: 811px; height: 87px;}

      .paso5{top: 558px; left: 42px; width: 811px; height: 342px;}
      .paso6{top: 558px; left: 42px; width: 338px; height: 342px;}
      .paso7{top: 558px; left: 378px; width: 127px; height: 342px;}
      .paso8{top: 558px; left: 503px; width: 197px; height: 342px;}
      .paso9{top: 558px; left: 698px; width: 155px; height: 342px;}

      .paso10{top: 920px; left: 42px; width: 811px; height: 137px;}
      .paso11{top: 923px; left: 662px; width: 165px; height: 68px;}

      .paso12{top: 1120px; left: 42px; width: 811px; height: 127px;}

      .paso13{top: 262px; left: 533px; width: 321px; height: 38px;}





      /* hoja2 */


      /* hoja 3 */


      

      /* paso13{ finalización } */


    </style>
    
    <!-- CARD -->
    <section  class="mb-4 bg-gray-200" >

    <a href="menu-formatos.php">
        <div type="button" class="btn btn-success btn-sm pt-2" style="position: fixed; top: 150px; left: 20px; z-index: 9999;">
          <span class="material-symbols-outlined text-white">undo </span><h4 class="float-right mt-1" style="font-size: 13px;">Volver</h4></div>
      </a>

      <!-- ⭐⭐ - sug_click - ⭐⭐  -->
      <div id="mensaje_click" style="bottom: -64px; left: 120px;position: fixed;transform: translate(-50%, -50%);z-index: 9999;" >
        <img src="imagenes/undraw/click-mouse.gif" alt="Imagen" width="80px" style="rotate: -55deg;">
        
        </div>
      <!-- ⭐⭐ - / sug_click - ⭐⭐  -->

      
      <div id="popup" class="" style="position: fixed; bottom: 70px; left: 40px; z-index: 9999;"><img src="imagenes/undraw/letrero.png" width="80px" alt=""></div> 

      <button class="btn bg-success pt-0 btn-xxl" data-bs-toggle="tooltip" data-bs-placement="left"  aria-label="Instrucciones de uso" data-bs-original-title="Iniciar recorrido" style="position: fixed; width: 60px; height: 60px; bottom: 10px; left: 10px; border: 2px solid white; border-radius: 50%; z-index: 9999;" onclick="intro_calcular()" ><i class="fas fa-play mt-2 pt-1 text-white mx-auto" aria-hidden="true"></i></button>

      <div class="mt-5">

        <!-- hoja 1 -->
        <div class="card brd-bt-1 base">
          <img src="imagenes/informes/bitacora-1.png" alt="">

          <div id="intro1" class="pasos paso1" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro2" class="pasos paso2" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro3" class="pasos paso3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="información..."></div>
          <div id="intro4" class="pasos paso4" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="información..."></div>
          <div id="intro5" class="pasos paso5" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro6" class="pasos paso6" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro7" class="pasos paso7" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro8" class="pasos paso8" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro9" class="pasos paso9" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro10" class="pasos paso10" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro11" class="pasos paso11" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro12" class="pasos paso12" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro13" class="pasos paso13" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
        </div>

        <!-- hoja 2 -->
        <div class="card brd-bt-2 base mt-n1">
          <img src="imagenes/informes/bitacora-3.png" alt="">
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
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.2.2/intro.min.js"></script> -->
    <script  src="js/intro-bitacora.js"></script>
    <script src="js/introweb.js"></script>
    <script  src="js/config.js"></script>
    <script>
      function mostrarImagen() {
        document.getElementById('mensaje_click').style.display = 'block';
      }

      function ocultarImagen() {
        document.getElementById('mensaje_click').style.display = 'none';
      }

      // Mostrar imagen al cargar la página
     
        mostrarImagen();
      
    </script>
    
</body>
</html>