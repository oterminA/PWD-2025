<?php

//este script solo tiene el $_post y llama al controller
if ($_GET["accion"] == "numeroPositivo") { //el action funciona como un identificador para saber qué acción ejecutar en el controller, o sea que si lo que está hidden coincide, hago todo esto
    include_once("../Control/controlNumero.php"); //esto es para poder usar la funcion del controlador, acá mando información para que sea resuelta
    $control = new controlNumero(); //un new de la clase del controlador
    $numero = $_GET["numero"]; 
    $mensaje = $control->numeroPositivo($numero); //como hice un new de la clase, guardo acá lo que sea que me devuelva la funcion que ejecuto en el controlador, en este caso es el mensaje de bienvenida

    include_once("./mensaje.php"); //con esto le estoy pasando lo que sea que reciba este script a ese archivo para despues mostrarlo en el index.php, acá estoy recibiendo ya todo resuelto y lo tengo que mostrar
}
?>