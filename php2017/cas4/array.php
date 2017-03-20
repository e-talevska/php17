<?php

$niza1 = [2, 5, 6, 10, 41, 24, 32, 9, 16, 19];
$niza2 = [];

for($i=0; $i<count($niza1); $i++){
	if($niza1[$i] > 20){
		array_push($niza2, $niza1[$i]);
		//$niza2[] = $niza1[$i];
	}

}
	var_dump($niza2);
?>