<?php
//el action acá sirve como intermediario entre la vista y el controller (con un script php en el medio para poder mostrar el resultado en la vista(html))
if ($_POST) {
    include_once('../Control/controlOperaciones.php');//para pasarle los datos al controller, que este haga las operaciones, las devuelva acá para pasarselas al mensaje.php
    $control = new controlOperaciones();
    $numA = $_POST["numA"];
    $numB = $_POST["numB"];
    $operacion = $_POST["op"]; //acá se guarda la opcion que haya cliqueado el usuario
    $mensaje = $control->realizarOperaciones($numA, $numB, $operacion);
    include_once('./mensaje.php'); //es el que muestra lo que sea que manda el controller
}
