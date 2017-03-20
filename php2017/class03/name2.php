<?php 
function zadaca($name, $lastName, $flag  = 0) {
echo "<p>";
if ($flag == 0) {
   	  
 echo  $name . " " . $lastName;         
} else {

	echo  $lastName . " " . $name;	}


echo "</p>";
}


zadaca ('1', '0');
?>