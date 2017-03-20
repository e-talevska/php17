<?php 
function zbir($a, $b) {
	return $a + $b;
}
$x = zbir(3,4)
;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	while($x < 10) {
			echo "<p> $x <?p>";
			$x++;
	}
echo "<p>After while<?p>";
 ?>
</body>
</html>