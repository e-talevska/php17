<!DOCTYPE html>
<html>
<head>
	<title></title>
</head> 
<body>
<?php 


$niza1 = [2, 4, 5];
$niza2 = ["sedc", "php", "2017"];
var_dump($niza1 + $niza2);
var_dump(array_merge($niza1,$niza2));



$praznaniza = [];
$niza = [2, 5, 6, 10, 41, 24, 32, 9, 16, 19];

foreach ($niza as $key => $value) {
	
	if ($value > 20) {
		array_push($praznaniza, $value);
	}
	
	}
var_dump($praznaniza);

 ?>

</body>
</html>