<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php 
function zbir( $a, $b) {
	
	echo $a + $b;
	echo "<br>";
}
	zbir( 5, 6);
	

	$a = 3;
	$b = 4;
	echo $a + $b;
	echo "<br>";
	$a = 6;
	$b = 7;
	echo $a + $b;
		echo "<br>";


	function pecati( $name  , $lastName , $c){
		$greeting = '';
		if (date('H') >= 17)
		{
			$greeting = "good evening";


		} else { 
				echo "Hello";
			 } 
		echo "Hello! My name is ". $name  .  " " .  $lastName  . " I was born in $c";  

	}
pecati ( "Kire" ,  "Kostov" ,  1993);
echo "<br>";


function flag($firstname, $lastname, $flag = 0)
{
	if( $flag == 0) {


	echo "$firstname $lastname ";
	}	else {

		echo "$lastname $firstname ";
	}
}
flag("Kire", "Kostov", 1);


function convert($a) 
{
	$f =  ( $a * 1.8) + 32;
	return $f;
}
$b = convert(56);
function convert1($b){
	$c= (5/9)*( $b - 32);
	return $c;
}

$c = convert1(25);
echo "<br>";

echo $b;
echo "<br>";
echo $c;


?>