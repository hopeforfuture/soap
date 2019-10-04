<?php
include_once 'lib/nusoap.php';
include_once 'function.php';
$server = new nusoap_server();
$server->configureWSDL('soap', 'urn:soap');
$server->register(
	"getPrice",
	array("name"=>"xsd:string"),
	array("return"=>"xsd:integer")
);

$server->register(
	"getEmployees",
	array(),
	array("return"=>"xsd:string")
);

$post = file_get_contents('php://input');
$server->service($post);
?>