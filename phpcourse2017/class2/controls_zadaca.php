<?php
	$fridayCash = 11;
	$result = "";

	//if ($fridayCash >=50) {
	//	$result = "Cinema + dinner";
	//}
	//else if ($fridayCash >= 35) {
	//	$result = "Dinner";
	//}
	//else if ($fridayCash >= 12) {
	//	$result = "Cinema";
	//}
	//else {
	//	$result = "Stay home";
	//}

	if ($fridayCash < 12) {
		$result = "stay home";
	} 
	else if ($fridayCash >=12 && $fridayCash < 35) {
		$result = "Cinema";
	}
	else if ($fridayCash >=35 && $fridayCash < 50) {
		$result = "Dinner";
	}
	else {
		$result = "Cinema + dinner";
	}



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h4><?php
			echo $result;
		?>
	</h4>
	<p>
		<?php
		$broj = rand (10, 100);
	switch ($broj%2) {
		case 0:
			echo "brojot $broj e paren";
			break;
		case 1:
			echo "brojot $broj e neparen";
			break;
	}

	?>
	</p>
</body>
</html>