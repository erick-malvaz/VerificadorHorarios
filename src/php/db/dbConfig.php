<?php
class Dbconfig {
  protected $serverName;
  protected $userName;
  protected $passCode;
  protected $dbName;

  function __construct(){
    $this -> serverName = 'localhost';
    $this -> dbName = 'registro-entrada-comida-salida';
    $this -> userName = 'root';
    $this -> passCode = '@LeH3cTec1';
  }
}
?>