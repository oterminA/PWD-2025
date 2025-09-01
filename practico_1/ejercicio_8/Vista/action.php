<?php

if ($_POST) {
    include_once('../Control/controlEntradas.php');
    $control = new controlEntradas();
    $edad = $_POST["edad"];
    $estudio = $_POST["estudio"];
    $mensaje = $control->valorEntradas($edad, $estudio);
    include_once('./mensaje.php');
}
