<?php

	function zbir ($a, $b) {

		echo $a + $b;

		echo "<br>";
	}

	zbir (3,4);
	zbir (6,7);
	zbir (22,23);
	
	$a = 2;
	$b = 3;
	zbir ($a, $b); //zbir (2,3) - isto kako ova da e definirano

	$x = 5;
	$y = 6;
	zbir ($x, $y);

?>


<?php

function one ($ime, $prezime) {

	$greeting = '';

	if (date('H') > 17) {

		$greeting = "good evening";
	} else
		$greeting = "good afternoon";
	echo $greeting;
	echo "<br>";
	echo "Hello! Moeto ime e $ime, moeto prezime e $prezime";

}

one ("petar", "petkovski");

?>



<?php

	function grad ($prv, $vtor, $tret=0) {

		echo "<br>";

		if ($tret == 0) {
			echo $prv, $vtor;
		}

		else {

		echo $vtor, $prv;

		}

}

grad ("Skopje", "Kumanovo");


?>

<?php

	function convert1($celsius) {
		$formula1 = $celsius * 1.8 + 32;
		echo $formula1;

	}

convert1(18);

	//function convert2($fahrenheit) {
		//$formula2 = (5/9) * $fahrenheit - 32);
		//echo $formula2;

//convert2(3);

	//}


?>


