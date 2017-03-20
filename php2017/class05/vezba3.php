<?php 
 $price = (30*119.95);
 $tax = ($price * 0.05);
 $totalPrice = ($price + $tax);
 	echo number_format($totalPrice, 2) ;


 ?>