<?php 

	$niza = [5, 9, 53, 165];

	foreach($niza as $number){
		echo $number . "<br>";
	}

	// $sum = 0;
	// for($i = 0;$i < count($niza); $i++){
	// 	$sumgodini += $godini[$i];
	// }

	$city = [
		[
			"name" => "Jon",
			"lastName" => "Doe",
			"age" => 30
		],
		[
			"name" => "Jane",
			"lastName" => "Doe",
			"age" => 36
		],
		[
			"name" => "Goce",
			"lastName" => "Doe",
			"age" => 26
		]
	];

	for($i = 0; $i < count($city); $i++){
		foreach($city[$i] as $key => $value){
			echo "$key: $value <br>";
		}
	}

?>