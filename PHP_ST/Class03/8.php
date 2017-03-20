<?php 
$x = 1;

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>3CAS_1VEZBA</title>
</head>
<body>


   <?php 

while(($x > 0) && ($x <= 20)) {
	
	if ($x % 2 == 0) {
			echo "$x";
			echo "<br>";
	} 

		else {
			echo "$x";
			echo " ";
		}

	$x++;

}

    ?>

<p></p>


<table> 
<tr>
<th>Distance</th>
<th>Cost</th>
</tr>
</table>

<?php  
$d = 50;

while ($d <= 250) { ?>
	$d += 50;
}

<?php
<tr>
<td><?php echo $d; ?></td>
<td><?php echo $d/10; ?></td>
</tr>
<?php 
$d += 50;
 ?>	
}



 ?>
</body>
</html>