<?php
function getPrice($name)
{
	$books = array(
		'abc'=>100,
		'xyz'=>200
	);
	
	$price = array_key_exists($name,$books) ? $books[$name] : '';
	
	return $price;
}
?>