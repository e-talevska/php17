<?php
	
	$sum = 0;
	$multi = 1;
	$concat = "";
	for($i = 101; $i <= 150;$i++){
		$sum += pow($i, 2);
		$multi *= pow($i,2);
		$concat .= pow($i, 2);
	}

	echo "Sumata e $sum";

	for($x = 50; $x <= 100; $x = $x + 2){
		echo $x . "<br>";
	}

	echo "<hr>";

	for($i = 1;$i <= 300; $i++){
		if($i % 3 == 0){
			echo $i . "<br>";
		}
	}

	echo "<hr>";
	$i = 0;
	while($i < 300){
		$i++;
		if($i % 3 == 0){
			continue;
		}
		echo $i . "<br>";
	}

	echo "<br>";

	
	while(true){
		$number = rand(50, 100);
		if($number >= 90 && $number <= 100){
			echo "fuk, breaked";
			break;
		}
		echo $number;
	}
?>