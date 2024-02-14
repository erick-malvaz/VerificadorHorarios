<?php

  $inc = include("config.php");

  $nombre = $_POST['nombre'];

  if(!$inc){
    echo "No se pudo conectar :=";
  }else{
    $sql = "INSERT INTO erick VALUES ('$nombre')";
    $res = mysqli_query($conn, $sql);
    echo "Se guardo ".$nombre;
  }
?>