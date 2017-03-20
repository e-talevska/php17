<?php
	
	$godini = [23, 34, 24, 18, 45];
	var_dump($godini);
	print_r($godini);
	echo "<br>". $godini [2]. "<br>";

	for ($i = 0; $i < count($godini); $i++){

		echo $godini [$i] . "<br>";
	}

	$godini[] = 20;
	for ($i = 0; $i < count($godini); $i++){

		echo "<br>".$godini [$i] . "<br>";
	}
	var_dump($godini);

	$godini [2] = 100;
	array_push($godini, 30, 12, 34);
	var_dump($godini);



	$sumaG = 0;
	for ($i = 0; $i < count($godini); $i++){

		$sumaG += $godini[$i];
		
	}
	echo "Prosek e ".$sumaG / $i;

	$info = [
		"name" => "Marija", 
		"lastname" =>"Zdravkova",
		"profesion" => "PHP Developer"
		];

		echo $info["name"];
		$info ["age"] = 27;
		$info ["name"] = "Maca";
		foreach($info as $key => $value){
			echo "<br>". $value;

		}
		echo "<br>";
		$people = [
			[
				"name " => "john",
				"lastname " => "doe",
				"age " => 20

			],

			[
				"name " => "Jane",
				"lastname " => "doe",
				"age " => 30

			],

			[
				"name " => "Mike",
				"lastname " => "doe",
				"age " => 35

			]
		];

		for ($i = 0; $i < count ($people); $i++){

			echo "People". ($i+1).":";
			foreach($people[$i] as $key => $value){
				echo "$key: $value <br>";

			}
			echo "<br>";
		}

		foreach($people as $i => $person){
			echo "People". ($i+1).":";
			foreach($person as $key => $value){
				echo "$key: $value <br>";

			}


		}

		$num = [1,2,3];
		print_r($num);
		echo "<br>";
		unset($num[1]);
		print_r($num);

		
		
?>