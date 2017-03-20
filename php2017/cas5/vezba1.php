<?php

$string="PHP is a widely-used general purpose scriting language that is especially suited for Web development";

$niza= explode(' ', $string);

$niza2=[];
foreach ($niza as $value) {
	$niza2[$value]=strlen($value);
}
ksort($niza2);
// var_dump($niza2)

$widgets=30;
$price=119.95;

$sum=$widgets*$price;
$pos=$sum * 0.05;
$R=$sum+$pos;

number_format($R,2);
echo "You are purchasing $widgets widgets at cost of \$$price each.<br> With tax, the total comes to ". $R."<br>";

$email  = 'acevski@yahoo.com';

$user = strstr($email, '@', true);
echo "User: ". $user."<br>";


$domain = strstr($email, '@');

echo "Domain: ". substr($domain,1)."<br>";

$br='082345';
$br1=str_split($br,2);
$br2=implode(':', $br1);
echo $br2;


?>