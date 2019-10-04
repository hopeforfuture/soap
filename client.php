<?php
include_once 'lib/nusoap.php';
$client = new nusoap_client("http://localhost/soap/server.php?wsdl");
$book_name = "xyz";
$price = $client->call("getPrice", array("name"=>$book_name));
if(empty($price))
{
	echo 'Book record not found.';
}
else
{
	echo 'Price is: <b>'.$price.'</b>';
}
?>