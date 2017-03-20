<?php
// for ($i=0; $i <= 300 ; $i++) { 
// 	if($i%3 == 0){
// 		continue;
// 	}
// 	echo $i. " ";
// }
// $x=0;
// while ($x< 300) {
// 	$x++;
// 	if($x%3 == 0){
		
// 		continue;
// 	}
	
// 	echo $x. " ";
// }

//nizi

$niza=[12,34,65,62];
var_dump($niza);

$prosek=0;
for ($i=0; $i < count($niza); $i++) { 
	$prosek += $niza[$i];
}
echo $prosek/(count($niza)) . "<br><br>";

	$info=[
		'name'=>'aleksandar',
		'surname'=>'acevski',
		'position'=>'php developer'
	];
	$info['age']=22;

	foreach ($info as $value) {
		echo "$value <br>";
	}

	$people= [
		[
			'name'=> 'Jhon',
			'lastname'=>'Doe',
			'age'=>30
		],	
		[
			'name'=> 'Jhon',
			'lastname'=>'Doe',
			'age'=>40
		],
		[
			'name'=> 'Jhon',
			'lastname'=>'Doe',
			'age'=>50
		]
	];
	for ($i=0; $i < count($people) ; $i++) { 
		echo "People".($i+1).": <br>";
		foreach ($people[$i] as $key => $value) {
			echo "$key: $value <br>";
		}
		echo "<br>";
	}

	
?>