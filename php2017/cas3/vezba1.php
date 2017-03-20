<?php  
function info($ime ,$prezime ,$god ,$h){
	echo $ime . " " . $prezime . " " . $god;
	if($h >= 19 && $h <= 24){
		echo " " . "Dobra vecer";
	} else {
		echo " " . "Dobar den";
	};

}
$saat = date('H');
$ime = "Trajan";
$prezime = "Stevkovksi";
$god = 2000;

info($ime ,$prezime ,$god ,$saat);


?>