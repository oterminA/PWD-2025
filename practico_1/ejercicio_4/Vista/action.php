<?php

//FUNCIONA la modificacion de la edad mediante la url gracias al method="get"

if ($_GET){
    include_once('../Control/controlInformacion.php'); //controller
    $control = new controlInformacion();
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $edad = $_GET['edad'];
    $direccion = $_GET['direccion']; 
    $mensaje = $control -> calcularMayoriaEdad($nombre, $apellido, $edad, $direccion);
    include_once('./mensaje.php');
}