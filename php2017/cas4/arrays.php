<?php // Indeksna Niza
	$godini = [23 ,34 ,24, 18, 45];
	var_dump($godini);
	echo "<pre>";
	print_r($godini);
	echo "</pre>";
	echo $godini[1];
	echo "<br>";
	echo "<br>";
	echo "<br>";
	for($i=0;$i<count($godini);$i++){
		echo $godini[$i];
		echo "<br>";
	}

	$godini[] = 20;
	echo "<br>";
	echo "<br>";
	echo "<br>";

	for($i=0;$i<count($godini);$i++){
		echo $godini[$i];
		echo "<br>";
	}
	$godini[2] = 100;
	array_push($godini, 30, 12, 34);

	print_r($godini);

?>
<?php // prosek vo niza
$var1 = '';
for($i=0;$i<count($godini);$i++){
	$var1+=$godini[$i];
}
echo "Prosekot e " . ($var1 /  $i);
?>



<!-- <?php // asocijativni nizi
$info = [
	"name" => "Trajan",
	"lastName" => "Stevkovski",
	"position" => "Student"
];
$info["age"] = 50; // add
$info["name"] = "Taci"; // modify
	//echo $info["lastName"];
	foreach ($info as $key => $value) {
		echo "$key $value" . "<br>";
	}

?> -->

<?php
$people = array(
	array(
		"name" => "John",
		"lastName" => "Doe",
		"age" => 20
		),
	array(
		"name" => "Jane",
		"lastName" => "Doe",
		"age" => 30
		),
	array(
		"name" => "Mike",
		"lastName" => "Doe",
		"age" => 35
		));
	for($i=0;$i<count($people);$i++){
		echo "People" . ($i + 1). ": ";
		foreach($people[$i] as $key => $value){
			echo "$key: $value <br>";
		}
		echo "<br>";
	}
?>