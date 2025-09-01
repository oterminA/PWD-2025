<!DOCTYPE html>
<!-- Ejercicio 6
Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
que procesa el formulario la cantidad de deportes que practica. -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>

<body>
    <form action="action.php" method="get" onsubmit="return validar()" id="formulario">
        <label>Nombre:</label> <br>
        <input type="text" name="nombre" id="nombre"> <br>
        <label>Apellido</label> <br>
        <input type="text" name="apellido" id="apellido"> <br>
        <label>Edad</label> <br>
        <input type="text" name="edad" id="edad"> <br>
        <label>Genero</label> <br>
        <select name="genero" id="genero">
            <option value="">Seleccione una opcion</option>
            <option value="F">F</option>
            <option value="M">M</option>
            <option value="OTRO">OTRO</option>
        </select><br>
        <label>Direccion</label> <br>
        <input type="text" name="direccion" id="direccion"> <br>
        <label>Nivel de estudios</label> <br>
        <!-- como hago acá para que pueda poner el mismo atributo en name e id pero tambien manteniendo eso de que si apreto un boton no puedo apretar el otro? -->
        <input type="radio" name="est" id="sin_est" value="sin_est">Sin estudios<br>
        <input type="radio" name="est" id="est_prim" value="est_prim">Primario<br>
        <input type="radio" name="est" id="est_sec" value="est_sec">Secundario<br>
        <input type="radio" name="est" id="est_uni" value="est_uni">Universitario<br>
        <span id="spanError"></span><br>
        <label>Deportes que practica: </label><br>
        <input type="checkbox" name="opciones[]" id="fut">Futbol<br>
        <input type="checkbox" name="opciones[]" id="bas">Basquet<br>
        <input type="checkbox" name="opciones[]" id="ten">Tennis<br>
        <input type="checkbox" name="opciones[]" id="pad">Padel<br>
        <input type="checkbox" name="opciones[]" id="han">Handball<br>
        <input type="checkbox" name="opciones[]" id="otro">Otro<br><br>
        <div id="divError"></div>
        <input type="submit" value="Enviar" class="boton">
        <input type="reset" value="Borrar" class="boton">
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="./JS/app.js"></script>
</body>

</html>