<!DOCTYPE html>
<html>
<head>
	<title></title>
</head> 
<body>

<?php 
$pieces = 30;
$price = 119.95;
$tax = 1.05;
$priceTax = $price * $tax;
$totalPrice = $priceTax * $pieces;
$totalPrice = number_format($totalPrice, 2, '.', ',');

echo "You are purchasing <strong>$pieces</strong> widgets at a cost of <strong>\$$price</strong> each.
With tax, the total cost comes to <strong>\$$totalPrice</strong>. <br><br>";


$mail = "primer@gmail.com";
$domain = strstr($mail, '@');
$domain = substr($domain, 1);
$user = strstr($mail, '@', true);

echo "<strong>Rezult</strong> <br> User: $user <br> Domain: $domain <br><br>";




$hour = "085654";

$newhour = str_split($hour, 2);

echo implode(":", $newhour);


 
 ?>
</body>
</html>