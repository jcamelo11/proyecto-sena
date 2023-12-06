<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Como Diligenciar Formatos de Seguimiento</title>
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
    <?php
    $archivo_contador = 'contador/contador.txt';

    // Intenta leer el archivo
    if (file_exists($archivo_contador)) {
        $contador = (int)file_get_contents($archivo_contador);
    
        // Manejo de errores al leer el archivo
        if ($contador === false) {
            die('Error al leer el archivo de contador.');
        }
    
        $contador++;
    } else {
        $contador = 1;
    }
    
    // Intenta escribir en el archivo
    if (file_put_contents($archivo_contador, $contador) === false) {
        die('Error al escribir en el archivo de contador.');
    }
    
    echo '<div style="position:fixed;bottom:20px;z-index:9;right:20px;background: #ff5a19;padding: 2px 10px;color: #fff;font-size: 30px;border-radius: 20px;">' . $contador . '</div>';    
    ?>

      
    <!-- MENU -->
    <?php
    include "include.php"
    ?>
    <br><br>
    <!-- MENU /-->
    

    <div style="width: 100%;"><div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;"><iframe title="Diligenciamientos de formatos en seguimiento de Etapa Productiva" frameborder="0" width="1200" height="675" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genial.ly/637be4990267b300127b99ab" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe> </div> </div>
    
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