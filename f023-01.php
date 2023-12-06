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
    <link rel="stylesheet" href="https://unpkg.com/intro.js/introjs.css">
    <link rel="stylesheet" href="css/intro.css">
       <!-- Favicon -->
   <link href= "../assets/img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

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
        border: 0px solid red;
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
      .paso12{top: 544px; left: 87px; width: 728px; height: 498px;}
      .paso13{top: 614px; left: 87px; width: 310px; height: 54px;}
      .paso14{top: 616px; left: 395px; width: 420px; height: 45px;}

      
      .paso15{top: 658px; left: 87px; width: 728px; height: 384px;}
      .paso16{top: 690px; left: 87px; width:440px; height: 352px;}
      .paso17{top: 690px; left: 525px; width:290px; height: 352px;}

      


      /* hoja 3 */
      .paso18{top: 445px; left: 87px; width:724px; height: 143px;}
      .paso19{top: 750px; left: 87px; width: 726px; height: 111px;}
      .paso20{top: 836px; left: 88px; width: 371px; height: 26px;}

      

      /* paso13{ finalización } */

      .finalizacion{top: 743px; left: 719px; width: 95px; height: 313px;}
      

    </style>
    
    <!-- CARD -->
    <section  class="mb-4 bg-gray-200" >

      <a href="menu-formatos.php">
        <button type="button" class="btn btn-success btn-sm mb-0" style="position: fixed; top: 150px; left: 20px; z-index: 9999;">Volver</button>
      </a>

      <button class="btn bg-success pt-0 btn-xxl" data-bs-toggle="tooltip" data-bs-placement="left"  aria-label="Instrucciones de uso" data-bs-original-title="Iniciar recorrido" style="position: fixed; width: 60px; height: 60px; bottom: 10px; left: 10px; border: 2px solid white; border-radius: 50%; z-index: 9999;" onclick="intro_calcular()"><i class="fas fa-play mt-2 pt-1 text-white mx-auto" aria-hidden="true"></i></button>
      
      <div class="mt-5">

        <!-- hoja 1 -->
        <div class="card base">
          <img src="imagenes/informes/EP-f023-01-1.png" alt="">

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
          <img src="imagenes/informes/EP-f023-01-2.png" alt="">

          <div id="intro11" class="pasos paso11" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>

          <div id="intro12" class="pasos paso12" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>

          <div id="intro13" class="pasos paso13" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          <div id="intro14" class="pasos paso14" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>

          <div id="intro15" class="pasos paso15" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>

          <div id="intro16" class="pasos paso16" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          
          <div id="intro17" class="pasos paso17" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>
          
        </div>

        <!-- hoja 3 -->
        <div class="card base mt-2">
          <img src="imagenes/informes/EP-f023-01-3.png" alt="">

          <div id="intro18" class="pasos paso18" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>

          <div id="intro19" class="pasos paso19" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>

          <div id="intro20" class="pasos paso20" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="información..."></div>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.2.2/intro.min.js"></script>
    <script  src="js/intro1-f023.js"></script>
    <script>
      introJs().start();
    </script>
    
</body>
</html>