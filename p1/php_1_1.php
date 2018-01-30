<?php

// Comentario en PHP
/* Comentarios en varias
lineas */

// int c = 0;
$c = 0;
$edadDeCaducidad = 15; // Camel Case o camello

$intEdad = 33;
$strEdad = "Mayor de Edad"; // Hungarian , Hungaro

// numeric string array object  boolean
if($intEdad >= 210){
  echo "A ver si llego!";
}

if(expression){

}else{

}
if(expression){

}elseif(expresion){

}else{

}

$bolResultado = (expresion)?true:false;

if(expresion){
  $bolResultado = true;
}else{
  $bolResultado = false;
}

switch ($unaVariable) {
  case 'value':
    # code...
    break;

  default:
    # code...
    break;
}

/*
Operaciones Logicas
>=
<=
==   1=="1"  true
 === 1==="1" false

! negacion
!=
!==

&&  and
|| or

operaciones aritmeticas
+ //sumar
- //restar
/ // dividir
* // multiplicar
** // exponencial
+= // acumula valor de derecha a izquierda
-= // decrementa valor de derecha a izquierda
++ // contador
-- // decrementa
*= // acumula la multiplicacion de derecha con izquierda

.  // concatenar
.= // concatena derecha con izquierda

*/

for($i = 0;$i<=100; $i++){
  //hacer algo en el ciclo
}
$i = 0;
while($i<100){

  $i++;
}

$i = 100;
do{

  $i--;
}while($i>0)

function nombreDeFuncion($param1, $param2){
  return $param1 . " mas " . $param2 . " es igual a" . ($param1 + $param2);
}

echo nombreDeFuncion(1,5); // 6




?>
