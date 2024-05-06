<?php
if(isset($_POST['submit'])) {
    $correo = $_POST['correo'];
    $destinatario = "tu@email.com"; // Coloca aquí tu dirección de correo electrónico
    $asunto = "Nuevo suscriptor";
    $mensaje = "¡Nuevo suscriptor!\nCorreo: $correo";

    // Envía el correo electrónico
    mail($destinatario, $asunto, $mensaje);

    // Redirige al usuario a una página de confirmación
    header('Location: gracias.html');
    exit; // Asegura que el script se detenga después de la redirección
}
?>
