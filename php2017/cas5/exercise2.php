<?php
$price = 119.95;
$widgets = 30;
$sumPrice = "";
$totalPrice = "";
$i = 0;
	while($i <= $widgets){
		$sumPrice+=$price;
		$i++;
	}
	$totalPrice = $sumPrice + ($sumPrice * 0.005);

	//number_format($totalPrice , 2 , ".", ",");
	
	echo "You are purchasing" . $widgets . " widget(s) at a cost of $". $price. " each. With Tax, the total cost commes to $" . number_format($totalPrice , 2 , ".", ",") . " .";
?>