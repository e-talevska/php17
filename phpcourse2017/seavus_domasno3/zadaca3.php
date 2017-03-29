<?php
	function tripCost ($distance, $fuel, $price) {
		/*
		$l = ($distance * $fuel) / 100;
		$cost = $l * $price;
		return number_format ($cost, 2);
		*/
		return number_format (($distance * $fuel) / 100 * $price, 2);
	}
	
	$trip_cost = tripCost (100, 10, 71);
	
	
	echo "Cena na pat e $trip_cost";
	
?>