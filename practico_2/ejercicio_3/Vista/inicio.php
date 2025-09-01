<!DOCTYPE html>
<!-- Ejercicio 3
b) Realizar la validación de este formulario. Chequear no solo que se hayan cargado el
usuario y la contraseña antes de ser enviados al servidor sino que también debe
realizar un control de contraseña segura (La contraseña debe tener como mínimo 8
caracteres, no puede ser igual que el nombre de usuario ingresado y debe contener
letras y números).
c) Aplicar Bootstrap de manera que la pantalla tenga un aspecto similar al siguiente: -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="../Vista/CSS/style.css">
</head>

<body>
  <div id="main-container">
  <h2>Member login</h2>
  <!-- para este ejercicio no sabia qué onda conn el action, o sea que tengo que hacer para este inciso -->
  <form action="./actionForm.php" method="post" onsubmit="return validarFormulario()" id="formulario">
      <input type="text" class="form-control" id="inputUsername2" placeholder="Username" required>
      <input type="password" class="form-control" id="inputPassword2" placeholder="Password" required>
      <div id="divError"></div>
      <button type="submit" class="btn btn-primary mb-3 btn-success">Login</button>
  </form>
</div>
  <script src="./JS/validacion.js"></script>
</body>

</html>