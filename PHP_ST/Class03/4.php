<!DOCTYPE html>
<html>
<head>
	<title>3CAS_1VEZBA</title>
</head>
<body>
<?php 

function zadaca($ime, $prezime, $Flag=0) {

If ($Flag == 0) {
echo $ime . " " . $prezime;
} else {
	echo $prezime . " " . $ime;
}

}

zadaca("Slavcho", "Taushanov", 1);

 ?>





</body>
</html>