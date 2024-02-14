<?php
$servername = "localhost";
$database = "registro-entrada-comida-salida";
$username = "root";
$password = "@LeH3cTec1";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  echo "Fallo :=";
}
echo "Conexion Exitosa :)";
return $conn;
mysqli_close($conn);
?>