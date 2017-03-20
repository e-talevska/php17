
<?php 
	// $fridayCash = 23;
	// $result = " ";
	// if($fridayCash >= 50)
	// {	
	// 	$result = "Cinema + dinner";


	// } else if($fridayCash >= 35)
	// 	{
	// 		$result = "Go have a dinner"; 
	// 	} else if($fridayCash >= 12)
	// 	{	
	// 		$result = "Cinema";

	// 	} else 
	// 	{	
	// 		$result = "stay home";
	// 	}

		// 
	if($fridayCash <= 12)
		{
			$result = "stay home";

		} else if($fridayCash >= 12 && $fridayCash < 35)
		{
			$result = "cinema";
		} else if ($fridayCash >= 35 && $fridayCash <=50)
		{
			$result = "cinema + dinner";
		}


 ?>



<!DOCTYPE html>
<htm lang="en">
<head>
	<title>Document</title>
</head>
<body>
<p>
		<?php echo $result; ?>
</p>
<p>
	<?php 
	$broj = rand(10, 100);
		switch($broj%2){
			case 0;
			echo "brojot $broj e paren";
				break;
			case 1;
				echo "brojot $broj e neparen";
				break;
		}


	?>
	
</p>


</body>
</html>