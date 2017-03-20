<?php 
$info	=	[ 
	'firstName' => 'John',
	'lastName' => 'Doe',
	'yearOfBirth' => '1980',
	'occupation' => 'PHP Developer'
	];
$keysArray = array_keys($info);
$valuesArray = array_values($info);

 // var_dump($info, $keysArray, $valuesArray);

 ?>

 <table>
 	<tr>
 	<?php foreach ($keysArray as $header) {
 		?>
 		echo "<th>$header</th>";} 
 	</tr>
 </table>