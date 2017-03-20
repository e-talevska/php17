<?php

		$email  = 'name@example.com';
			if(strpos($email, '@') !== false) {

				$name = strstr($email, '@', true);
				$domain = substr(strstr($email, '@'), 1);
				echo $name;
				echo "<br>";
				echo $domain;

			}

		echo "<br";

		$string = "082307";
		$string1 = str_split($string);
		$string2 = str_split($string, 2);
		
		$string3 = implode(":", $string2);
		var_dump($string3);
		echo $string3;


		

?>

