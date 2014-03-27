<?php
//Una funcion
require_once ('class.php');

ini_set("soap.wsdl_cache_enabled", "0");//ini_set modificación en tiempo de ejecución de opción PHP

//Cargo archivo WSDL con la estructura XML y la funcion cargada.
$server = new SoapServer("inventory.wsdl");

//Cargo la clase
$server->setClass("Usuarios");

//Cierro y finaliso servicio
$server->handle();
?>