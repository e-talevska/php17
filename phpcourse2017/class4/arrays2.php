<?php
	$niza1 = [2,4,6];
	$niza2 = ["sedc", "php", "2017"];
	var_dump($niza1 + $niza2);
	var_dump(array_merge($niza1, $niza2));

	echo "<br>";

	$nizaBroevi = array (2,5,6,10,41,24,32,9,16,19);
	$nizaBroevi2 = array ();
	for ($i = 0; $i < count($nizaBroevi); $i++) {
		if ($nizaBroevi[$i] > 20) {
		$nizaBroevi2 = $nizaBroevi[$i];

		echo $nizaBroevi2;
		
		}
	}
?>