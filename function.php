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
	$str = '';
	
	$stmt = $pdo->query('SELECT * FROM employees ORDER BY id DESC');
	
	while ($row = $stmt->fetch())
	{
		$str = $row['id'].'#'.$row['emp_name'].'#'.$row['emp_email'].'#'.$row['emp_phone'].'#'.$row['emp_salary'];
		array_push($employees,$str);
		$str='';
	}
	
	return implode(",",$employees);
}
?>