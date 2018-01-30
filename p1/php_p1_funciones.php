<?php
  // siempre acordarse de las etiquetas
  // de apertura y cierre de php.

  function sumar($a, $b){
    //las funciones son muy sencillas
    // observen que los parametros
    // siguen las mismas reglas de empezar
    // con el simbolo de $
    return $a + $b;
    //con return nuestra funcion retorna un
    //valor.
  }
  function restar($a,$b){
    return $a-$b;
  }
  function multiplicar($a,$b){
    return $a * $b;
  }
  function dividir($a,$b){
    //aqui hay que hacer una validación.
    // $b no puede ser igual a 0;
    if($b == 0) return "No se puede dividir por 0";
    return $a/$b;
    // observaron que el if no tiene { }?????
    // es correcto esto?  Si   No
    // cuando la expresión de un if es UNA sola expresión
    // no se ocupan los {}
    // el return se sale de la ejecución si
    // $b es igual a 0 se devuelve el mensaje y
    // se sale de la funcion por el return
    // por eso no ocupa el else
    // si $b no es igual a 0 la ejecución
    // de la funcion sigue normal y la siguente expresión
    // es la division (se reducen unos cuantos ciclos de cpu)
   }


?>
