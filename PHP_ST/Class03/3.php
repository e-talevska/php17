<!DOCTYPE html>
<html>
<head>
	<title>3CAS_1VEZBA</title>
</head>
<body>
<?php 

function Pozdrav($time) {
 if (date("H") > 17) {
 	echo "Good evening";
 } else {
 	echo "Good morning";
 }
}
Pozdrav(18);


 ?>





</body>
</html>