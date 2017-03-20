<?php
$niza = [2, 123, 32, 7, 56, 1, 22, 32, 19, 43, 20, 7];
$niza1 = [];
	for($i=0;$i<count($niza);$i++){
		if($niza[$i] > 20){
			array_push($niza1, $niza[$i]);
		}
	}
	for($i=0;$i<count($niza1);$i++){
		echo $niza1[$i] . "<br>";
	}

?>