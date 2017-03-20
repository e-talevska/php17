<?php //phpinfo(); ?>



<!DOCTYPE html>
<html>
<head>
	<title>Learning PHP</title>
</head>
<body>
<p>Hello all!</p>
<p><?php echo "Hello everyone!"; ?> <p>
	<p><?php 
			echo "Hello everyone!";
			/*
			echo "<br>";
			echo "Hello";
			*/	
			echo "<br>";
			$ime = "Kire"; //string
				// prebrisi
			echo $ime;
			$ime = "SEDC";
			echo "<br>";
			echo $ime; 
			//prebrisi
			$ime = 23; //int
			echo "<br>";
			echo $ime;
	 ?></p>

	 <p>
	 	<?php 
	 			echo $ime;


	 	 ?>

	 </p>
	 <p>
	 	<?php
	 		$age = 20;
	 		echo "My age is: $age"; // My age is: 20
	 		echo "<br>";
	 		echo 'My age is: $age';
	 		echo "<br>";
	 		echo "She is a very \"nice\" person.";
	 		echo "<br>";
	 		echo 'She is a very "nice" person.';


	 	?>


	 </p>
	 <p>
	 <?php 
	 	$broj = "26";
	 	echo $broj;
	 	echo "<br>";
	 	$decimal = "5.25";
	 	echo $decimal;
	 	echo "<br>";
	 	$bool = true;
	 	echo "this is a boolean $bool ";
	 	var_dump($bool);
	 	echo "<br>";




	 ?>
	 	


	 </p>
	 <p>
	 	<?php 
	 		define('API', 'something unmoveable');
		 	echo API;
		 	 // define('API', changing is wrong); //will cause error

	 	?>

	 </p>
</body>
</html>