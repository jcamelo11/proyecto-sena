<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Generador de períodos de informes</title>
    <link rel="shortcut icon" href="imagenes/logo/logosena.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/unicons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="imagenes/logo/logosena.png">
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/tooplate-style.css">
    <link rel="stylesheet" href="css/style-periodos.css">
    <link rel="stylesheet" href="css/logo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<?php
  $archivo = "contador/generador.php";
        $contador = intval(trim(file_get_contents($archivo)));
 
        $file = fopen($archivo, "w");
        fwrite($file, $contador+1 . PHP_EOL);
 
        $file = fopen($archivo, "r");
      echo '<div style="position:fixed;bottom:20px;z-index:9;right:20px;background: #28a745;padding: 2px 10px;color: #fff;font-size: 20px;border-radius: 80px;">'. fgets($file). '</div>' ;
        fclose($file);
      ?>
<?php
    error_reporting(0);
    ?>
    <?php
    
        
        $dtz = new DateTimeZone("America/Bogota");
        $dt = new DateTime("now", $dtz);
        $fecha = $dt->format("Y-m-d");	
        $hora = $dt->format("h:i:s");
        $anio = $dt->format("Y");
        $fecha_hora = $dt->format("Y-m-d h:i:s");
        
        $inicio = date("d-m-Y",strtotime($_POST['inicio'])); 
        $parcial = date("d-m-Y",strtotime($_POST['inicio']."+ 90 days")); 
        $final = date("d-m-Y",strtotime($_POST['final'])); 
        $fecha1 = date("d-m-Y",strtotime($_POST['inicio'])); 
        $fecha2 = date("d-m-Y",strtotime($fecha1."+ 14 days"));    
        $a = 1;
    ?>
    <!-- MENU -->
   <?php
    include "include.php"
    ?>
    <!-- MENU /-->
         

    <!-- TITULO -->
    <br><br><br><br><br>
    <div class="container mt-4">
        <a href="generador.php"> <img src="imagenes/logosena.png" class="rounded mx-auto d-block" style="width: 130px" alt=""> </a>
    </div>
     
    <h3 class="text-center">Centro Biotecnológico del Caribe | <span style="color:rgb(59, 162, 65)">Seguimiento a Etapa Productiva</span></h3>
    
     
    <h3 class="text-center mt-4 mb-3"><strong>Generar períodos de Informes</strong> </h3>
     
    
    <!-- TITULO -->

    <!-- form -->
    <form class="text-center" action="periodos.php" method="post">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto mb-3">      
                <span class="input-group-text" style="color: #fff;background-color: #34495e;">Ingrese fecha Inicio de Etapa Productiva</span>
                <input type="date" id="inicio" name="inicio" class="form-control" required> 
            </div>
             
            <div class="col-auto mb-3">      
                <span class="input-group-text" style="color: #fff;background-color: #34495e;" >Ingrese fecha final de Etapa Productiva</span>
                <input type="date" id="final" name="final" class="form-control" required > 
            </div>
        </div>
        <div >
            <input type="submit" class="btn btn-success" value="Generar" >                                   
        </div>

    </form>
    <!-- form -->
    <div class="container mb-2">
        <h3 class="mt-5 font-weight-bold pt-3" style="border-top:2px solid #eee;">Período de Informes</h3>
        <div class="row">
            <!-- Fecha de informe concertacion-->
            <div class="col-auto m-auto">
                <h3>Informe concertación</h3> 
                <h3 class="float-left mt-2" style="font-size:18px;">(F023-01)</h3> 
                <a class="btn btn-sm btn-success" href="informes/GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx">
                    <span class="material-symbols-outlined"><span class="material-symbols-outlined pr-2">file_save</span>
                    </span> <p class="mb-n4 text-white " style="float:right;">Descargar formato</p>  
                </a>

                <table class="rwd-table2">
                    <thead>
                        <tr class=""> 
                            <th class="text-center text-white border-right border-white">FECHA INICIAL</th>
                            <th class="text-center text-white">FECHA FINAL</th>  
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center text-white border-right border-white">No tiene</td>
                            <td class="text-center text-white">No tiene</td>               
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Fecha de informe parcial -->
            <div class="col-auto m-auto">
                <h3>Informe parcial</h3>
                <h3 class="float-left mt-2" style="font-size:18px;">(F023-02)</h3> 
                    <a class="btn btn-sm btn-success" href="informes/GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" download="GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" >
                        <span class="material-symbols-outlined"><span class="material-symbols-outlined pr-2">file_save</span>
                        </span> <p class="mb-n4 text-white " style="float:right;">Descargar formato</p>
                    </a>
                <table id="cesar2" class="rwd-table2" >
                    <thead>
                        <tr class="">
                            <th class="text-center text-white border-right border-white">FECHA INICIAL</th>
                            <th class="text-center text-white">FECHA FINAL</th>                       
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center text-white border-right border-white"><?php echo $inicio ?></td>
                            <td class="text-center text-white"><?php echo $parcial ?></td>               
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Fecha de informe final -->
            <div class="col-auto m-auto">
                <h3>Informe final</h3>
                <h3 class="float-left mt-2" style="font-size:18px;">(F023-03)</h3>
                    <a class="btn btn-sm btn-success" href="informes/GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" download="GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" >
                        <span class="material-symbols-outlined"><span class="material-symbols-outlined pr-2">file_save</span>
                        </span> <p class="mb-n4 text-white " style="float:right;">Descargar formato</p>
                    </a>
                <table id="cesar2" class="rwd-table2" >
                    <thead>
                        <tr class="">
                            <th class="text-center text-white border-right border-white">FECHA INICIAL</th>
                            <th class="text-center text-white">FECHA FINAL</th>                       
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center border-right border-white"><?php echo $inicio?></td>
                            <td class="text-center"><?php echo $final ?></td>             
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
        
    <!-- Fecha de informe final -->
    <!-- bitacoras -->
    <div class="container" style="border-top:2px solid #eee;">
        <div class="row mt-3">

            <div class="col-md-6 mx-auto pb-4">
                <h3 class="text-start font-weight-bold">Período de bitácoras (F147)</h3>

                <a class="btn btn-sm btn-success" href="informes/GFPI-F-147_Formato_bitácora_etapa_productiva - V2.xlsx" download="GFPI-F-147_Formato_bitácora_etapa_productiva - V2.xlsx" >
                    <span class="material-symbols-outlined"><span class="material-symbols-outlined pr-2">file_save</span>
                    </span> <p class="mb-n4 text-white " style="float:right;">Descargar formato</p>    
                </a>
                 
                <table id="cesar" class="rwd-table mx-auto" >
                    <thead class="">
                        <tr>
                            <th class="text-center text-white">BITÁCORA</th>
                            <th class="text-center text-white">FECHA INICIAL</th>
                            <th class="text-center text-white">FECHA FINAL</th>                          
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                            <td class="text-center"><?php echo $a ?></td>
                            <td class="text-center"><?php echo $fecha1 ?></td>
                            <td class="text-center"><?php echo $fecha2 ?></td>
                            <tr>
                            <?php
                            while ($a <= 11) 
                            {
                                $a = $a + 1;
                                
                                $fecha1 = date("d-m-Y",strtotime($fecha2."+ 1 days"));
                                $fecha2 = date("d-m-Y",strtotime($fecha1."+ 14 days"));
                                if ($a==12) {
                                $fecha2 = $final;
                                }
                                ?>
                                <td class="text-center"><?php echo $a ?></td>
                                <td class="text-center"><?php echo $fecha1 ?></td>
                                <td class="text-center"><?php echo $fecha2 ?></td>
                                        
                            </tr>
                            <?php } ?>    
                        </tbody>
                    <tfoot >
                            <tr>
                                <th class="text-center text-white">BITÁCORA</th>
                                <th class="text-center text-white">FECHA INICIAL</th>
                                <th class="text-center text-white">FECHA FINAL</th> 
                            </tr>
                    </tfoot>
                </table>

                <h5>Fecha de entrega de los informes</h5> 
                <a class="btn btn-success text-white mt-1" href="fechaentrega.php">Generar</a>
            </div>
             
            <style>
                /* Estilos adicionales para mejorar la apariencia */
                table {
                    border-collapse: collapse;
                    width: 100%;
                }

                th,
                td {
                    border-bottom: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                }
            </style>
            <!-- sugerencias -->
            <div class="col-md-6 pb-4 mx-auto">
            <h3 class="text-start font-weight-bold">Guías interactivas</h3>
                <div class="mx-auto">
                    <a href="form-seguimiento.php" Target="_blank"> <img src="imagenes/project/informes.png" class="sombra mt-1" alt="Editado por heyder canchila" style="width: 475px;" ></a>
                    <a href="form-seguimiento.php" Target="_blank"> <img src="imagenes/project/requisitos.png" class="sombra mt-4" alt="Editado por heyder canchila" style="width: 475px;" ></a>
                </div>
                <table class="mx-auto border border-gray mt-5">
                         
                    <thead>
                        <td class="bg-success">
                            <h3 class="font-weight-bold text-center text-white">¡ Dudas Frecuentes !</h3>             
                        </td>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="">
                            <a class="text-white text-center" href="https://docs.google.com/document/d/1d9DskhOHYdXe1tOryXsDJ7FnZlFDm10h14wL3hjb7KU/edit#heading=h.nyaqketnv8w3" Target="_blank">
                                <h3 class="mb-n2" style="font-size:18px;">¿Dónde debo ubicar los períodos generados?</h3>
                            </a>
                        </td>             
                        </tr>
                        <tr>
                        <td class="">
                            <a class="text-white text-center" href="https://docs.google.com/document/d/1d9DskhOHYdXe1tOryXsDJ7FnZlFDm10h14wL3hjb7KU/edit#heading=h.4lb4ori4n86v" Target="_blank">
                                <h3 class="mb-n2" style="font-size:18px;">¿Que versión de las bitacoras debo descargar?</h3> 
                            </a>
                    </td>
                        </tr>
                        <tr>
                        <td class="">
                            <a class="text-white text-center"href="https://docs.google.com/document/d/1d9DskhOHYdXe1tOryXsDJ7FnZlFDm10h14wL3hjb7KU/edit#heading=h.pa4m68ud1x46" Target="_blank">
                                <h3 class="mb-n2" style="font-size:18px;">¿Que nomenclatura debo usar para la entrega de las bitácoras?</h3> 
                            </a>
                        </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            <!-- sugerencias-->
        </div>
    </div>

    <p class="mt-5 mb-3 text-muted">&copy; Versión 2.0</p> 
    <!-- script -->
    <script type="application/javascript">
        $(document).ready( function () {
        $('#cesar').DataTable();
        } );
    </script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

    
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