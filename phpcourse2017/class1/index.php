<?php // phpinfo (); ?>
<!DOCTYPE html>
<html>
<head>
	<title>learning php</title>
</head>
<body>
	<p>Hello</p>
	<p>
		<?php 
			echo "hello everyone!"; 
		?>
	</p>
	<p>
		<?php 
			echo "hello class1!"; 
		?>
	</p>
	<p>
		<?php 
		 	/*
				echo "hello class2!"; 
	  			echo "<br>";
				echo "hello class3!"; 
			*/
				$ime = "ivica"; //string
				echo $ime;
				echo "<br>";
				$ime = "sedc";
				echo $ime;
				$ime = 23;
				echo "<br>";
				echo $ime;
	  	?>

	</p>
	<p>
		<?php
			echo $ime;
		?>
	</p>
	<p>
		<?php
			$age = 27;
			echo "my age is: $age"; // my age is: 27
			echo 'my age is: $age'; // my age is: $age
			echo "<br>";
			echo 'she is a very "nice" person'; //moze vaka ili
			echo "<br>";
			echo "she is a very \"nice\" person"; //ili vaka
		?>
	</p>

	<p>
		<?php
			$year = 2017;
			echo "sega sme $year godina";
			echo "<br>";
			$pi = 3.14;
			echo "pi brojot ima vrednost $pi";
			echo "<br>";
			$ok = true;
			echo $ok;
			var_dump($ok);
		?>
	</p>
	<p>
		<?php
				define ('USERNAME', 'Code');
				echo USERNAME;
		?>
	</p>

</body>
</html>