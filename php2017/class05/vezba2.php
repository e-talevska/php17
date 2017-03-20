<?php 
	$string = "PHP is a widley-used general-purpose scripting language that is especially suted for Web development.";
 	$niza = explode(" ", $string);
 	$newNiza = []; 	
 	
 	foreach ($niza as $word ) {
 		//echo strlen($word)."<br>";
 		$newNiza[$word] = strlen($word); 

 	}
 	var_dump($newNiza); 
 ?>