<?php

	function pecati ($msg) {
		echo $msg;
	}

	pecati("hello");


	function inc(&$var) {
		echo "<br>";
		$var++;
		echo "var: $var . <br>";
	}

	$a = 4;
	inc ($a);
	echo "a: $a";

	function beautify(&$str) {
		echo "<br>";
		$str = ucwords(strtolower($str));
	}

$title = "SeDc PHp MySql";
beautify($title);

echo $title;

?>



