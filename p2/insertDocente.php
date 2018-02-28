<?php
$host = "localhost";
$user = "nwuser";
$pswd = "nwuser.2018";
$db = "nw201801";

$conn = new mysqli($host, $user, $pswd, $db);

if($conn->errno){
  die($conn->error);
}

$insertSQL = "INSERT INTO `docentes` (`docenteCod`, `docenteNom`,
  `docenteApe`, `gradoAcaCod`, `docenteEmail`, `docenteTel1`,
  `docenteTel2`, `docenteEst`)
  VALUES (NULL, '%s', '%s', %d, '%s', '%s', '%s', '%s');";

  $nombre = "Laureano";
  $apellido = "Lujan";
  $grado = 1;
  $correo = "lujanhn@unicah.edu";
  $tel1 = "+5049999999";
  $tel2 = "";
  $Est = "ACT";

  $insertSQL = sprintf($insertSQL, $nombre
                                  , $apellido
                                  , $grado
                                  , $correo
                                  , $tel1
                                  , $tel2
                                  , $Est
                       );

    if( $conn->query($insertSQL) ){
      echo $conn->affected_rows;
    }
?>
