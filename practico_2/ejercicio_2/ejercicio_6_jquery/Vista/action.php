<?php

if ($_GET) {
    include_once('../Control/controlInformacion.php'); //para pasarle la info al controller
    $control = new controlInformacion();
    $nombre=$_GET['nombre'];
    $apellido=$_GET['apellido'];
    $edad=$_GET['edad'];
    $direccion=$_GET['direccion'];
    $genero=$_GET['genero'];
    $estudios=$_GET['est'];
    $deportes=$_GET['opciones'];

    $mensaje = $control->revisarInformacion($nombre, $apellido, $edad, $direccion, $genero, $estudios, $deportes);
    include_once('./mensaje.php'); //para poder despues, mostrar el mensaje
    
}