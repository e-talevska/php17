<!DOCTYPE html>
<html>
<head>
	<title>Loops</title>
</head>
<body>
		<table>
		<tr>
			<th>Distance</th>
			<th>Cost</th>
		</tr>
		<?php
		$dis = 50;
	
		while($dis <= 250){ ?>
			<tr>
				<td><?php echo $dis; ?></td>
				<td><?php echo $dis/10; ?></td>
			</tr>
		<?php
			$dis += 50;
		}
		?>
		</tbody>
</table>
</body>
</html>




