<?php
	function broevi ($prv, $vtor) {
if ($prv%5 == 0 && $prv%11 == 0) {
		echo "$prv e deliv so 5 i 11";
	} else {
		echo "Prviot broj ne e deliv so 5 i 11";
	}
	echo "<br>";
	if ($vtor%5 == 0 && $vtor%11 == 0) {
		echo "$vtor e deliv so 5 i 11";
	} else {
		echo "Vtoriot broj ne e deliv so 5 i 11";
		}
	}
broevi (55,110);
?>