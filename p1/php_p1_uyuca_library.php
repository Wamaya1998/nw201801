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

  function obtenerRefrescos(){
    $refrescos = array();
    // Un registro
    $refrescos[] = array(
      "codigo" =>"R01",
      "descripcion" => "Sodas",
      "precio" => 40.00,
      "iva" => 0.15,
    );

    $refrescos[] = array(
      "codigo" =>"R02",
      "descripcion" => "Naturales",
      "precio" => 40.00,
      "iva" => 0.15,
    );

    $refrescos[] = array(
      "codigo" =>"R03",
      "descripcion" => "B Nacionales",
      "precio" => 80.00,
      "iva" => 0.18,
    );

    $refrescos[] = array(
      "codigo" =>"R04",
      "descripcion" => "B Internacionales",
      "precio" => 90.00,
      "iva" => 0.18,
    );
    return $refrescos;
  }


  function obtenerPostres(){
    $postres = array();
    // Un registro
    $postres[] = array(
      "codigo" =>"P01",
      "descripcion" => "Rosquilla En Miel",
      "precio" => 40.00,
      "iva" => 0.15,
    );

    $postres[] = array(
      "codigo" =>"P02",
      "descripcion" => "Chilate de Maiz Blanco",
      "precio" => 50.00,
      "iva" => 0.15,
    );

    $postres[] = array(
      "codigo" =>"P03",
      "descripcion" => "Coyol en Miel",
      "precio" => 80.00,
      "iva" => 0.15,
    );

    $postres[] = array(
      "codigo" =>"P04",
      "descripcion" => "Guineo en leche azucarada",
      "precio" => 90.00,
      "iva" => 0.15,
    );
    return $postres;
  }

  function obtenerFormaPago(){
    return array(
      array("codigo"=>"TC","dsc"=>"Tarjeta de Crédito"),
      array("codigo"=>"EF","dsc"=>"Efectivo"),
      array("codigo"=>"CH","dsc"=>"Cheque"),
      array("codigo"=>"LC","dsc"=>"A lavar Platos")
    );
  }

  function arrayToSelect($arreglo, $columnaDescripcion, $columnaCodigo,$selectedValue){
    $tmpHtmlStr = "";
    foreach($arreglo as $item){
      $isSelected = ($item[$columnaCodigo] == $selectedValue)? "selected" : "" ;
       $tmpHtmlStr .= '<option value="'.$item[$columnaCodigo].'" '.$isSelected.'>'.$item[$columnaDescripcion].'</option>';
    }
    return $tmpHtmlStr;
  }

  function obtenerRegistroDe($arreglo, $columnaCodigo,$valorAComparar){
    $registro= array();
    foreach($arreglo as $item){
      if($item[$columnaCodigo] == $valorAComparar){
        $registro = $item;
        return $registro;
      }
    }
    return $registro;
  }

?>
