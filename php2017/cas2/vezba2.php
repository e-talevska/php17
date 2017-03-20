<?php 
	$fridayCash = 23;
	$result = "";
	if($fridayCash > 50){
		$result = "Mozam da odam vo kino i na vecera.";
	} else if($fridayCash > 30 && $fridayCash <= 49 ) {
		$result = "Mozes samo na vecera.";
	} else if($fridayCash > 15 && $fridayCash <= 29 ){
		$result = "Mozes samo na sladoled";
	} else {
		$result = "Sedi doma" ;
	}
 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Vezba2</title>
</head>
<body>
	<h1><?php echo $result ?></h1>
</body>
</html>