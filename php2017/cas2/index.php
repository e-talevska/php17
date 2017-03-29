<!DOCTYPE html>
<html>
<head>
	<title>If statement</title>
</head>
<body>
<?php
	date_default_timezone_set("Europe/Skopje");
	$date = date('Y-M-D H:i:s');
	echo $date;
	
	echo "<br>";

	if(date('H') >= 17){
		echo "<h3>Good Evening</h3>";
	}
	else if(date('H') >= 7 && date('H') <= 10){
			echo "<h3>Good Morning</h3>";
	}
	else{
		echo "<h3>Good Day</h3";
	}

?>

	<p></p>

	<?php
	/**********************************************************
	//// Select your role: Admin, Professor, Student, Receptionist ////
	/**********************************************************/
	$role = "admin";
	echo "<h3>$role</h3>";
	 if($role == "admin" || $role == "professor") { ?>
	<ul>
		<li>Students
			<ul>
			<li> Grades </li>
			</ul>
		</li>
		<li>School Chedule</li>
	</ul>
<?php } 
	else if($role == "student") { ?>
	<ul>
		<li>Grades</li>
		<li>School Chedule</li>
	</ul>
<?php } 
	else if($role == "receptionist") { ?>
		<ul>
			<li>School Chedule</li>
		</ul>
<?php } ?>

<?php 

	switch($role){
		case 'student':
			echo "
				<ul>
				<li>Grades</li>
				<li>School Chedule</li>
				</ul>";
		break;
		case 'admin':
		case 'professor':
			echo "
				<ul>
				<li>Students
					<ul>
					<li> Grades </li>
					</ul>
				</li>
				<li>School Chedule</li>
			</ul>
			";
		break;
		default:
			echo"	
			<ul>
				<li>School Chedule</li>
			</ul>";
	}

 ?>
</body>
</html>
