
<?php
	$steps=1500;
	$meeters=$steps*0.3048; //presmetka zacuvana vo promenliva
	echo "<p style=color:red;margin:0px;>" . $steps . " stapki e ednakvo na " . $meeters . " metri" . "</p>"; 

	echo "<br>";

	echo "<p style=color:blue;margin:0px;>" . $meeters . " metri e ednakvo na " . $meeters/0.3048 . " stapki" . "</p>"; // direktno presmetuvanje 

	echo "<br>";

	$a=5;
	$b=10;
	$P=$a*$b;
	echo "<p style=color:green;margin:0px;>" . "presmetanite strani iznesuvaat " . $P . "</p>"; //presmetuvanje strani na pravoagolnik

	echo "<br>";
?>
