<?php
/* para poder incluir o importar
las funciones de un script en este
php nos ofrece cuatro formas:
include
include_once
require
require_once
la que siempres utilizaremos por su capacidad
de validar un script correcto sin errores
antes de ser utilizada es require_once
y el once agregado lo que hace es evitar
tratar de requerir el mismo script dos veces
generando conflictos de firmas duplicadas
esencial cuando trabajemos con base de datos.
si tuviesemos el archivo en una carpeta
se incluye con rutas relativas

si existiera la caperta lib y el archivo
alojado en esa carpeta.
*/

require_once("php_p1_funciones.php");

//Siempre es bueno inicializar las variables
$resultado = "";
$operando1 = 0;
$operando2 = 0;
// vamos a realizar cuatro estructuras de control
// para determinar que acción debemos tomar
// el formulario en html solo envia el submit
// que se le ha realizado el click por tanto
// los demas botones no existiran en el arreglo
// post si no fueron presionados.
if(isset($_POST["btnAdd"])){
  // vamos a obtener las variables del formulario
  $operando1 = floatval($_POST["operando1"]);
  // la llave del arreglo será siempre el valor de
  // name del input
  $operando2 = floatval($_POST["operando2"]);
  // ahora tenemos un problema de tipo de datos
  // todo lo que viene por post es texto
  // aunque el input sea de tipo number
  // todo viene como texto pero eso lo podemos
  // corregir con una funcion que trae php
  // floatval convierte el texto en valor numerico con presicion.
  // es decir flotante
  // existe tambien intval que solo devuelve enteros.
  $resultado = "La suma de " . $operando1 ." y ". $operando2 . " es igual a " .  sumar($operando1, $operando2);

}
if(isset($_POST["btnSub"])){

}
if(isset($_POST["btnMul"])){

}
if(isset($_POST["btnDiv"])){

}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculadora Simple </title>
  </head>
  <body>
      <form action="php_p1_calculadora.php" method="post">
        <label>Operando 1</label>
        <input type="text" value="<?php echo $operando1; ?>"
          placeholder="Operando 1"
          name="operando1" id="operando1"/><br />
        <label>Operando 2</label>
        <input type="text" value="<?php echo $operando2; ?>"
          placeholder="Operando 2"
          name="operando2" id="operando2"/><br />
          <!-- Observen que los cuatro submit tienen nombre
          diferente este es esencial para determinar que
          función debemos llamar.
         -->
          <input type="submit" value="Sumar" name="btnAdd"  />
          <input type="submit" value="Restar" name="btnSub"  />
          <input type="submit" value="Multiplicar" name="btnMul"  />
          <input type="submit" value="Dividir" name="btnDiv"  />
      </form>
      <div>
        <?php echo $resultado; ?>
      </div>
  </body>

</html>
