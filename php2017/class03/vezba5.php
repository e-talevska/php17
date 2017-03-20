<?php 
function tmp($fahrenheit) {
	$c = ($fahrenheit - 32) * (5/9 );
	return "$c"; 	
	}  
	echo tmp(5);

	?>