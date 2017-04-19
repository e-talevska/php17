<?php
	function name($ime, $lastname, $year){
		$date = date("H");
		if($date > 6){
			echo "Good afternoon! My name is: $ime $lastname, I am born in year $year";
		}
		else{
			echo "Hello! My name is: $ime $lastname, I am born in year year";
		}
	}

	$name = "Mitko";
	$prezime = "Janeski";
	$year = 1900;

	name($name, $prezime, $year);

	function test($var1, $var2, $var3 = 0){
		if($var3){
			echo "$var1 $var2";
		}
		else{
			echo "$var2 $var1";
		}
	}

	test("Mitko", "Janeski");

	$temperature = 11;

	function celsius($number){
		return ($number * 1.8) + 32;
	}

	function convert($broj){
		return (5/9) * ($broj-32);
	}
	
	$celsius = celsius($temperature);
	$fah = convert($celsius);

	echo $celsius . " " . $fah;

	function inc(&$var){
		$var++;
		echo "var: $var";
	}

	$a = 4;
	inc($a);

	echo "a: $a <br>";

	function bb(&$str){
		$str = strtolower($str);
		$str = ucfirst($str);
		ucfirst(strtolower($str));
	}

	$title = "HeLoL SEQW S DWdrewr";

	bb($title);

	echo $title;
?>