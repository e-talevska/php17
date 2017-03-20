<?php
	$godini = [23,34,45,18];
	echo "<pre>";
	print_r($godini);
	echo "</pre>";

	echo $godini[1] . "<br>";

	for ($i = 0; $i < count($godini); $i++) {
		echo $godini[$i] . " ";
	}

	echo "<br>";

	$godini[4] = 20;

	for ($i = 0; $i < count($godini); $i++) {
		echo $godini[$i] . " ";
	}

	$godini [2] = 100;
	echo "<pre>";
	print_r($godini);
	echo "</pre>";


	$sumaGodini = 0;
	for ($i = 0; $i < count($godini); $i++) {
		$sumaGodini += $godini[$i];
	}

	echo ($sumaGodini/$i);

	$info = [
			"name" => "emilija", 
			"lastname" =>"talevska", 
			"position" => "PHP developer"];
	echo "<br>";
	echo $info ["name"];
	echo "<br>";
	echo "<br>";

	$info["age"] = 50; //add
	$info["name"] = "Emi"; //modify

	foreach ($info as $value) {
		echo $value . "<br>";
	}

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
		],
	];

	for ($i = 0; $i < count($people); $i++) {
		echo "people" .($i+1). ": ";
		foreach ($people[$i] as $key => $value) {
			echo "$key: $value <br>";
		}
	}

	echo "<br>";

	foreach ($people as $i => $person) {
		echo "people" .($i+1). ": ";
	}


	$numbers = [1,46,89,3543];
	echo "<pre>";
	print_r($numbers);
	echo "</pre>";

	unset ($numbers[0]);
	echo "<pre>";
	print_r($numbers);
	echo "</pre>";


?>