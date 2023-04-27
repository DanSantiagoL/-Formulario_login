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