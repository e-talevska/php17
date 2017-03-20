<?php

	$info = [
		"firstName" =>  "John",
		"lastName" =>  "Doe",
		"yearOfBirth" => 1980,
		"occupation" => "Php developer"

	];

	$keysArray = array_keys($info);
	$valuesArray = array_values($info);

	//var_dump($info, $keysArray, $valuesArray);
	
?>
<table>
	<tr>
	<?php
	foreach($keysArray as $header){
		echo "<th>$header</th>";

	}?>
	</tr>
	<tr>
	<?php
	foreach($valuesArray as $value){
		echo "<td>$value</td>";
	}?>
	</tr>


</table>

<?php
	$str = "PHP is a widely-used open source general-purpose scripting language that is especially suited for web development";
	$newArray = (explode(" ",$str));
	var_dump ($newArray);
	$newNiza = [];
	foreach($newArray as $value){
		//echo strlen("$value");
		$newNiza[$value] = strlen("$value");
	}
	var_dump($newNiza);

	ksort($newNiza);
	var_dump($newNiza);


	$people = array (
		array ("john", "Doe", 1980),
		array ("jane", "Doe", 1990),
		array ("Michale", "Smith", 1978),
		array ("Mika", "Smith", 1978) 
		);
	usort ($people, "compare");
	function compare ($person1, $person2){
		if($person1[2] == $person2[2]){
			return 0;

		}else if ($person1[2] < $person2[2]){
			return -1;
		}else {
			return 1;
		}
	}
	var_dump($people);
?>

<?php

	$widgets = 30;
	$cost = 119.95;
	$suma = ($widgets*$cost);
	$suma2 = $cost/0.05;
	$total =  $suma+$suma2;

	echo "You are purchasing <b>$widgets</b> widgtes at a cost of <b>\$$cost</b> each. With tax, the total comes to <b>\$$total</b>.";

?>
<?php

	$email = "mzdravkova@yahoo.com";
	$user = strstr($email, "@", true);
	$domain = substr(strstr($email, "@"), 1);

	echo "<br>";
	echo $user ."<br>";
	echo $domain;

?>

<?php

	$sample = "082307";
	$new = str_split($sample, 2);
	var_dump($new);
	echo implode(":",$new);
?>