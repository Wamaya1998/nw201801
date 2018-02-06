<?php
    require_once("php_p1_uyuca_library.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tipicos del Uyuca</title>
  </head>
  <body>
     <h1>Ingrese su orden aquí</h1>
     <form action="php_tipicos_el_uyuca.php" method="post">
        <fieldset>
          <label>Cliente</label>
          <input type="text" name="txtCliente" value=""
            placeholder="Nombre Completo del Cliente"
            id="txtCliente" /> <br />
            <label>Correo Electrónico</label>
            <input type="text" name="txtEmail" value=""
              placeholder="correo@lectro.co"
              id="txtEmail" />
        </fieldset>
        <fieldset>
            <label>Entradas</label>
            <select name="cmbEntrada">
              <?php
                echo arrayToSelect(obtenerEntradas(), "descripcion","codigo","");
              ?>
            </select>
            <br />
            <label>Plato Fuerte</label>
            <select name="cmbPlatoFuerte">
              <?php
                echo arrayToSelect(obtenerPlatosFuertes(), "descripcion","codigo","");
              ?>
            </select>
            <br />
            <label>Refresco</label>
            <select name="cmbRefresco"></select>
            <br />
            <label>Postre</label>
            <select name="cmbPostre"></select>
            <br />
        </fieldset>
        <fieldset>
          <label>Forma de Pago</label>
          <select name="cmbFormaPago"></select>
        </fieldset>
        <fieldset>
          <input type="submit" name="btnOrdenar" value="Ordenar" />
          &nbsp;
          <input type="reset" name="btnLimpiar" value="Cancelar"
        </fieldset>
     </form>
  </body>
</html>
