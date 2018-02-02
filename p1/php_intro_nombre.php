<?php
  session_start();
  if(isset($_POST["btnEnviar"])){
    $txtNombre= $_POST["txtNombre"];
    $txtIdentidad = $_POST["txtIdentidad"];
    //echo $txtNombre . " " . $identidad;
    //die();
    $_SESSION["nombre"] = $txtNombre;
    $_SESSION["identidad"] = $txtIdentidad;

    header("location:php_session_reader.php");
    die();
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ingreso de Datos para Sesión de PHP</title>
  </head>
  <body>
<h1>Ingreso de Datos</h1>
<form action="php_intro_nombre.php" method="post">
  <label for="txtNombre">Nombre Completo</label>
  <input type="text" id="txtNombre" name="txtNombre" />
  <br />
  <label for="txtIdentidad">Identidad</label>
  <input type="text" id="txtIdentidad" name="txtIdentidad" />
  <br />
  <input type="submit" value="Enviar a Sesión"
    name="btnEnviar" />
</form>
<hr />
    <a href="php_session_reader.php" target="_blank">Ir a Ver Datos</a>
  </body>
</html>
