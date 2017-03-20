<?php
$niza1=[2,3,5,10,41,9,16,32];
$niza2=[];
for ($i=0; $i < count($niza1) ; $i++) { 
	if($niza1[$i]>20){
		array_push($niza2, $niza1[$i]);
	}
	
}
var_dump($niza1);
var_dump($niza2);
?>