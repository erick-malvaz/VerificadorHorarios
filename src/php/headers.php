<?php
    //header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH');
    header('Access-Control-Allow-Credentials: true');
    header('Content-type: application/json');
    date_default_timezone_set("America/Mexico_City");
?>