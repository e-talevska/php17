<?php 

	$info = [
		'firstName' => 'John',
		'lastName' => 'Doe',
		'yearOfBirth' => 1980,
		'ocupation' => 'engineer'
	];
	$keysArray = array_keys($info);
	$valuesArray = array_values($info);
//	var_dump($info, $keysArray, $valuesArray);

 ?>



 <table>
 	<tr>
 	<?php foreach ($keysArray as $header) {
 		echo "<th> $header </th>";	# code...
 	} ?>
</tr>
<tr>
	<?php foreach ($valuesArray as $value) {
		echo "<td> $value </td>";
		# code...
	} ?>
</tr>

</table>

