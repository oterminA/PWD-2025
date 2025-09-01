<?php

if ($_POST) {
    include_once('../Control/controlEntradas.php'); //controller
    $control = new controlEntradas();
    $edad = $_POST["edad"];
    $estudio = $_POST["estudio"];
    $mensaje = $control->valorEntradas($edad, $estudio);
    include_once('./mensaje.php'); //vista, es el php para mostrar el resultado que recibe de este lugar, bien podria ser el action pero bueno
    
}
