<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table> 
		<tr>	
			<th>Distance</th>
			<th>Cost</th>
		</tr>
		<?php 
	$d = 50;
	
	while($d <= 250) { $c = $d/10; ?>
	

<tr>
	<td><?php echo $d; ?></td>
		<td><?php echo $d/10; ?></td>
</tr>
<?php  
		$d += 50;
	}
		 ?>

</table>
</body>
</html>