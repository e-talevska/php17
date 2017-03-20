<?php
	
	function inc (&$var){

		$var++;
		echo "Var: $var. <br>";

	}

	$a = 4;
	inc($a);
	echo "a: $a";


	function beautify(&$str){

		$str = ucwords(strtolower($str));
	}
	$title = "SeDc Php MySqL";
	beautify($title);
	echo "<br>";
	echo $title;
?>