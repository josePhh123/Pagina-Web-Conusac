<?php
    $destino="proyectos@conusac.com";
    $name=$_POST["name"];
    $email=$_POST["email"];
    $website=$_POST["website"];
    $address=$_POST["address"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];
    $contenido = "Nombre: ". $name ."\nCorreo: " . $email ."\nWebsite: " . $website . "\nDireccion: " . $address. "\nAsunto: " . $subject . "\nMensaje: " . $message;
    mail($destino,"Contacto",$contenido);
    header("Location:index.html");
?>