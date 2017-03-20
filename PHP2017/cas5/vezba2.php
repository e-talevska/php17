<?php 
	/*$string = "Php is a widely-used general-purpose scripting lamguage that is especially suited for Web defvelopment.";
	$arraySENT=[];

	
	foreach ($string as $i => $value) {
		$arraySENT[$i]= array explode(" ", $string);
		$dolzina= strlen($arraySENT[$i]
	}
		for($k=0; $k<=  )
	*/

	$string = "Php is a widely-used general-purpose scripting lamguage that is especially suited for Web defvelopment.";
	$niza = explode(" ", $string);		
	var_dump($niza);
	$newNiza = [];
	foreach ($niza as $word) {
		// echo strlen($word)."<br>";
		$newNiza[$word] = strlen($word);
	}
	asort($newNiza);
	var_dump($newNiza);

	$info = [
		'firstName' => 'John',
		'lastName' => 'Doe',
		'yearOfBirth' => 1980,
		'ocupation' => 'engineer'
	];
	asort($info);
	var_dump($info);

$people = array(

	array('John', 'Doe', 1980), 
	array('Jane', 'Doe', 1990), 
	array('Michael', 'Smith', 1978),
	array('Jack', 'Dawson', 1999),
	);
	usort($people, 'compare');
	function compare($person1, $person2){
		if($person1[2]==$person2[2]){
			return 0;
		}else if($person1[2] > $person2[2]){
			return -1;
		} else{
			return 1;
		}
}
var_dump($people);


$widget= 119.95;
$total = (30*$widget);
$totalTAX =$total + 0.05*$total;
echo "The total price is \$".number_format($totalTAX, 2)."<br>"; 

/*
	$email="name@example.com";
	
	function check($email){
		echo strstr($email, "name");
		$domain= strstr($email, "example.com");


	}
echo check();*/

$number='082307';
$time = str_split($number , 2);
var_dump($time);
echo implode (" : ", $time);

 

 ?>