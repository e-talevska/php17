<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<thead>Distance</thead>
		<thead>Cost</thead>
	</tr>
	<tbody>
	<?php 
		$distance = 50;
		while($distance <= 250){ ?>
			<tr>
				<td><?php echo $distance; ?></td>
				<td><?php echo $distance / 10; ?></td>
			</tr>
			<?php 
			$distance += 50;	
		}
	?>
		<tr></tr>
	</tbody>
</table>

<hr>

</body>
</html>