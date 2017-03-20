<!DOCTYPE html>
<html>
<head>
	<title>Controls.php</title>
	</head>
<body>
<?php $role = "student"; ?>
	
	<?php
		switch($role) {
			case 'student':
				echo "<ul>
						<li>School schedule</li>
						<li>Grades</li>
							</ul>";
			break;
			case 'admin':
			case 'professor':
			echo "<ul>
		<li>Students
		<ul>
			<li>Students</li>
			<li>Grades</li>
		</ul>
		</li>
		<li>School schedule</li>
		</ul>";
		break;
		default:
		echo "<ul>
			<li>School schedule</li>
		</ul>;
}
?>

</body>
</html>