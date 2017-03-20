<?php
$string = "PHP is a widely-used general-pirpose scripting language that is especially suited for Web development";
$array = explode (" ", $string);
$arrayKey = array_keys($array);
$arrayValue = array_values($array);
$newNiza = [];

foreach($arrayValue as $word){
	// echo "$word   " . strlen($word) . " <br>";
	$newNiza[$word] = strlen($word);

}

var_dump($newNiza);

asort($newNiza, SORT_NUMERIC);
var_dump($newNiza);


$people = [
		['John', 'Doe', 1980],
		['Jane', 'Doe', 1990],
		['Michael', 'Smith', 1978],
		['Mika', 'Mika', 1971]
	];
usort($people , 'compare');

function compare($person1, $person2){
	if($person1[2] == $person2[2]){
		return 0;
	} else if($person1[2] <= $person2[2]){
		return -1;
	} else {
		return 1;
	}
};
var_dump($people);

?>