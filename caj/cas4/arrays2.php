<?php 
	
	$numbers = array(1, 23, 5435, 6574);
	$broj = array(234, 54332, 65456);

	$sum = array_merge($numbers, $broj);
	var_dump($sum);

	$city = array(2, 5, 6, 10, 41, 24, 32, 9);
	$state = array();
	foreach($city as $value){
		if($value > 20){
			array_push($state, $value);
		}
	}

	for($i = 0; $i < count($city); $i++){
		if($city[$i]){
			array_push($state, $city[$i]);
		}
	}
	var_dump($state);
?>