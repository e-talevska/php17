<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php

			function zbir($a, $b) {

				$sobiranje = $a + $b;
				echo $sobiranje;
				echo "<br>";	

			}
		
			zbir(7, 9);
			zbir(17, 29);
			zbir(171, 529);

			function pecati($name, $lastName, $year) {

				if (date ("H")>17)
					{
						$greeting ="Good evening";
					}
				else {
					$greeting ="Good evening";
				}
				echo "$greeting! My name is ". $name . " ". $lastName. ". I am born ". $year. " year." ;
				echo "<br>";
				//echo "Hello! My name is $name $lastName. I am born $year year." ;
					

			}
		
			pecati("Marija", "Zdravkova", 1989);

			function zadaca($firstName, $lastName, $z = 0) {

				if ($z == 1){
						echo "$lastName $firstName";	

				}else {
						echo "$firstName $lastName";
				}


			}
		
			echo "<br>";
			zadaca("Marija", "Zdravkova", 1);
			
			function convert($celzius) {

				$rezultat =  $celzius * 1.8 + 32;
				return $rezultat;

			}
		
			echo "<br>";
			$f = convert(2);


			function convert1($f) {

				$rezultat =  (5/9) * ($f-32);
				echo $rezultat;

			}
		
			echo "<br>";
			convert1($f);


			
		?>

</body>
</html>