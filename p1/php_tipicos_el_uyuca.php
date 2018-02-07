<?php
  session_start();
  require_once("php_p1_uyuca_library.php");


    //Inicializar Variables
    $txtCliente = "";
    $txtEmail = "";
    $cmbEntrada = "";
    $cmbPlatoFuerte = "";
    $cmbRefresco = "";
    $cmbPostre = "";
    $cmbFormaPago = "";

    if(isset($_POST["btnLimpiarSesion"])){
      $_SESSION["todasLasOrdenes"] = array();
    }

    if(isset($_POST["btnOrdenar"])){
      $txtCliente = $_POST["txtCliente"];
      $txtEmail = $_POST["txtEmail"];
      $cmbEntrada = $_POST["cmbEntrada"];
      $cmbPlatoFuerte = $_POST["cmbPlatoFuerte"];
      $cmbRefresco = $_POST["cmbRefresco"];
      $cmbPostre = $_POST["cmbPostre"];
      $cmbFormaPago = $_POST["cmbFormaPago"];

      $ordenDeCompra = array(
          "cliente" => $txtCliente,
          "correo"=>$txtEmail,
          "entrada" => obtenerRegistroDe(obtenerEntradas(),"codigo", $cmbEntrada),
          "platofuerte" => obtenerRegistroDe(obtenerPlatosFuertes(),"codigo", $cmbPlatoFuerte),
          "refresco" => obtenerRegistroDe(obtenerRefrescos(),"codigo", $cmbRefresco),
          "postre" => obtenerRegistroDe(obtenerPostres(),"codigo", $cmbPostre),
          "formapago" => obtenerRegistroDe(obtenerFormaPago(),"codigo", $cmbFormaPago)
      );

      $ordenDeCompra["total"] = $ordenDeCompra["entrada"]["precio"] +
                                      $ordenDeCompra["platofuerte"]["precio"] +
                                      $ordenDeCompra["refresco"]["precio"] +
                                      $ordenDeCompra["postre"]["precio"];

        $ordenDeCompra["subtotal"] =  ($ordenDeCompra["entrada"]["precio"] / ($ordenDeCompra["entrada"]["iva"]+1)) +
                                        ($ordenDeCompra["platofuerte"]["precio"] / ($ordenDeCompra["platofuerte"]["iva"]+1))+
                                        ($ordenDeCompra["refresco"]["precio"] / ($ordenDeCompra["refresco"]["iva"]+1))+
                                        ($ordenDeCompra["postre"]["precio"] / ($ordenDeCompra["postre"]["iva"]+1));

        $ordenDeCompra["iva"] = $ordenDeCompra["total"] - $ordenDeCompra["subtotal"];

        $todasLasOrdenes = array();
         if(isset($_SESSION["todasLasOrdenes"])){
           $todasLasOrdenes =$_SESSION["todasLasOrdenes"];
         }
        $todasLasOrdenes[]=$ordenDeCompra;

        $_SESSION["todasLasOrdenes"] = $todasLasOrdenes;
    }
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
            <select name="cmbRefresco">
                <?php
                  echo arrayToSelect(obtenerRefrescos(), "descripcion","codigo","");
                ?>
            </select>
            <br />
            <label>Postre</label>
            <select name="cmbPostre">
              <?php
                echo arrayToSelect(obtenerPostres(), "descripcion","codigo","");
              ?>
            </select>
            <br />
        </fieldset>
        <fieldset>
          <label>Forma de Pago</label>
          <select name="cmbFormaPago">

            <?php
              echo arrayToSelect(obtenerFormaPago(), "dsc","codigo","");
            ?>
          </select>
        </fieldset>
        <fieldset>
          <input type="submit" name="btnOrdenar" value="Ordenar" />
          &nbsp;
          <input type="reset" name="btnLimpiar" value="Cancelar"/>
          <input type="submit" name="btnLimpiarSesion" value="Reiniciar" />
        </fieldset>
     </form>
     <div>
       <?php
        if(isset($_SESSION["todasLasOrdenes"])){
          print_r($_SESSION["todasLasOrdenes"]);
        }
       ?>
     </div>
  </body>
</html>
