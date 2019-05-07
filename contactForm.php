<?php


//Llamando a los campos
$destino = "yoannyaus@gmail.com";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
//Datos para el correo
$contenido = "Nombre: " .$nombre ."\nEmail" .$email;

mail($destino, "Contacto" , $contenido);

?>

