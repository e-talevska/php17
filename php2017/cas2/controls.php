<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php 
		date_default_timezone_set('Europe/Skopje');
		echo date('Y-m-d H:i:s');
		if(date('H') >= 19){
			echo "<h3>Dobra vecer</h3>";
		}
		else if (date('H') >= 7 && date('H') < 11 ) {
			echo "<h3>Dobro Utro</h3>";
		}
		else{
			echo "<h1>Dobar den</h1>";
		}
	 ?>

</body>
</html><?php  ?>