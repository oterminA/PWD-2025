<?php
//esto lleva del index.php al controlador

if ($_POST["accion"] == "peliculas") { //el action funciona como un identificador para saber qué acción ejecutar en el controller, o sea que si lo que está hidden coincide, hago todo esto
    require_once("../Control/controlPeliculas.php"); //esto es para poder usar la funcion del controlador, acá mando información para que sea resuelta
    $control = new controlPeliculas(); //un new de la clase del controlador
    $titulo = $_POST["inputTitulo"]; 
    $actores = $_POST["inputActores"];
    $director = $_POST["inputDirector"];
    $guion = $_POST["inputGuion"]; 
    $produccion = $_POST["inputProduccion"]; 
    $anio = $_POST["inputAnio"]; 
    $nacionalidad = $_POST["inputNac"]; 
    $genero = $_POST["inputGenero"]; 
    $duracion = $_POST["inputDuracion"]; 
    $restriccion= $_POST["inlineRadioOptions"]; 
    $sinopsis= $_POST["textSinopsis"]; 

    $mensaje = $control->mostrarPeliculas($titulo, $actores, $director, $guion, $produccion, $anio, $nacionalidad, $genero, $duracion, $restriccion, $sinopsis); //como hice un new de la clase, guardo acá lo que sea que me devuelva la funcion que ejecuto en el controlador, en este caso es el mensaje de bienvenida

    include("./mensajePeliculas.php"); //con esto le estoy pasando lo que sea que reciba este script a ese archivo para despues mostrarlo en el index.php, acá estoy recibiendo ya todo resuelto y lo tengo que mostrar
}