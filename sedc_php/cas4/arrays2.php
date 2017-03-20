<?php

	$niza1 = [2, 4, 5];
	$niza2 = ["sedc", "php", "2017"];
	var_dump($niza1 + $niza2);
	var_dump(array_merge($niza1,$niza2));




	$niza = [2, 5, 6, 10, 41, 24, 32, 9, 16, 19];
	$novaNiza = [];
	for($i = 0; $i < count($niza); $i++){

		if ($niza[$i] > 20){
			array_push($novaNiza, $niza[$i]);
			//$novaNiza[] = $niza1[$i];

		}
		
}
	var_dump($novaNiza);
	
?>