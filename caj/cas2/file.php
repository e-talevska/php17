<?php 

	$cash = 10;
	$result = "";
	if($cash >= 50){
		$result = "You should go out to a dinner and a movie";
	} elseif($cash >= 35 ){
		$result = "Samo dinner, nema nisto drugo";
	} elseif($cash >= 12){
		$result = "Samo pukanki";
	} else{
		$result = "nisto ic";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Helo guys</title>
</head>
<body>
<?php echo $result; ?>


<?php 
	$broj = rand(10, 100);
	switch($broj%2){
		case 0:
		echo "Brojot $broj e paren";
		break;
		case 1:
		echo "Brojot $broj e neparen";
		break;
	}
?>
</body>
</html>