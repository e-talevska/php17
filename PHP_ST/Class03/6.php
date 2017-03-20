<!DOCTYPE html>
<html>
<head>
	<title>3CAS_1VEZBA</title>
</head>
<body>


<?php 

function pecati($msg) {
	echo $msg;
}

pecati ("ispecatiu go ova");
$a = "Druga vrednost za pecatenje";
pecati($a);

$a = 2;
$b = $a;

echo "a: $a, b: $b <br>";
 
$a = 4;
echo "a: $a, b: $b <br>";

 ?>


 <?php 

function inc(&$var) {
	$var++;
	echo "var: $var . <br>";
}

$a = 4;
inc ($a);
echo "a: $a <br>";


  ?>


  <?php 

function beautify(&$str) {
	$str = ucwords(strtolower($str));


}
$title = " AbCd efGH";
beautify($title);
echo $title;
   ?>

</body>
</html>