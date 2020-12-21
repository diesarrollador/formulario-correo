<?php

    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "Enviado desde la página web ___________";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre . "\nDesde la IP: " . $_SERVER['REMOTE_ADDR'];

    // Enviando el correo, para agregar más correos duplicar la línea 13 las veces que sea necesario.
    if(isset($nombre) and isset($asunto) and isset($mensaje) and isset($email)){
        mail("xdiegoxgomez@gmail.com", $asunto, $mensajeCompleto, $header);
    }    

    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>