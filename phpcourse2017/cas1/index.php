<?php //phpinfo(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Learning PHP</title>
	</head>
	<body>
		<p>Hello all!</p>
		<p><?php echo "Hello everyone"; ?></p>
		<p><?php echo "Hello class"; ?></p>
		<p><?php echo "Hello world"; ?></p>
		<p><?php echo "Hello everyone"; ?></p>
		<p>
			<?php 
				/*
				echo "Hello everyone"; 
				echo "<br>";
				echo " hello ";
				*/

				$ime = "Emilija"; //string
				$ime = "a"; 
				$ime = "b"; 
				echo $ime;
				//prebrishi
				$ime = "SEDC";
				echo "<br>";
				echo $ime;
				//prebrishi
				$ime = 23; //int
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
				$age = 20;
				echo "My age is: $age"; //My age is: 20
				echo "<br>";
				echo 'My age is: $age'; //My age is: $age
				echo "<br>";
				echo "She is a very \"nice\" person";
				echo "<br>";
				echo 'She\'s a very "nice" person';

			 ?>
		</p>

		<p>
			<?php
				$ok = true; //bool
				echo $ok;
				var_dump($ok);
			?>
		</p>

		<p>
			<?php

			define("API", 'something constant');
			echo API;
			// define('API', 'changing constant value'); //will cause error
			?>
		</p>
	</body>
</html>