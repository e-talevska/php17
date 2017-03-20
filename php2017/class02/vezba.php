<?php 
 	$fridayCash = 35;
 	$result = " ";
 	if ($fridayCash >= 50)	{
 		$result = "Cinema + dinner";
 	} else if($fridayCash >= 35) {
 		$result = 	"dinner";
 	} elseif ($fridayCash >= 12) {
 		$result = "Cinema";
 	} else { 
 		$result = "Stay home";

 }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h4> <?php  echo $result; ?></h4>
	<p>
	<?php 
	$broj = rand(10, 100);
	switch ($broj%2) {
		case 0:
		 	echo "Brojot $broj e paren";
		 	break;
		 case 1:
		 echo "Brojot $broj e neparen";
		 break;
		} ?>
	</p>
</body>
</html>