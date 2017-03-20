<?php 
	$info = [
		'firstName' => 'John',
		'lastName' => 'Doe',
		'yearOfBirth' => 1980,
		'occupation' => 'PHP Developer'
	];

	$keysArray = array_keys($info);
	$valuesArray = array_values($info);

	//var_dump($info, $keysArray, $valuesArray);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<tr>
			<?php foreach($keysArray as $header){
				echo "<th>$header</th>";
			} ?>
		</tr>
		<tr>
			<?php foreach($valuesArray as $value){
				echo "<td>$value</td>";
				}?>
		</tr>
	</table>

</body>
</html>