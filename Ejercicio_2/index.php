<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Inicio Sesion</title>
</head>
<body>
<?php

$usuario_valido = 'Santiago';
$contraseña_valida = 'Santiago123';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $usuario_ingresado = $_POST['usuario'];
  $contraseña_ingresada = $_POST['contraseña'];


  if ($usuario_ingresado == $usuario_valido && $contraseña_ingresada == $contraseña_valida) {

    header('Location: inicio.php');
    exit;
  } else {

    $mensaje_error = 'Las credenciales ingresadas son incorrectas.';
  }
}
?>

<form method="post">
  <label for="usuario">Usuario:</label>
  <input type="text" name="usuario" id="usuario" required>

  <label for="contraseña">Contraseña:</label>
  <input type="password" name="contraseña" id="contraseña" required>

  <button type="submit">Iniciar sesión</button>

  <?php if (isset($mensaje_error)) { ?>
    <div><?php echo $mensaje_error; ?></div>
  <?php } ?>
</form>
<body background="fondo.jpg">
</body>
</html>