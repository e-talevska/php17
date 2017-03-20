<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th>Distance</th>
		<th>Cost</th>
	</tr>
<?php 
$distance = 0;
$cost = '';
	while($distance <= 250){
		$cost = $distance / 10;
		echo "<td>$distance</td>" . "<td>$cost</td>";
		echo "<tr></tr>";
		$distance+=50;

	}

?>
</table>
</body>
</html>