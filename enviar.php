<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los valores del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Configuración del correo
    $para = "luisjosegarzoncorrales6@gmail.com"; // Tu correo electrónico
    $asunto = "Nuevo mensaje de contacto";
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo: $email\n";
    $contenido .= "Mensaje: $mensaje";

    // Cabeceras del correo
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($para, $asunto, $contenido, $headers)) {
        echo "<script>alert('Mensaje enviado exitosamente'); window.location.href = 'contacto.html';</script>";
    } else {
        echo "<script>alert('Hubo un error al enviar el mensaje'); window.location.href = 'contacto.html';</script>";
    }
}
?>
