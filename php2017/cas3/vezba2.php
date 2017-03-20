<?php 
function flag($ime , $prezime, $red = 0){
	if($red == 1){
		echo $prezime . " " . $ime;
	} else {
		echo $ime . " " . $prezime;
	}
}
$ime = "Trajan";
$prezime = "Stevkovski";
$red = 1;

flag($ime, $prezime ,$red);
echo "<br>";
flag($ime ,$prezime)

 ?>