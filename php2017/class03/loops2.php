<?php  function brejk($a, $b) {
	return $a + $b;
}
$x = brejk(1,2);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$x = 1; 
	while ( $x <= 20){
		if ($x%2) {
			echo $x." ";
			$x++;
		} else {
			echo $x."<br>";
			$x++;
		}
			}

 ?>

</body>
</html>