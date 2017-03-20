<!DOCTYPE html>
<html>
<head>
	<title>Controls.php</title>
	</head>
<body>
	<?php
	date_default_timezone_set("Europe/Skopje");
		echo date("Y-m-d H:i:s");
		if (date('H') >= 20) {
			echo "<h3>Dobro vecer</h3>";
					} elseif ((date('H') >= 7) && (date("H") < 11)) {
								echo "<h3>Dobro /utro </h3>";
					} else {
								echo "<h3>Dobar Den </h3>";
					}

	?>

</body>
</html>