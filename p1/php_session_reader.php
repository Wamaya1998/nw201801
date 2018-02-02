<?php
  session_start();
  $txtNombre = "";
  $txtIdentidad = "";
  $hayDatosEnSession = false;
  if(isset($_SESSION["nombre"])){
    $txtNombre = $_SESSION["nombre"];
    $txtIdentidad = $_SESSION["identidad"];
    $hayDatosEnSession = true;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Datos de Sesión</title>
  </head>
  <body>
    <?php
      if($hayDatosEnSession == false){
    ?>
    <div>
      <h1>No hay Datos en la Sessión de PHP</h1>
    </div>
    <?php
  } else{
    ?>
    <div>
        <h1>Hola <?php echo $txtNombre; ?> con identidad
        número <?php echo $txtIdentidad; ?>.
        </h1>
    </div>
  <?php  } //if
  ?>
  </body>
</html>
