<!DOCTYPE html>
<html>
<head>
	<title></title>
</head> 
<body>
<?php 

	// $godini = [23, 34, 24, 18];
	// var_dump($godini);

	$godini = [23, 34, 24, 18, 45];
	echo "<pre>";
	print_r($godini);
	echo "</pre>";

	echo $godini[1] . "<br>";
	echo "<br>";

	for ($i=0; $i<count($godini); $i++) {
		echo $godini[$i] . " " . "<br>"."<br>";
	
	}

	$godini[5] = 20;
for ($i=0; $i<count($godini); $i++) {
		echo $godini[$i] . " ";
	}


array_push($godini, 30, 12, 34);
$sumaGodini = 0;
for ($i=0; $i<count($godini); $i++) {
	$sumaGodini += $godini[$i];
   }

echo "<br>"."Srednata vrednost na nizata e " . ($sumaGodini/count($godini)) . "<br>";




$info = [
"name" => "Emilija", 
"Lastname" => "Talevska", 
"Position" => "PHP Developer"];
echo $info["name"]."<br>";
echo "<br>";

$info["age"] = 50;
$info["name"] = "Emi";

foreach ($info as $key => $value) {
	echo $value . "<br>";
}








$people = [
[
	"name" => "John",
	"lastName" => "Doe",
	"age" => 30
],
[
	"name" => "John",
	"lastName" => "Doe",
	"age" => 25
],
[
	"name" => "John",
	"lastName" => "Doe",
	"age" => 35
]
];

for($i=0; $i<count($people); $i++) {
	
echo "People".($i+1). ": ";
	foreach ($people[$i] as $key => $value) {
	echo "$key: $value <br>";
	}
	echo "<br>";
}

foreach ($people[$i] as $i => $person) {
	echo "People".($i+1). ": ";
	foreach ($person as $i => $value) {
	echo "$key: $value <br>";
	}
	echo "<br>";
}

// unset($numbers[2]);
// isset($numbers[2]);


 ?>

</body>
</html>