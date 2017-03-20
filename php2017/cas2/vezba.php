<!DOCTYPE html>
<html>
<head>
	<title>Vezba</title>
</head>
<body> 
<?php $dozvola = 'admin';?>
<!-- <?php if($dozvola == 'admin' || $dozvola == 'profesor') {?>
	<ul>
		<li>Students
			<ul>
			<li>Grades</li>
			</ul>
		</li>
		<li>School Schedule</li>
	</ul>
<?php } else if($dozvola == 'student') { ?>
	<ul>
		<li>Grades</li>
		<li>School Schedule</li>
	</ul>
<?php } else /*($dozvola == 'receptioniost')*/ { ?>
	<ul>
		<li>School Schedule</li>
	</ul>
<?php } ?> -->
<?php switch($dozvola){ case("admin"): case("profesor"): ?>
	<ul>
		<li>Students
			<ul>
			<li>Grades</li>
			</ul>
		</li>
		<li>School Schedule</li>
	</ul>
<?php break; case("student"): ?>
	<ul>
		<li>Grades</li>
		<li>School Schedule</li>
	</ul>
<?php break; case("receptionist"):?>
	<ul>
		<li>School Schedule</li>
	</ul>
<?php break; }?>

</body>
</html>