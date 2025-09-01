<?php

//habiendolo hecho con get y post, la unica diferencia que vi fue la manera en la que la informacion se mostró en la URL, con get me muestra clave=valor y con post solo la direccion php que especifiqué en el action

if ($_GET){
    include_once '../Control/controlInformacion.php'; //para poder pasarle la informacion al controller
    $control = new controlInformacion();
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $edad = $_GET['edad'];
    $direccion = $_GET['direccion'];
    $mensaje = $control ->mostrarInformacion($nombre, $apellido, $edad, $direccion);

    include_once './mostrarMensaje.php'; //para poder mostrar el mensaje del controller acá
}

