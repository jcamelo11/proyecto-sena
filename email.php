<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    // Configura el destinatario y otros detalles del correo
    $destinatario = "paredesjcamelo@gmail.com";
    $asuntoCorreo = "Nuevo mensaje de $nombre: $asunto";

    // Construye el cuerpo del mensaje
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Correo: $correo\n";
    $cuerpoMensaje .= "Asunto: $asunto\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje";

    // Envía el correo
    $headers = "From: $correo\r\n";
    mail($destinatario, $asuntoCorreo, $cuerpoMensaje, $headers);

    // Redirige al usuario a la página de confirmación
    header("Location: correo.php");
    exit;
}
?>
