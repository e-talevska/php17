<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php
			date_default_timezone_set('CET');
			echo date('Y-m-d H:i:s');
			echo "<br>";
			if (date('H') >= 20) {
				echo "<h3>Dobro vecer</h3)";
			} else if ((date('H') >=7) && (date('H')<11)) {
				echo "<h3>Dobro utro</h3)";
			} else {
				echo "<h3>Dobar den</h3>";
			}
		?>



		<p>
			<?php $role = "student"; ?>
			<?php if ($role == "admin" || $role == "professor") { ?>	
				<ul>
					<li>Students</li>
				<ul>
						<li>Grades</li>
					</ul>
				<li>School Schedule</li>
				</ul>
			<?php } else if ($role == "student") { ?>
				<li>Grades</li>
				<li>School Schedule</li>

				<?php }
			?> 
		</p>

		<?php
			switch ($role) {
					case 'student':
						echo "<ul>
								<li>Grades</li>
							</ul>";
						break;

					case 434:
						echo "brojce";
						break;

					case 'professor':
						echo "<ul>
								<li>Grades</li>
								<li>Grades</li>
								<li>Grades</li>
							</ul>";
						break;
					default: echo "<ul>
								<li>Schedule</li>							
							</ul>";
						break; //optional

					
			}
		?>
</body>
</html>