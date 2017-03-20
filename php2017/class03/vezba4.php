<?php 
function temp($celsius) {
	$f = $celsius * 1.8 + 32; 
  	return  "$f"; 
}
	echo temp(5);
 ?>
 <br>
 <?php 
function tmp($fahrenheit) {
	$c = ($fahrenheit - 32) * (5/9 );
	return "$c"; 	
	}  
	echo tmp(5);

	?>