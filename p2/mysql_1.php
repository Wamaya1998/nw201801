<?php
  $host = "127.0.0.1";
  $user = "nwuser";
  $pswd = "nwuser.2018";
  $database= "nw201801";

  $conn = new mysqli($host,$user,$pswd,$database);

  if($conn->errno){
    die($conn->error);
  }

  $sqlstr = "select * from version;";

  $cursor = $conn->query($sqlstr);
  $versionData = array();
  foreach($cursor as $registro){
    $versionData[] = $registro;
  }

  print_r($versionData);
  echo '<br />';
  echo $versionData[0]["vrsval"];
?>
