<!DOCTYPE html>
<html>
	<head>
		<title>Learning PHP</title>
	</head>
	<body>
		<p>Hello</p>
		<p><?php echo "Hello everyone"; ?></p>
	<?php

		$ime = "Daniel";
		
		echo $ime;
		$ime = "Janeski";

		echo "<br>";

		echo $ime;
		$ime = 24;

		echo "<br>";
		echo $ime;

		echo "<br>";
		echo 'It\'s realy nice to be a programmer';

		$int = 1;
		$float = 1.3;
		$boolean = true;

		echo "<br>";

		echo $int;
		echo "<br>";
		echo $float;
		echo "<br>";
		echo $boolean;
		echo "<br>";
	?>

	<?php 
		define('PI', 'localhost');
		echo PI;
	?>
	</body>
</html>