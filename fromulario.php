<?php
    $nombre = $_POST['nombre'];
    $tallas = $_POST['tallas'];
    $numero = $_POST['numero'];
    
    $mensaje = " Este mensaje fue enviado por " . $nombre . ",\r\n";
    $mensaje = " Su numero de cellular es " . $numero . ",\r\n";
    $mensaje = " su talla es " . $tallas . ",\r\n";

    $correo = "platinnumropa@gmail.com";
    $asunto = "Este correo fue enviado desde platinum register";

    
    mail($correo, $asunto, utf8_decode($mensaje), $header);
    header("location:exito.html");



    ?>