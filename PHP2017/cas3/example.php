<?php 
//
//function pecati($msg)
//{
//	echo $msg;

//}

//pecati("ispecati go ova");
  //$a = "Druga vrednost za pecatenje";
// pecati($a);
//
function inc(&$var){

	$var++;
	echo "var: $var <br>";
}
$a = 4;
inc($a);
echo "a: $a <br>";


function beautify(&$str) {

	// $str = strtolower($str);
	// $str = ucwords($str);
	
	$str = ucwords(strtolower($str));


}
$title = "seDc phP mYsql";
beautify($title);

echo $title;



?>