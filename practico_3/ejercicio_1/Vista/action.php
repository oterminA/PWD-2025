<?php
// lo que voy a recibir del $_files es algo asi:
// Array
// (
//     [name] => documento.pdf           // Nombre original del archivo
//     [type] => application/pdf         // Tipo MIME
//     [tmp_name] => /tmp/php123.tmp     // Ruta temporal en el servidor
//     [error] => 0                      // Código de error (0 = todo bien)
//     [size] => 124500                  // Tamaño del archivo en bytes
// )


// Directorio donde se guarda el archivo
$dir = 'C:\\xampp\\htdocs\\prog_web_dinamica\\u1\\practico_3\\ejercicio_1\\Vista\\CSS\\archivos'; //barra invertida doble 
include_once('../Control/controlArchivos.php');
$control = new controlArchivos();
$archivo=$_FILES['archivo'];
$mensaje = $control ->procesarArchivo($archivo, $dir);
include_once('./mensaje.php');
?>
