<?php 
function sqr($a){
	$var = $a * $a;
	return $var;
}
$zbir = 0;
//$mnozi = 1;
//$conca = '';
for($i=101;$i<=150;$i++){
	$zbir+=sqr($i);
	//$conca.=sqr($i);
	//$mnozi*=sqr($i);
	echo sqr($i). "+" .$zbir . " = " . $zbir . " mnozenje ";
	//echo sqr($i). "*" .$mnozi . " = " . $mnozi . "<br>";
	//echo $conca . "<br>";
}
echo "<br>";
echo $zbir;

?>
<!-- <?php // fibonaceva niza probna vezba
function fib($a, $b){
	$var = $a + $b;
	return $var;
}
$a = 1;
for($i=1; $i<=99; $i++){
	$a = $i + fib($a, $i);
	echo $i . " " . $a . "<br>";
}
?> -->