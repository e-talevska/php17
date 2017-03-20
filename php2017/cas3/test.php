<?php  
function temp($celz){
	return ($celz * 1.8) + 32;
}
function fahr($far){
	return (5 / 9) * ($far - 32);
}
$celz = 24;
echo temp($celz);
$fahr = temp($celz);
echo "<p></p>";
$step = ($celz * 1.8) + 32;
echo $step;
echo "<p></p>";
echo fahr($fahr);
?>