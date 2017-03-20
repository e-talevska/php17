<!DOCTYPE html>
<html>
<head>
	<title>3CAS_1VEZBA</title>
</head>
<body>

<?php 

function temperatura($Celsius) {
		 $b = $Celsius*1.8+32;
		return $b;
}
echo temperatura (15). " F";
echo "<br>"
?>

<?php  
function temperatura1($Farenhajt) {
		 $c = $Farenhajt*(5/9)-32;
		return $c;
}
echo temperatura1 (81). " C";
?>

</body>
</html>