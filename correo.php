<?php
    $destinatario = 'daniel.aa2626@gmail.com';
    // esto es al correo que se le enviara el mensaje
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "Enviado desde la pagina de Anuncios24";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre

    mail($destinatario, $edad, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";

?>