<?php
include_once 'lib/nusoap.php';
$client = new nusoap_client("http://localhost/soap/server.php?wsdl");
$employees = $client->call("getEmployees", array());
$emparr = explode(",",$employees);
$count = 1;
?>
<!doctype html>
<html>
	<head>
		<title>List of employees</title>
	</head>
	<body>
		<table border="1" align="center">
			<tr>
				<td colspan="5" align="center"><span style="color:green;font-weight:bold;">List of employees from soap web service</span></td>
			</tr>
			<tr>
				<th><b>Serial No.</b></th>
				<th><b>Name</b></th>
				<th><b>Email Address</b></th>
				<th><b>Phone</b></th>
				<th><b>Salary</b></th>
			</tr>
			<?php
			if(!empty($emparr))
			{
				foreach($emparr as $emp)
				{
					$e = explode("#", $emp);
				?>
				<tr>
					<td><?php echo $count; ?></td>
					<td><?php echo $e[1]; ?></td>
					<td><?php echo $e[2]; ?></td>
					<td><?php echo $e[3]; ?></td>
					<td><?php echo $e[4]; ?></td>
				</tr>
				<?php
					$count++;
				}
			}
			?>
		</table>
	</body>
</html>