<?php 

	function zbir($a, $b){
		return $a + $b;
	}

	$x = zbir (1, 3);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php
			while ($x < 10){

				echo "<p>$x</p>";
				$x ++; 

			}
		?>

		<?php

			$x= 1;
			while ($x <=20){
				

				if($x%2){
					echo " $x ";

				}
				else {
					echo "$x <br>";
				}
				$x++;
			}
		?>

		<table>
			<tr>
				<td>Distance</td>
				<td>Cost</td>
			</tr>

		
		<?php

			$d=50;

			while($d<=250){ ?>
			<tr>
				<td><?php echo $d ?></td>
				<td><?php echo $d/10 ?></td>
			</tr>
			<?php
				$d+=50;
			}

		?>
		</table>




</body>
</html>