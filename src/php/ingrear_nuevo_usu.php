<?php
  $inc = include("config.php");
  // include("config.php");

  function _insert($tabla, $columnas, $datos){
    $sql = "INSERT INTO ".$tabla."(".$columnas.") VALUES ('".$datos."')";
    $res = mysqli_query($conn, $sql);
  }

  function _select($tabla, $columnas){
    $sql = "SELECT $columnas FROM $tabla";
    $res = mysqli_query($conn, $sql);
    echo $res;
  }

  // $nombre = $_POST['nombre'];
  $nombre = "Leo";

  if(!$inc){
    echo "No se pudo conectar :=";
  }else{
    // _insert('ercik', 'nombre, apellido_p', '"Luis", "Pillo"');
    $sql = "INSERT INTO erick (nombre, apellido_p) VALUES ('Hola')";
    $res = mysqli_query($conn, $sql);
    echo "Se guardo ".$nombre;
  }
?>