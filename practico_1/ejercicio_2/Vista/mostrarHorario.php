<?php
if ($_GET) {
    include_once("../Control/controlHorario.php"); //esto es para poder usar la funcion del controlador, acá mando información para que sea resuelta
    $horario = $_GET;
    $control = new controlHorario();
    $mensaje = $control->horario($horario);
    include_once("../Vista/mensaje.php"); //con esto le estoy pasando lo que sea que reciba este script a ese archivo para despues mostrarlo en el index.php, acá estoy recibiendo ya todo resuelto y lo tengo que mostrar
}
