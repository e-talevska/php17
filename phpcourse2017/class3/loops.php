<?php
function zbir ($a, $b) {
	return $a + $b;
}

$x = zbir (1,3);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	while ($x < 10) {
		echo "<p>$x</p>";
		$x++;
	}

	echo "<p>After while</p>"
?>




<?php
//class4
//every second number starting from 50 till 100

for ($i = 50; $i <= 100; $i += 2) {
	echo $i . "<br>";
}

?>

<?php
	
	$suma = 0;
	$multi = 1;
	$concat = '';
	for ($i = 101; $i <= 150; $i++) {
		$suma += pow ($i, 2);
		$multi *= pow ($i, 2);
		$concat .= pow ($i, 2);
	}

	echo "<p>Sumata na kvadratite na broevite od 101 do 150 e $suma</p>" . "<br>";
?>

<?php
	for ($i =1; $i <= 300; $i++) {
		if ($i%3 == 0) {
			continue;
		}
	echo $i . ", ";
	}

	$i = 0;
	while ($i < 300) {
		$i++;
		if ($i%3 == 0) {
			continue;
		}
	echo $i . ", ";
	}
?>

<?php
	echo "<br>";
	echo "<br>";
	echo "<br>";
	while(true) {
		$rand = rand(50,100);
		if ($rand >= 90 && $rand <= 100) {
			break;
		}
	
	echo $rand . "<br>";
	}
?>



</body>
</html>