<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

		date_default_timezone_set('Europe/Skopje');
		echo date ('Y-m-d H:i:s');

		if (date('H') >= 7 && date('H') < 11) {
			echo "<h3>Good morning</h3>";
		} else if (date('H') >11 && date('H') < 17) {
			echo "<h3>Good afternoon</h3>";
		} else {
			echo "<h3>Good evening</h3>";
		}
	?>
	<p></p>
	<?php 
	 $role = "student";
		if ($role == "admin" || $role == "profesor") {
		echo "<ul>
			<li>Students
				<ul>
					<li>Grades</li>
				</ul>
			</li>
			<li>School Schedule</li>
		</ul>";
	}
	else if ($role == "student") { 
		echo "<ul>
			<li>Grades</li>
			<li>School Schedule</li>
		</ul>";
	}
	else { 
		echo "<ul>
			<li>School Schedule</li>
		</ul>";
	}
	 ?>

	 <?php 
	 $role = "s";
		switch ($role) {
			case 'admin' : 
			case 'profesor':
				echo "<ul>
						<li>Students
							<ul>
								<li>Grades</li>
							</ul>
						</li>
						<li>School Schedule</li>
					</ul>";
			break;
	
			case 'student' : 
				echo "<ul>
						<li>Grades</li>
					 	<li>School Schedule</li>
					</ul>";
			break;
			default:
				echo "<ul>
						<li>School Schedule</li>
					</ul>";
			//break;
	}
	 ?>
</body>
</html>