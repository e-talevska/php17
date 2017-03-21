<?php
function check($var){
		//var_dump($_POST);
		require_once 'calculate.php';
			if (isset($_POST['kilometri']) && isset($_POST['potrosuvacka']) && isset($_POST['cena'])){	
				if(is_numeric($_POST['kilometri'])){
					if(is_numeric($_POST['potrosuvacka'])){
						if(is_numeric($_POST['cena'])){
							echo "Cenata na trosocite za gorivo se " . price($_POST['kilometri'], $_POST['potrosuvacka'], $_POST['cena']) . "denari.";
						}else echo "Vnesovte pogresna vrednost";
					}else echo "Vnesovte pogresna vrednost";
				} else echo "Vnesovte pogresna vrednost";
			}
		}
?>