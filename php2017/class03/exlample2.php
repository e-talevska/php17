<?php 
function inc(&$var) {
$var++;
echo "$var: $var <br>";

}
$a = 4;
inc($a);
echo "a: $a <br>";

function beautify(&$str) {
	$str = ucwords(strtolower($str));

}
$tite = " my Name IS nIkolA";
beautify($tite);
 echo $tite;	
 ?>