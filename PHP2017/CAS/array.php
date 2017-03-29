<?php 
		$niza = array();
		$godini = [23, 34, 24, 19, 33];
		var_dump($godini);
		echo "<pre>";
		print_r($godini);
		echo "</pre>";

		echo $godini[1]. "<br>";
		for($i=0; $i < count($godini); $i++) {

				echo $godini[$i]. "<br>";


		}
		$godini[6] = 20;
		$godini[2] = 100;
		echo "<br>";
		print_r($godini);
		array_push($godini, 30, 12, 34);

		$zbir = 0;
		
		for($i=0; $i < count($godini); $i++){

			$zbir += $godini [$i];
			$delitel = count($godini);
			

		}
 		$prosek = $zbir / $delitel;
 		echo $prosek. "<br>";



 			$info = [
 				"name" =>	"Kire", 
 				    	"lastName"  =>	"Kostov",
 					       "position"  => "Electrical engineer"];
 			echo $info["name"];
 			echo "<br>";

 			$info["age"]= 50;
 			$info["name"]="Kjire";

 				foreach ($info as  $value) {
 					echo $value. "<br>";
 					# code...
 				}

 					$people = [
 								[
 								"name" => "Jose",
 								"lastName"=> "Mourinho",
 								"age"=>"54"
								],
								["name" => "alex ",
 								"lastName"=> "fergusono",
 								"age"=>"76"],
 								["name" => "louis",
 								"lastName"=> "can gallo",
 								"age"=>"64"]
 								];
 							for($i=0; $i<count($people); $i++){

 									var_dump($people[$i]);

 							}


 								for($i=0; $i<count($people); $i++){
 									echo "People ".($i+1).": ";
 									foreach($people[$i] as $key => $value){
 											echo "$key: $value <br>";
 									}
 									echo "<br>";

 								}





 		foreach ($people as $i => $person) {
 			echo "People ".($i+1).": ";

 		foreach ($people as $key => $value){


 		}
 									# code...
 	}		

 					
 ?>