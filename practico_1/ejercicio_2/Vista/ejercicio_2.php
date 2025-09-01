<!DOCTYPE html>
<!-- Ejercicio 2
Crear una página php que contenga un formulario HTML que permita ingresar las horas
de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
Enviar los datos del formulario por el método Get a otra página php que los reciba y
complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
se cursan por semana. -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Horario de cursada</h1>
    <form action="./mostrarHorario.php" method="get" onsubmit="return validar()">
        <label>Lunes</label>
        <input type="time" name="horaUnoLun" id="horaUnoLun">
        <input type="time" name="horaDosLun" id="horaDosLun">
        <label>Martes</label>
        <input type="time" name="horaUnoMar" id="horaUnoMar">
        <input type="time" name="horaDosMar" id="horaDosMar">
        <label>Miercoles</label>
        <input type="time" name="horaUnoMie" id="horaUnoMie">
        <input type="time" name="horaDosMie" id="horaDosMie">
        <label>Jueves</label>
        <input type="time" name="horaUnoJue" id="horaUnoJue">
        <input type="time" name="horaDosJue" id="horaDosJue">
        <label>Viernes</label>
        <input type="time" name="horaUnoVie" id="horaUnoVie">
        <input type="time" name="horaDosVie" id="horaDosVie">
        <input type="submit" value="Enviar">
    </form>


    <script src="../Vista/JS/app.js"></script>
</body>

</html>