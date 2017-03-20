<?php

	function inc(&$var){// funkcija po referenca
		$var++;
		echo "var:". $var . "<br>";
	}
	$a=4;
	inc($a);
	echo "a: $a <br>";

	function bjuti(&$str){// promenuva bukvi vo prva golema
		$str=ucwords(strtolower($str));
	}
	$t= 'AceVskI clOUD';
	bjuti($t);
	echo $t;
	echo "<br><br>";

	// function zbir($a,$b){
	// 	return $a+$b;
	// }
	// $x=zbir(1,1);
	// while ($x<10) {
	// 	echo $x. "<br>";
	// 	$x++;
	// }

	$c=1;
	while ($c <= 20) {
		if (($c%2)!= 0) {
			echo $c." ";
			$c++;
		}else{
			echo $c."<br>";
			$c++;
		}
	}?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	<table>
	<tr>
		<th>distance</th>
		<th>cost</th>
	</tr>
	<?php
	$i=50;
	while($i<=250){
		$cost=$i/10;
		echo "<tr><th> $i </th><th> $cost </th</tr>";
		$i+=50;
	}
	?>

	</table>
	</body>
	</html>
