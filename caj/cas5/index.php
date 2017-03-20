<?php

	$array = array(1, 45, 5, 43, 2342);
	$names = array(
		"Name" => "John",
		"LastName" => "Doe",
		"YearOfBirth" => "1900",
		"Role" => "Developer",
	);

	$keysArray = array_keys($names);
	$valueArray = array_values($names);
	var_dump($names, $keysArray, $valueArray);
	echo "<br>";
?>

<table>
	<thead>
		<?php 
			foreach($keysArray as $links){
				echo "<th>" . $links . "</th>";
			}
		?>
	</thead>
	<?php 
		foreach($valueArray as $name){ ?>
			<td><?php echo $name; ?></td>
		<?php } ?>
</table>

<?php 
	$lorem = 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.';

	$array = explode(" ", $lorem);
	$newarray = array();
	foreach($array as $value){
		$newarray[$value] = strlen($value);
	}
	$array = "123:5,342:16,5433:3";
	// STRSTR
	$array = explode(",", $array);

	foreach($array as $value){
		echo strstr($value, ":", true);
	}
	var_dump($array);

	// CHECK VALUE BETWEEN min and max
	$info = array(
		array("min" => 10, "max" => 49),
		array("min" => 50, "max" => 100),
	);
	$number = 76;

	$people = array(
		array("Jon", "Doe", 1980),
		array("Jane", "Jana", 1990),
		array("Michael", "Jackson", 1978),
	);

	usort($people, 'compare');

	function compare($person1, $person2){
		if($person1[2] == $person2[2]){
			return 0;
		}
		elseif($person1[2] < $person2[2]){
			return -1;
		}
		else{
			return 1;
		}
	}
	var_dump($people);

	$widget = 119.95;
	$tax = 0.05;
	$amount = 30;
	$price = ($amount * $widget);
	$total_price = number_format($price+($price * $tax),2);
	echo "You are puchasing $amount widgets and cost of each widget is $widget. With tax total price is $$total_price";

	echo "<br>";

	function email($name){
		$mail = strstr($name, "@");
		$mail = str_replace("@", "", $mail);
		$name = strstr($name, "@", true);
		echo "User: $name";
		echo "<br>";
		echo "Domain: $mail";
	}
	$email = "jony@mail.com";
	email($email);

	echo "<br>";

	$time = 234324;
	$date = str_split($time, 2);
	$date = implode(":", $date);
	echo $date;

	echo "<br>";

	$hash = "abcdefghijklmnopqrstuvwxyzyxwvutsrqponmlkjihgfedcba";

	
?>