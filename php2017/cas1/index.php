<!DOCTYPE html>
<html>
<head>
	<title>learning php</title>
</head>
<body>

	<p>hello all!</p>
	<p><?php echo "hello everyone"; ?></p>
	<p>
		<?php
			 $ime="acevski";
			 echo $ime; 
			 echo "<br>";
			 $ime="toni toni";
			 echo $ime;
			 echo "<br>";
			 $ime=26;
			 echo $ime;
		 ?>
	</p>
	<p style="color:green; ">
		<?php
			$name="Aleksandar";
			$x="zdravo $name";
			$y="$x kako si";
			echo $x; 
			echo "<br>";
			echo $y;
			echo "<br>";
			$age=23;
			echo "My name is: $name and I'm $age years old";
		?>
	</p>
	<p>
		<?php
			define("API", "adsfwefae");
			echo API;
		?>
	</p>

</body>
</html>