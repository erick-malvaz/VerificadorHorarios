<?php
  include '../headers.php';
  include '../Model/Administrativo.php';

  switch ($_SERVER["REQUEST_METHOD"]){
    case "GET":
      $response['mtd'] = true;
      $estado = 1;

      #$persona = new Persona();
      $administrativo = new Administrativo();
      $response['administrativos'] = array();

      $response['administrativos'] = $administrativo->selectAllAdministrativos();
      break;
    default :
      $response['mtd'] = false;
      break;
  }

  echo json_encode($response);
?>