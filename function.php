<?php
include_once 'dbconnect.php';
function getPrice($name)
{
	$books = array(
		'abc'=>100,
		'xyz'=>200
	);
	
	$price = array_key_exists($name,$books) ? $books[$name] : '';
	
	return $price;
}

function getEmployees()
{
	global $pdo;
	$employees = array();
	
	$stmt = $pdo->query('SELECT * FROM employees ORDER BY id DESC');
	
	while ($row = $stmt->fetch())
	{
		array_push($employees,$row);
	}
	
	return json_encode($employees);
}
?>