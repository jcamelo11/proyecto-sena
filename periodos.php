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

</head>
<body>
<?php
  $archivo = "contador/generador.php";
        $contador = intval(trim(file_get_contents($archivo)));
 
        $file = fopen($archivo, "w");
        fwrite($file, $contador+1 . PHP_EOL);
 
        $file = fopen($archivo, "r");
      echo '<div style="position:fixed;bottom:20px;z-index:9;right:20px;background: #ff5a19;padding: 2px 10px;color: #fff;font-size: 30px;border-radius: 20px;">'. fgets($file). '</div>' ;
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
    <br><br><br><br><br>

    <!-- TITULO -->
    <div class="container">
        <a href="generador.php"> <img src="imagenes/logosena.png" class="rounded mx-auto d-block" style="width: 130px" alt=""> </a>
    </div>
    <br>
    <h1 class="text-center">SENA Centro Biotecnológico del Caribe</h1>
    <h4 class="text-center" style="color:rgb(59, 162, 65)">Seguimiento a Etapa Productiva</h4>
    <br>
    <h3 class="text-center">Generar períodos de Informes</h3>
    <br>
    
    <!-- TITULO -->

    <!-- form -->
    <form class="text-center" action="periodos.php" method="post">
        <div class="container">
        <div class="row justify-content-center">
            <div class="" style="width: auto;">      
                <span class="input-group-text" style="color: #3ba241;background-color: #34495e;">Ingrese fecha Inicio de Etapa Productiva</span>
                <input type="date" id="inicio" name="inicio" class="form-control" required><br>
            </div>
            <br>
            <div class=""style="width: auto;">      
                <span class="input-group-text" style="color: #3ba241;background-color: #34495e;" >Ingrese fecha final de Etapa Productiva</span>
                <input type="date" id="final" name="final" class="form-control" required ><br>
            </div>
        </div>
        <div>
            <input type="submit" class="btn btn-outline-success" value="Generar" >                                   
        </div>

    </form>
    <!-- form -->
    <br>
    <br>
    <br>
        <!-- Fecha de informe concertacion-->
        <div class="container" >
        <div class="row " >
            <div class="col" >
                <h3>Período Informe concertación</h3> 
                <small>(F023-01)</small> <a href="informes/GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx"> Descargar formato</a>
                <table class="rwd-table2">
                    <thead>
                        <tr> 
                            <th class="text-center">FECHA INICIAL</th>
                            <th class="text-center">FECHA FINAL</th>  
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">No tiene</td>
                            <td class="text-center">No tiene</td>               
                        </tr>
                    </tbody>
                </table>
            </div>
    <!-- Fecha de informe parcial -->
    <div class="col">
        <h3>Período informe parcial</h3>
        <small>(F023-02)</small> <a href="informes/GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" download="GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" > Descargar formato</a>
        <table id="cesar2" class="rwd-table2" >
            <thead>
                <tr>
                    <th class="text-center">FECHA INICIAL</th>
                    <th class="text-center">FECHA FINAL</th>                       
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td class="text-center"><?php echo $inicio ?></td>
                    <td class="text-center"><?php echo $parcial ?></td>               
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Fecha de informe final -->
    <div class="col" style="text-align: left !important;">
        <h3>Período informe final</h3>
        <small>(F023-03)</small> <a href="informes/GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" download="GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" > Descargar formato</a>
        <table id="cesar2" class="rwd-table2" >
            <thead>
                <tr>
                    <th class="text-center">FECHA INICIAL</th>
                    <th class="text-center">FECHA FINAL</th>                       
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center"><?php echo $inicio?></td>
                    <td class="text-center"><?php echo $final ?></td>             
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Fecha de informe final -->
    <!-- bitacoras -->
    <div class="container ">
        <div class="row " style="text-align: left !important;">
            <div class="col">
                <h3 class="text-left">Período de bitácoras</h3>
                <small>(F147)</small> 
                <br>                <br>
                <a href="informes/GFPI-F-147_Formato_bitácora_etapa_productiva - V2.xlsx" download="GFPI-F-147_Formato_bitácora_etapa_productiva - V2.xlsx" > Descargar formato</a>
                <br>
                <table id="cesar" class="rwd-table" >
                    <thead>
                        <tr>
                            <th class="text-center">BITÁCORA</th>
                            <th class="text-center">FECHA INICIAL</th>
                            <th class="text-center">FECHA FINAL</th>                          
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
                    <tfoot>
                            <tr>
                                <th class="text-center">BITÁCORA</th>
                                <th class="text-center">FECHA INICIAL</th>
                                <th class="text-center">FECHA FINAL</th> 
                            </tr>
                    </tfoot>
                </table>
                <a href="fechaentrega.php"><h6>Generar fecha de entrega de los informes</h6></a>
            </div>
            <br>
            <!-- sugerencias -->
            <div class="col">
                <table id="cesar2" class="rwd-table3" >
                    <br><br><br><br><br>
                    <thead>
                        <tr>
                            <th class="text-center" style="font-size:19px">⚠️ DUDAS FRECUENTES ⚠️</th>                      
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                            <td class="text-center"><a class="text-light" href="https://docs.google.com/document/d/1d9DskhOHYdXe1tOryXsDJ7FnZlFDm10h14wL3hjb7KU/edit#heading=h.nyaqketnv8w3" Target="_blank">¿Dónde debo ubicar los períodos generados?</a></td>             
                            </tr>
                            <tr>
                            <td class="text-center"><a class="text-light" href="https://docs.google.com/document/d/1d9DskhOHYdXe1tOryXsDJ7FnZlFDm10h14wL3hjb7KU/edit#heading=h.4lb4ori4n86v" Target="_blank">¿Que versión de las bitacoras debo descargar?</a></td>
                            </tr>
                            <tr>
                            <td class="text-center"><a class="text-light"href="https://docs.google.com/document/d/1d9DskhOHYdXe1tOryXsDJ7FnZlFDm10h14wL3hjb7KU/edit#heading=h.pa4m68ud1x46" Target="_blank">¿Que nomenclatura debo usar para la entrega de las bitacoras?</a></td>
                            </tr>
                    </tbody>
                </table>
                <br><br>
                <a href="form-seguimiento.php" Target="_blank"> <img src="imagenes/cartillas/como-diligenciar-informes.png" class="sombra" alt="Editado por heyder canchila" style="width: 475px;" ></a> <br>
                <a href="form-seguimiento.php" Target="_blank"> <img src="imagenes/cartillas/req-certificacion.png" class="sombra" alt="Editado por heyder canchila" style="width: 475px;" ></a>
            </div>
            <!-- sugerencias-->
        </div>
    </div>

    <p class="mt-5 mb-3 text-muted">&copy; Version 1.5</p>
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