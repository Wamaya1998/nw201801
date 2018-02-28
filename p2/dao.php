<?php
$host = "localhost";
$user = "nwuser";
$pswd = "nwuser.2018";
$db = "nw201801";

$conn = new mysqli($host, $user, $pswd, $db);

if($conn->errno){
  die($conn->error);
}

function obtenerRegistros($sqlstr){
  global $conn;
  $resultados = array();
  $cursor = $conn->query($sqlstr);
  foreach($cursor as $registro){
    $resultados[]= $registro;
  }
  return $resultados;
}

function obtenerUnRegistro($sqlstr){
  global $conn;
  $resultados = array();
  $cursor = $conn->query($sqlstr);
  foreach($cursor as $registro){
    return $registro;
  }
  return $resultados;
}



function ejecuteNonQuery($sqlstr){
  global $conn;
  if($conn->query($sqlstr)){
    return $conn->affected_rows;
  }
  return 0;
}

function getLastInsertID(){
  global $conn;
  return $conn->insert_id;
}
?>
