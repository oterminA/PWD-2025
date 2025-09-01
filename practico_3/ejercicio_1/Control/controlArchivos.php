<?php
class controlArchivos{
    function procesarArchivo($archivo, $dir) {
        // muestro la info del archivo
        $mensaje = 
         ">Nombre: " . $archivo['name'] . "<br />". 
         ">Tipo: " . $archivo['type'] . "<br />". 
         ">Tamaño: " . ($archivo['size'] / 1024) . " kB<br />". 
         ">Carpeta temporal: " . $archivo['tmp_name'] . "<br />";
    
        // rut destino
        $destino = $dir . basename($archivo['name']);
    
        //tengo q tratar de mover el arvhivo, suponho que es de un limbo en el servidor a mi computadora???
        if (!move_uploaded_file($archivo['tmp_name'], $destino)) {
            $texto = ">>ERROR: no se pudo cargar el archivo.";
        } else {
            $texto= ">>El archivo " . $archivo['name'] . " se copió con éxito.";
        }

        $textoFinal = $mensaje . $texto;
        return $textoFinal;
    }
}
?>