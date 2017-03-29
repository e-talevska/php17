<?php

$EU = array( 
			"Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
			"Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
			"Finland"=>"Helsinki", "France" => "Paris", 
			"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
			"Germany" => "Berlin", "Greece" => "Athens",
			"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
			"Portugal"=>"Lisbon", "Spain"=>"Madrid", 
			"Sweden"=>"Stockholm", "United Kingdom"=>"London", 
			"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", 
			"Czech Republic"=>"Prague", "Estonia"=>"Tallin",
			"Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", 
			"Austria" => "Vienna", "Poland"=>"Warsaw");
			
			
		function glavenGrad($value, $method = 1, $drzavi) {
			
			if($method == 1) {
				if (isset($drzavi[$value])) {
					echo "Glaven grad na $value e: $drzavi[$value] ";
				} else {
					echo "ne postoi";
				}
			} else {
				$drzava = array_search($value, $drzavi);
					if($drzava != false) {
						echo "$value e glaven grad na $drzava";
					} else {
						echo "Ne postojat podatoci";
					}
			}
			
			
			
		}
		
		glavenGrad("Rome", 2, $EU);
			
?>
