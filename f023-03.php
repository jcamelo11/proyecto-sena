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
    
  </head>
<body >

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

      .paso1{top: 232px; left: 89px; width: 725px; height: 60px;}

      .paso2{top: 307px; left: 89px; width: 725px; height: 119px;}
      .paso3{top: 307px; left: 268px; width: 546px; height: 119px;}
      .paso4{top: 374px; left: 268px; width: 546px; height: 52px;}

      .paso5{top: 424px; left: 89px; width: 725px; height: 181px;}

      .paso6{top: 643px; left: 89px; width: 725px; height: 403px;}
      .paso7{top: 700px; left: 89px; width: 339px; height: 346px;}
      .paso8{top: 700px; left: 426px; width: 211px; height: 346px;}
      .paso9{top: 733px; left: 635px; width: 86px; height: 313px;}
      .paso10{top: 733px; left: 719px; width: 95px; height: 313px;}

      /* hoja2 */
      .paso11{top: 456px; left: 87px; width: 728px; height: 89px;}
      .paso12{top: 543px; left: 87px; width: 728px; height: 498px;}
      .paso13{top: 610px; left: 87px; width: 310px; height: 54px;}
      .paso14{top: 610px; left: 395px; width: 420px; height: 45px;}

      
      .paso15{top: 655px; left: 87px; width: 728px; height: 384px;}
      
      .paso17{top: 686px; left: 525px; width:290px; height: 352px;}

      


      /* hoja 3 */
      .paso18{top: 445px; left: 87px; width:724px; height: 143px;}
      .paso19{top: 750px; left: 87px; width: 726px; height: 111px;}

      .paso23{top: 635px; left: 87px; width: 726px; height: 58px;}

      .paso20{top: 859px; left: 88px; width: 371px; height: 26px;}

      .paso21{top: 130px; left:180px; width: 565px; height: 868px;}

      /* hoja 4*/
      .paso22{top: 130px; left:155px; width: 625px; height: 800px;}    

    </style>

    
    <!-- CARD -->
    <section  class="mb-4 bg-gray-200">

      <a href="menu-formatos.php">
        <div type="button" class="btn btn-success btn-sm pt-2" style="position: fixed; top: 150px; left: 20px; z-index: 9999;">
          <span class="material-symbols-outlined text-white">undo </span><h4 class="float-right mt-1" style="font-size: 13px;">Volver</h4></div>
      </a>

      <!-- ⭐⭐ - sug_click - ⭐⭐  -->
      <!-- <div id="mensaje_click" style="bottom: -64px; left: 120px;position: fixed;transform: translate(-50%, -50%);z-index: 9999;" >
        <img src="imagenes/undraw/click-mouse.gif" alt="Imagen" width="80px" style="rotate: -55deg;">
        
        </div> -->
        <!-- ⭐⭐ - / sug_click - ⭐⭐  -->

      
        <!-- <div id="popup" class="bg-white" style="position: fixed; bottom: 70px; left: 40px; z-index: 9999;"><img src="imagenes/undraw/letrero.png" width="80px" alt=""></div> -->

      <button class="btn bg-success pt-0 btn-xxl" data-bs-toggle="tooltip" data-bs-placement="left"  aria-label="Instrucciones de uso" data-bs-original-title="Iniciar recorrido" style="position: fixed; width: 60px; height: 60px; bottom: 10px; left: 10px; border: 2px solid white; border-radius: 50%; z-index: 9999;" onclick="intro_calcular()" ><i class="fas fa-play mt-2 pt-1 text-white mx-auto" aria-hidden="true"></i></button> 


      <div class="mt-5">

        <!-- hoja 1 -->
        <div class="card base">
          <img src="imagenes/informes/F023-01.png" alt="">

          <div id="intro1" class="pasos paso1" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Escriba su regional, el centro de formación al que pertenece, nombre del programa que cursa y su numero de ficha"></div>
          <div id="intro2" class="pasos paso2" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro3" class="pasos paso3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="información..."></div>
          <div id="intro4" class="pasos paso4" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="información..."></div>
          <div id="intro5" class="pasos paso5" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro6" class="pasos paso6" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro7" class="pasos paso7" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro8" class="pasos paso8" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro9" class="pasos paso9" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro10" class="pasos paso10" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
        </div>

        <!-- hoja 2 -->
        <div class="card base mt-2">
          <img src="imagenes/informes/F023-03.jpg" alt="">

          <div id="intro11" class="pasos paso11" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>

          <div id="intro12" class="pasos paso12" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>

          <div id="intro13" class="pasos paso13" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro14" class="pasos paso14" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>

          <div id="intro15" class="pasos paso15" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>

          <!-- <div id="intro16" class="pasos paso16" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div> -->
          
          <div id="intro17" class="pasos paso17" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          
        </div>

        <!-- hoja 3 -->
        <div class="card base mt-2">
          <img src="imagenes/informes/F023-02-3.jpg" alt="">

          <div id="intro18" class="pasos paso18" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>

          <div id="intro19" class="pasos paso19" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>

          <div id="intro23" class="pasos paso23" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>

          <div id="intro20" class="pasos paso20" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>

        </div>

         <!-- hoja 4 -->
         <div class="card base mt-2">
            <img src="imagenes/informes/EP-f023-01-4.png" alt="">

            <div id="intro21" class="pasos paso21" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
        </div>

        <!-- hoja 5 -->
        <div class="card base mt-2">
            <img src="imagenes/informes/certificacion.jpg" alt="">

            <div id="intro22" class="pasos paso22" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
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
    <script src="js/introweb.js"></script>
    <script  src="js/intro3-f023.js"></script>
    <script  src="js/config.js"></script>
    <script>
      intro_calcular()

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