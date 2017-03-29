<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- <?php 

$info = [
	'firstname' => 'John',
	'lastname' => 'Doe',
	'yearofbirth' => 1980,
	'occupation' => 'PHP Developer'
];
	$keysArray = array_keys($info);
	$valuesArray = array_values($info);
	//var_dump($info, $keysArray, $valuesArray);


 ?>
 <table>
 	<tr>
 	<?php foreach($keysArray as $header){
 		echo "<th>$header</th>";
 		} ?>
 	</tr>
 	<?php foreach($valuesArray as $value){
 		echo "<td>$value</td><br>";
 		} ?>
 		
<?php 

	$var = "PHP is a widely-used general-purpose scripting language that is especially suited for Web development";

	$newarray = [];
	$array = explode(" ", $var);
		foreach ($array as $value) {
			$newarray[$value] = strlen($value);
		}
		var_dump($newarray);
?>
 </table>
<!--  <?php 

 $people = [
		 ['John', 'Doe', 1980],
		 ['Jane', 'Doe', 1990],
		 ['Michael', 'Smith', 1978],
];
	usort($people, 'compare');
	function compare($person1, $person2) {
		if($person1[2] == $person2[2]) {
			return 0;	
		} 
		elseif($person1[2] > $person2[2]) {
			return -1;
		}
		else
		{
			return 1;
		}
	}
	// var_dump($people);
  ?> -->
 <!--  <?php 

  $amount = 30;
  $widget = 119.95;
  $taxrate = 0.05;
  $calculate = $amount * $widget;
  $price = number_format($calculate + ($calculate * $taxrate),2);
  echo "You are purchasing <strong>$amount</strong> widget(s) at a cost of <strong>$$widget</strong>. With tax, the total comes to <strong>$$price</strong>";
     ?> -->

   <!--   <?php 

     $user = "daniel@ss3.com";

     $domain = strstr($user, "@");
     $name = strstr($user, "@", true);
     $domain = str_replace("@", " ", $domain);
     echo $domain . "<br>";
     echo $name;

      ?> -->
<!-- <?php 
      $string = '082307';
      $split = str_split($string,2);
      $imp = implode(":", $split);

      echo $imp;


?> -->

<?php 

	$str = 'abcefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	
?>

</body>
</html>