<?php //phpinfo(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Learning PHP</title>
</head>
<body>
	<p>Hello all!</p>

	<p>
		<?php 
			echo "Hello everyone"; 
		?>
	</p>
	<p>
		<?php 
			//echo "Hello everyone !!!"; 
			//echo "Hello!!!"; 
			/*echo "<br>";
			echo " Hello "; */
			$ime = "Marija"; //string
			echo $ime;
			$ime = "sedc";
			echo "<br>";
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
			$prezime = "Zdravkova";
			echo "Marija $prezime"; //dvojni navodnici procesira
			echo "<br>";
			echo 'Marija $prezime';//pecati bukvalno se
			echo '<br>';
			echo "She's very \"nice\" person";
			echo '<br>';

		?>
	</p>
	<p>
		<?php
			$ime ="Marija";
			$age = 27;
			$tezina =61.8;
			echo "$ime ima $age godini i ima tezina $tezina kg.";

		?>
	</p>
	<p>
		<?php
			$ok = true;
			echo $ok;
			var_dump($ok);
		?>
	</p>
	<p>
		<?php
			define('PI', 3.14);
			echo PI;
			echo "<br>";
			define('PASS', 'user');
			echo PASS;
		?>
	</p>

</html>