<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario y validar
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Configurar los datos del correo
    $to = 'porcayodominguezjesusalfredo@gmail.com';  // Reemplaza con tu dirección de correo electrónico
    $subject = 'Nuevo mensaje de contacto';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Construir el mensaje
    $message = "Nombre: $nombre\n";
    $message .= "Correo Electrónico: $email\n";
    $message .= "Mensaje:\n$mensaje\n";
    
    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
