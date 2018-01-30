<?php
 $mensajeAMostrar = "";
 $txtNombre = "";
 if(isset($_POST["txtNombre"])){
    $mensajeAMostrar = $_POST["txtNombre"];
    $txtNombre = $_POST["txtNombre"];
 }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo de Formulario con PHP</title>
  </head>
  <body>
    <form action="php_1_2.php" method="post">
      <input type="text" name="txtNombre" value="<?php echo $txtNombre; ?>" placeholder="Nombre Completo"/>
      <input type="submit" name="btn_enviar" value="Enviar"  />
    </form>
    <hr />
    <div>
      <?php echo $mensajeAMostrar; ?>
    </div>
  </body>
</html>
