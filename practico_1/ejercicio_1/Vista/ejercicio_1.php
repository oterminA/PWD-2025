<!DOCTYPE html>
<!-- Ejercicio 1
Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
respuesta, que permita volver a la página anterior. -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Vista/CSS/style.css">

    <title>Document</title>
</head>

<body>
    <!-- uso get porque no es mucha cantidad de informacion que tengo que mandar al servidor y además no es info sensible que deba ocultarse -->
    <form onsubmit="return validar()" action="./vernumero.php" method="get" id="formulario">
        <label>Ingrese un número</label><br>
        <input type="text" name="numero" id="numero" maxlength="10"><br>
        <!-- pongo required? -->
        <input type="hidden" name="accion" value="numeroPositivo"> <!-- eso es lo que se permite que el mensajeLogin se conecte con el controlador -->
        <input type="submit" value="Enviar"><br> <br>
    </form>

    <script src="./JS/app.js"></script>
</body>

</html>