<!DOCTYPE html>
<html>
<head>
	<title></title>
</head> 
<body>
<?php 

$string = "PHP is widely - used general purpose scripting language that is especially suited for Web development";

$niza = explode(" ", $string);

$newniza = [];

foreach ($niza as $word) {

echo strlen($word). "<br>";

$newniza[$word] = strlen($word);

var_dump($newniza);
}

// sort($newniza);
// var_dump($newniza);
// asort($newniza);
// var_dump($newniza);




$people = array (
	array('John', 'Doe', 1980),
	array('Jane', 'Doe', 1990),
	array('Michael', 'Doe', 1978),
	array('Mika', 'Smith', 1978)
	);

usort($people, "compare");

function compare($person1, $person2) {
	if($person1[2] == $person2[2]) {
		return 0;

	} elseif($person1[2] < $person2[2]) {
		return -1;

	} else {
		return 1;
	}
 }
 
 var_dump($people);
?>
</body>
</html>