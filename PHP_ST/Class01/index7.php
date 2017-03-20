<!DOCTYPE html>
<html>
<head>
	<title>Controls.php</title>
	</head>
<body>

<?php
$broj = rand(10, 100);
switch ($broj%2) {

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
