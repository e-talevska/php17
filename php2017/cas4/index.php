<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

	$people = [
		[
			"name" => "John",
			"lastname" => "Doe",
			"age" => 20
		],
		[
			"name" => "Jane",
			"lastname" => "Doe",
			"age" => 30
		],
		[
			"name" => "Mike",
			"lastname" => "Doe",
			"age" => 35
		]
	];

		for($i=0; $i<count($people); $i++){
			foreach($people[$i] as $key => $value){
				echo "$key: $value <br>";
			}
		}
			echo "<br>";

	$numbers = [1,46,4,2,12];
	unset($numbers[2]);
	echo "<pre>";
	print_r($numbers);
	echo "</pre>";

 ?>
</body>
</html>