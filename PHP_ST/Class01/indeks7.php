<!DOCTYPE html>
<html>
<head>
	<title>Controls.php</title>
	</head>
<body>
	<p>
	<?php $role = "professor"; ?>
	<?php if ($role =="admin" || $role == "professor") { ?>

	}
	<ul>
		<li>Students
		<ul>
			<li>Students</li>
			<li>Grades</li>
		</ul>
		</li>
		<li>School schedule</li>
	</ul>
	
<?php } else if ($role == "student") { ?>
		<ul>
			<li>School schedule</li>
			<li>Grades</li>
		</ul>
		

		<?php } else { ?>
		
		<ul>
			<li>School schedule</li>
		</ul>

			<?php } ?>
 			
	</p>
</body>
</html>