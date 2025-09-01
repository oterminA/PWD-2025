<!DOCTYPE html>
<!-- Ejercicio 3
Crear una página php que contenga un formulario HTML como el que se indica en la
imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
Cambiar el método Post por Get y analizar las diferencias -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Vista/CSS/style.css">
    <title>Document</title>
</head>

<body>
    <form action="action.php" method="get" onsubmit="return validar()">
        <label>Nombre:</label> <br>
        <input type="text" name="nombre" id="nombre"> <br>
        <label>Apellido</label> <br>
        <input type="text" name="apellido" id="apellido"> <br>
        <label>Edad</label> <br>
        <input type="text" name="edad" id="edad"> <br>
        <label>Direccion</label> <br>
        <input type="text" name="direccion" id="direccion"> <br>
        <input type="submit" value="Enviar" id="boton"> <br>
        <input type="reset" value="Borrar datos" id="boton">
    </form>
<script src="../Vista/JS/app.js"></script>
</body>

</html>