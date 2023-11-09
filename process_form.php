<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $para = "rexgamer152@gmail.com"; // Reemplaza con tu dirección de correo electrónico
    $asunto = "Nuevo mensaje de contacto de $nombre";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $email\n\n";
    $contenido .= "Mensaje:\n$mensaje";

    // Utiliza la función mail() para enviar el correo
    mail($para, $asunto, $contenido);

    // Puedes redirigir a una página de agradecimiento o mostrar un mensaje de éxito
    header("Location: gracias.html");
    exit();
}
?>
