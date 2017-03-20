<?php //phpinfo(); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Learning PHP</title>
	</head>
	<body>
		<p>Hello all!!</p>
		<p>
			<?php 
				echo "Hello everyone";
				echo "<br>" ;
				echo " hello ";
				$ime = "Trajan";
				echo $ime;
				$ime = "sedc";
				echo "<br>";
				echo $ime; 
			?>
		</p>
		<p>
			<?php 
				$age = 20;
				echo "My age is: $age";
				echo "<br>";
				echo 'My age is: $age';
				echo "<br>";
				echo "She is very \"nice\" person";
				echo "<br>";

			 ?>
		</p>
		<p><?php 
		define('API', '12030');
		echo API;
		$API = 1;
		echo "$API";
		?></p>
	</body>
</html>