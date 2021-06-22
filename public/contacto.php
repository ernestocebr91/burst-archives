<?php
    // Almacenamos el contenido de los input del formulario de contacto en distintas variables.
    $nombreUsuario = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $consulta = $_POST['consulta'];

    // Dirección a la que se va a enviar la consulta.
    $to = "burstarchives@gmail.com";
    $body = "";

    // Contenido del mensaje.
    $body .= "De: " . $nombreUsuario . $apellidos . "\r\n";
    $body .= "Email: " . $email . "\r\n";
    $body .= "Consulta: " . $consulta . "\r\n";

    // Enviamos el mensaje.
    mail($to, $asunto, $body);
?>