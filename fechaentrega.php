<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Fecha de entrega</title>
  <link rel="shortcut icon" href="imagenes/logo/logosena.png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"><link rel="stylesheet" href="css/fechaentrega.css">
  <link rel="stylesheet" href="css/feperiodos.css">
</head>
<body>
  <?php
    error_reporting(0);
    ?>
    <?php
    

        $dtz = new DateTimeZone("America/Bogota");
        setlocale(LC_ALL,'es_ES');
        $dt = new DateTime("now", $dtz);
        $fecha = $dt->format("Y-m-d");	
        $hora = $dt->format("h:i:s");
        $anio = $dt->format("Y");
        $fecha_hora = $dt->format("Y-m-d h:i:s");
    

        $concertacion = date("d-m-Y",strtotime($_POST['inicio']."+ 5 days"));
        $inicio = date("d-m-Y",strtotime($_POST['inicio'])); 
        $parcial = date("d-m-Y",strtotime($_POST['inicio']."+ 90 days")); 
        $final = date("d-m-Y",strtotime($_POST['final'])); 
        $fecha1 = date("d-m-Y",strtotime($_POST['inicio'])); 
        $fecha2 = date("d-m-Y",strtotime($fecha1."+ 14 days"));    
        $a = 1;
    ?>

<body class="align">
  <!-- TITULO -->
  <div class="container">
        <a href="#"> <img src="imagenes/logo/logosena.png" class="rounded mx-auto d-block" style="width: 130px" alt=""> </a>
    </div>
    <h1 class="text-center">SENA Centro Biotecnológico del Caribe</h1>
    <h3> Genera fecha de entrega de informes de seguimiento</h3>
    
    <!-- TITULO -->

  <div class="grid">

    <form action="fechaentrega.php" method="POST" class="form login">
    <span class="input-group-text" style="color: #3ba241;text-align: center">Ingrese fecha Inicio de Etapa Productiva</span>

      <div class="form__field">
        <label for="login__username"><svg class="icon">
            <use xlink:href="#icon-user"></use>
          </svg></label>
        <input type="date" id="inicio" name="inicio" class="form__input" placeholder="" required>
      </div>

      <span class="input-group-text" style="color: #3ba241;text-align: center" >Ingrese fecha final de Etapa Productiva</span>

      <div class="form__field">
        
        <label for="login__username"><svg class="icon">
            <use xlink:href="#icon-user"></use>
          </svg></label>
        <input type="date" id="final" name="final" class="form__input" placeholder="" required>
      </div>

      <div class="form__field">
        <input type="submit" value="Generar">
      </div>

    </form>

    

  </div>

    <!-- bitacoras -->
    <div class="container" >
        <div class="row " style="text-align: left !important;">
            <div class="col">
                <br>
                <br>
                <table id="cesar" class="rwd-table" >
                    <thead>
                      <tr>
                             <th class="text-center">CONCERTACION</th> 
                            <th class="text-center">BITÁCORA 1</th> 
                            <th class="text-center"></th>
                            <th class="text-center">BITÁCORA 2</th>
                            <th class="text-center"></th>
                            <th class="text-center">BITÁCORA 3</th>
                            <th class="text-center"></th>
                            <th class="text-center">BITÁCORA 4</th> 
                            <th class="text-center"></th>
                            <th class="text-center">BITÁCORA 5</th>
                            <th class="text-center"></th>
                            <th class="text-center">BITÁCORA 6</th>
                            <th class="text-center"></th>
                            <th class="text-center">PARCIAL</th>
                            <th class="text-center"></th> 
                            <th class="text-center">BITACORA 7</th> 
                            <th class="text-center"></th> 
                            <th class="text-center">BITÁCORA 8</th>
                            <th class="text-center"></th>
                            <th class="text-center">BITÁCORA 9</th>
                            <th class="text-center"></th>
                            <th class="text-center">BITÁCORA 10</th>
                            <th class="text-center"></th> 
                            <th class="text-center">BITÁCORA 11</th>
                            <th class="text-center"></th>
                            <th class="text-center">BITÁCORA 12</th>
                            <th class="text-center"></th>
                            <th class="text-center">FINAL</th>
                            <th class="text-center"></th> 
                        </tr>
                        <tr>
                             <th class="text-center">------------------</th> 
                            <th class="text-center">INICIO</th> 
                            <th class="text-center">FINAL</th>
                            <th class="text-center">INICIO</th> 
                            <th class="text-center">FINAL</th>
                            <th class="text-center">INICIO</th> 
                            <th class="text-center">FINAL</th>
                            <th class="text-center">INICIO</th> 
                            <th class="text-center">FINAL</th>
                            <th class="text-center">INICIO</th> 
                            <th class="text-center">FINAL</th>
                            <th class="text-center">INICIO</th> 
                            <th class="text-center">FINAL</th>
                            <th class="text-center">INICIO</th> 
                            <th class="text-center">FINAL</th>
                            <th class="text-center">INICIO</th> 
                            <th class="text-center">FINAL</th>
                            <th class="text-center">INICIO</th> 
                            <th class="text-center">FINAL</th>
                            <th class="text-center">INICIO</th> 
                            <th class="text-center">FINAL</th>
                            <th class="text-center">INICIO</th> 
                            <th class="text-center">FINAL</th>
                            <th class="text-center">INICIO</th> 
                            <th class="text-center">FINAL</th>
                            <th class="text-center">INICIO</th> 
                            <th class="text-center">FINAL</th>
                            <th class="text-center">INICIO</th> 
                            <th class="text-center">FINAL</th>

                        </tr>
                       
                        <tr>
                        <td class="text-center"><?php echo $concertacion?></td>
                        <td class="text-center"><?php echo $fecha1 ?></td>
                        <td class="text-center"><?php echo $fecha2 ?></td>
                         
                            

                         
                            <?php
                            while ($a <= 5) 
                            {
                                $a = $a + 1;
                                
                                $fecha1 = date("d-m-Y",strtotime($fecha2."+ 1 days"));
                                $fecha2 = date("d-m-Y",strtotime($fecha1."+ 14 days"));
                                if ($a==12) {
                                $fecha2 = $final;
                                }
                                
                                
                                ?>
                                <td class="text-center"><?php echo $fecha1 ?></td>
                                <td class="text-center"><?php echo $fecha2 ?></td>
                                        
                                
                            <?php } ?>
                            <td class="text-center"><?php echo $inicio ?></td>  
                            <td class="text-center"><?php echo $parcial ?></td> 
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

                                <td class="text-center"><?php echo $fecha1 ?></td>
                                <td class="text-center"><?php echo $fecha2 ?></td>
                                        
                                
                            <?php } ?> 
                            
                            <td class="text-center"><?php echo $inicio ?></td> 
                            <td class="text-center"><?php echo $fecha2 ?></td>
                            
                        </tr>
                        
                    </thead>
                     <tbody>
                     </tbody>
                     <tfoot>
                     </tfoot>
                </table>
            </div>
            <br>
        </div>
    </div>
    <br><br>
    <span class="input-group-text" style="color: #3ba241;text-align: center" >Fecha de inicio digitada</span>    <span class="input-group-text" style="color: #fff;text-align: center"><?php echo $inicio ?></span>
    <span class="input-group-text" style="color: #3ba241;text-align: center" >Fecha de final digitada</span>    <span class="input-group-text" style="color: #fff;text-align: center"> <?php echo $final ?></span>

    <br><br><br><br><br>

    <!-- script -->
    <script type="application/javascript">
        $(document).ready( function () {
        $('#cesar').DataTable();
        } );
    </script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

    <svg xmlns="http://www.w3.org/2000/svg" class="icons">
    <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
      <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
    </symbol>
    <symbol id="icon-lock" viewBox="0 0 1792 1792">
      <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
    </symbol>
    <symbol id="icon-user" viewBox="0 0 1792 1792">
      <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
    </symbol>
  </svg>


</body>
<!-- partial -->
  
</body>
</html>
