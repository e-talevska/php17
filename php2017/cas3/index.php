<!DOCTYPE html>
<html>
<head>
<meta charset="Utf-8">
	<title>Functions</title>
</head>
<body>
<?php 
	
	 function cel($x){
	 	$var = ($x * 1.8) + 32;
	 	return $var;
	 }
	echo cel(1);
	echo "<br>";
	function far($x){
		$var = (5/9) * ($x - 32);
		return $var;
	}
	echo far(1);

?>
</body>
</html>
