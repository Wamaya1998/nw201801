<?php
  //arreglos

  // en php solo existen arreglos
  // matrices
  $arrEjemplo = array();
  $arrEjemplo = array("1","2","3","4");
  $arrEjemplo[] = "5";
  $arrEjemplo[] = 12349;
  $arrEjemplo[] = true;
  $arrEjemplo[] = array("a","b","c","d");
  $arrEjemplo["nombre"] = "Orlando J Betancourth";
  $arrEjemplo[] = "Este es otro elemento";
  print_r($arrEjemplo);

// type
echo "<hr/>";

$persona = array();
$persona["nombre"] = "Orlando";
$persona["apellido"] = "Betancourth";
$persona["curso"] = "Negocios Web";
print_r($persona);
echo "<hr/>";
echo $persona["apellido"];

echo "<hr/>";
$personas = array();
/*
-----------------------------------
nombre    | apellido     | curso
----------------------------------
Orlando    | Betancourth  | Negocios Web
---------------------------------------
Orlando     | Betancourth  | Portales Web
-----------------------------------------
*/
$personas[] = $persona;
$persona["curso"] = "Portales Web";
$personas[] = $persona;
print_r($personas);

$ciudades =array();

$ciudad1 = array();
$ciudad1["codigo"] = "TGU";
$ciudad1["nombre"] = "Tegucigalpa";

$ciudades[] = $ciudad1;

$ciudad2 = array();
$ciudad2["codigo"] = "SPS";
$ciudad2["nombre"] = "San Pedro Sula";

$ciudades[] = $ciudad2;

echo "<hr />";
echo "<ul>";
foreach($ciudades as $currentCity){
  echo "<li>";
  echo $currentCity["codigo"] . " - " . $currentCity["nombre"];
  echo "</li>";
}
echo "</ul>";

echo "<hr />";
echo '<select name="citycod" >';
foreach($ciudades as $currentCity){
  echo '<option value="'.$currentCity["codigo"].'">';
  echo $currentCity["codigo"] . " - " . $currentCity["nombre"];
  echo "</option>";
}
echo "</select>";


?>
