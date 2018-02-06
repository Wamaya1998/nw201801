<?php

  function obtenerEntradas(){
    $entradas = array();
    // Un registro
    $entradas[] = array(
      "codigo" =>"E01",
      "descripcion" => "Anafre de Frijoles",
      "precio" => 100.00,
      "iva" => 0.15,
    );

    $entradas[] = array(
      "codigo" =>"E02",
      "descripcion" => "Orden de Plantanitos Maduros Fritos",
      "precio" => "120.00",
      "iva" => 0.15,
    );

    $entradas[] = array(
      "codigo" =>"E03",
      "descripcion" => "Orden de Taquitos de Queso",
      "precio" => "80.00",
      "iva" => 0.15,
    );

    $entradas[] = array(
      "codigo" =>"E04",
      "descripcion" => "Chilindrinas de maíz",
      "precio" => "90.00",
      "iva" => 0.15,
    );
    return $entradas;
  }

  function obtenerPlatosFuertes(){
    $platosFuertes = array();
    // Un registro
    $platosFuertes[] = array(
      "codigo" =>"PF1",
      "descripcion" => "Parrillada de Porzo",
      "precio" => 200.00,
      "iva" => 0.15,
    );
    $platosFuertes[] = array(
      "codigo" =>"PF2",
      "descripcion" => "Parrillada de Res",
      "precio" => 200.00,
      "iva" => 0.15,
    );

    $platosFuertes[] = array(
      "codigo" =>"PF3",
      "descripcion" => "Parrillada Todo Terreno",
      "precio" => 400.00,
      "iva" => 0.15,
    );

    $platosFuertes[] = array(
      "codigo" =>"PF4",
      "descripcion" => "Sopa de Frijoles Sipe con Pelleja",
      "precio" => 250.00,
      "iva" => 0.15,
    );

    $platosFuertes[] = array(
      "codigo" =>"PF5",
      "descripcion" => "Tapado Olanchano",
      "precio" => 240.00,
      "iva" => 0.15,
    );

    $platosFuertes[] = array(
      "codigo" =>"PF6",
      "descripcion" => "Ancas de Rana Toro",
      "precio" => 250.00,
      "iva" => 0.15,
    );

    $platosFuertes[] = array(
      "codigo" =>"PF7",
      "descripcion" => "Sopa de Coralia",
      "precio" => 170.00,
      "iva" => 0.15,
    );
    return $platosFuertes;
  }

  function arrayToSelect($arreglo, $columnaDescripcion, $columnaCodigo,$selectedValue){
    $tmpHtmlStr = "";
    foreach($arreglo as $item){
      $isSelected = ($item[$columnaCodigo] == $selectedValue)? "selected" : "" ;
       $tmpHtmlStr .= '<option value="'.$item[$columnaCodigo].'" '.$isSelected.'>'.$item[$columnaDescripcion].'</option>';
    }
    return $tmpHtmlStr;
  }

?>
