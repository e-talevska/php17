<?php 

	$currentcash = 10;
	$result = "";
if($currentcash >= 50){
	$result = "Cinema + Dinner";
}
else if($currentcash >= 35)
{
	$result = "Only dinner";
}
else if ($currentcash >= 12)
{
	$result = "Cinema";
}

else {
	$result = "Home bruh";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>IF & ELSEIF</title>
</head>
<body>

<?php 

 echo $result;

 ?>
 <p>
 	<?php 

 	$broj = rand(10, 100);
 	switch ($broj%2){
 		case 0:
 			echo "Brojot $broj e paren";
 		break;
 		case 1:
 			echo "Brojot $broj e neparen";
 		break;
 	}


 	 ?>
 </p>
</body>
</html>