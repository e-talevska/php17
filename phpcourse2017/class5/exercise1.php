<?php

$info = [
		'firstName' => 'John',
		'lastName' => 'Doe',
		'yearOfBirth' => 1980,
		'occupation' => 'PHP Developer'
		];

$keysArray = array_keys($info);
$valuesArray = array_values($info);

//var_dump($info, $keysArray, $valuesArray);

?>

<table>
	<tr>
	<?php foreach ($keysArray as $header) {
			echo "<th>$header</th>";

	} ?>

	</tr>

	<tr>
		<?php foreach ($valuesArray as $value) {
			echo "<th>$value</th>";
		} ?>
	</tr>

</table>


<?php
	$string = "PHP is a widely-used general-purpose scripting language.";
	$niza = explode(" ", $string);
	
	$newNiza = [];
	foreach ($niza as $word) {
		//echo strlen($word)."<br>";
		$newNiza[$word] = strlen($word);
	}

	var_dump($newNiza);
	echo "<br";


	krsort($info);
	var_dump($info);


	$people = array (
		array ('John', 'Doe', 1980),
		array ('Jane', 'Doe', 1990),
		array ('Michael', 'Smith', 1978),

		);

	usort($people, 'compare');

	function compare ($person1, $person2) {
		if($person1[2] == $person2[2]){
			return 0;
		} else if ($person1[2] > $person2[2]) {
			return -1;
		} else {
			return 1;
		}
	}

	var_dump($people);

?>

