<?php
//este script solo tiene el $_post y llama al controller
if ($_POST["accion"] == "verificarLogin") { //el action funciona como un identificador para saber qué acción ejecutar en el controller, o sea que si lo que está hidden coincide, hago todo esto
    include_once("../Control/controlLogin.php"); //esto es para poder usar la funcion del controlador, acá mando información para que sea resuelta
    $control = new controlLogin(); //un new de la clase del controlador
    $user = $_POST["user"]; //recupero el user que se guarda en el post
    $pass = $_POST["pass"]; //lo mismo pero con la contraseña
    $mensaje = $control->existeUsuario($user, $pass); //como hice un new de la clase, guardo acá lo que sea que me devuelva la funcion que ejecuto en el controlador, en este caso es el mensaje de bienvenida

    include_once("./mensajeLogin.php"); //con esto le estoy pasando lo que sea que reciba este script a ese archivo para despues mostrarlo en el index.php, acá estoy recibiendo ya todo resuelto y lo tengo que mostrar
}
