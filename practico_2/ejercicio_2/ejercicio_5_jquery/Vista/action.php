<?php

if ($_GET) {
    include_once('../Control/controlInformacion.php'); //para pasarle informacion al controller
    $control = new controlInformacion();
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $edad = $_GET['edad'];
    $genero = $_GET['genero'];
    $direccion = $_GET['direccion'];
    $est = $_GET['est'];

    $mensaje = $control->mostrarInformacion($nombre, $apellido, $edad, $genero, $direccion, $est);
    include_once('../Vista/mensaje.php'); //para pasarle el resultado delcontroller a un este php así muestro el mensaje
}
