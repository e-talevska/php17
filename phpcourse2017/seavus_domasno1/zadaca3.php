<?php 
    	function pogolem ($prv, $vtor, $tret) {
    		if ($prv > $vtor && $prv > $tret){
    			echo $prv;
    		} else if ($vtor > $prv && $vtor > $tret) {
    			echo $vtor;
    		} else {
    			echo $tret;
    		}
    	}

    pogolem (2,4,10);

    ?>