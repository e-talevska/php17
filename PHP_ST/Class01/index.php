<?php //phpinfo(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Learning PHP</title>
</head>
<body>
<p>Hello all!</p>
		<p><?php echo "Hello everyone"; ?></p>
		<p><?php echo "Hello world"; ?></p>
		<p><?php echo "Hello class"; ?></p>
		<p><?php echo "Hello friends"; ?></p>
		<p>
		<?php 
		// echo "Hello everyone";
		// echo "<br>";
		// echo " Hello ";
		$ime="Emilija"; //string
		echo $ime;
		//prebrisi stavi nova vrednost za ime
		$ime = "SEDC";
		echo "<br>";
		echo "<br>";
		echo $ime;
		//pak prebrisi so toa sto slobodno kako nova vrednost mozes slobodno da go smenis tipot na promenlivata
		$ime = 23;  // integer
		echo "<br>";
		echo "<br>";
		echo $ime;
		?>
<p>
	<?php
	echo $ime;
	?>
	<p>
		<?php
		$age = 20;
		echo "My age is: $age"; // My age is 20
		echo "<br>";
		echo 'My age is: $age'; // My age is $age
		echo "<br>";
		echo "She is a very \"nice\" person";
		echo "<br>";
		echo 'She\'s a very "nice" person';
		?>
	</p>
	<p>
	<?php
		$cel_br = 1101;
		$dec_br = 0.2015;
		$eql = true;
		echo "$cel_br";
		echo "<br>";
		echo "<br>";
		echo "$dec_br";
		echo "<br>";
		echo "<br>";
		echo "$eql";
		echo "<br>";
		var_dump($eql);
		?>
<p>
	<?php
		define("PI", 3.14);
		echo PI;
			echo "<br>";
			echo "<br>";
		define("API", "Integer, Float, Boolean or String.");
		echo API;

	?>
</p>

	</p>
</p>
</body>
</html>