<?php
  session_start();
  $ordenes = array();
  if(isset($_SESSION["todasLasOrdenes"])){
    $ordenes = $_SESSION["todasLasOrdenes"];
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de Ordenes Guardadas</title>
    <style>
      .orden{
        box-sizing: border-box;
        -mox-box-sizing:border-box;
        box-shadow: 0px 2px 6px #000;
        float:left;
        width:45vw;
        padding:1em;
        margin-right:21px;
      }
      .right{
        text-align: right;
      }
    </style>
  </head>
  <body>
    <h1>Listado de Ordenes Guardads</h1>
    <?php
      foreach($ordenes as $orden){
    ?>
    <div class="orden">
      <table>
        <tr>
          <th>Cliente</th>
          <td colspan="2"> <?php echo $orden["cliente"]; ?> </td>
        </tr>
        <tr>
          <th>Correo</th>
          <td colspan="2"> <?php echo $orden["correo"]; ?> </td>
        </tr>
        <tr>
          <th>Entrada</th>
          <td><?php echo $orden["entrada"]["codigo"] . ' - ' .$orden["entrada"]["descripcion"]; ?> </td>
          <td class="right"><?php echo $orden["entrada"]["precio"]; ?></td>
        </tr>
        <tr>
          <th>Plato Fuerte</th>
          <td><?php echo $orden["platofuerte"]["codigo"] . ' - ' .$orden["platofuerte"]["descripcion"]; ?> </td>
          <td class="right" ><?php echo $orden["platofuerte"]["precio"]; ?></td>
        </tr>
        <tr>
          <th>Refresco</th>
          <td><?php echo $orden["refresco"]["codigo"] . ' - ' .$orden["refresco"]["descripcion"]; ?> </td>
          <td class="right" ><?php echo $orden["refresco"]["precio"]; ?></td>
        </tr>
        <tr>
          <th>Postre</th>
          <td><?php echo $orden["postre"]["codigo"] . ' - ' .$orden["postre"]["descripcion"]; ?> </td>
          <td class="right" ><?php echo $orden["postre"]["precio"] ;?></td>
        </tr>
        <tr>
          <th>Subtotal</th>
          <td class="right" colspan="2"><?php echo $orden["subtotal"]; ?></td>
        </tr>
        <tr>
          <th>Impuesto</th>
          <td class="right" colspan="2"><?php echo $orden["iva"]; ?></td>
        </tr>
        <tr>
          <th>Total</th>
          <td class="right" colspan="2"> <?php echo $orden["total"]; ?> </td>
        </tr>
        <tr>
          <th>Forma de Pago</th>
          <td colspan="2"> <?php echo $orden["formapago"]["dsc"]; ?> </td>
        </tr>
      </table>
    </div>
  <?php
    } //end foreach
  ?>
  </body>
</html>
