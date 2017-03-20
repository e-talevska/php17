<?php 
$godini = [23, 34, 24, 18, 45];
echo "<pre>";
var_dump($godini);
 echo "</pre>";

 echo $godini[3] . "<br>";

for($i=0; $i < count($godini); $i++ ){
	echo $godini[$i] . "<br>";
}

echo "<br><br>";
echo "<pre>";
print_r($godini);
echo"</pre>"

?>
<?php  
$people = array (
	array (	"name" => "John",
		"lastName" => "Doe",
		"age" => 30
	),
array ( 	"name" => "Mick",
		"lastName" => "Lock",
		"age" => 30
	),
	array ("name" => "Jay",
		"lastName" => "Rick",
		"age" => 30
	) 
	);
	for($i=0; $i<count($people); $i++) {
		echo "People " . ($i+1). ": ";
		foreach($people[$i] as $key => $vlaue){
			echo "$key: $value <br>";

		}
		echo "<br>";
	}
 ?>
