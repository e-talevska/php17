<?php
	 $money=60;
	// $result="";
	// if ($money>=50) {
	// 	$result='kino i vecera';
	// }elseif ($money>35) {
	// 	$result='vecera';
	// }elseif ($money>12) {
	// 	$result='kino';
	// }else{
	// 	$result='ostani doma';
	// }
	
	if ($money<12) {
		$result='ostani doma';
	}elseif ($money>=12 && $money<35) {
		$result='kino';
	}elseif ($money>=35 && $money<50) {
		$result='vecera';
	}else{
		$result='kino i vecera';
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>vezba3</title>
</head>
<body>
<p style="color: green;"><?php echo $result; ?></p>
<p>
	<?php
	$broj= rand(10,100);
	switch ($broj%2) {
		case 0:
			echo "brojot $broj e paren" ;
			break;
		case 1:
			echo "brojot $broj e neparen";
			break;
	}
	?>
</p>
</body>
</html>