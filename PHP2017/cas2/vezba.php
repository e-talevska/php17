<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>
</p>



 <?php $role = "student"; ?>
<?php if($role ) { ?>

<ul>

	<li>Students 
			<ul>
				<li>Grades</li>
			</ul>


	 </li>

	<li>School Schedule</li>

</ul>
<?php } else if($role == "student" ) { ?>
			<ul>
				<li>Grades</li>
				<li>School Schedule </li>
			</ul>
			<?php } else { ?>


	 	</li>

	<li>School Schedule</li> #




	<?php
	switch($role) {
		case 'student':
			echo "<ul>
					<li>Grades</li>
					<li>School Grades</li>
				</ul>";
			break;
		case 434:
			echo "brojce";
			break;
		case 'admin';
		case 'profesor'
				echo "  <ul>	
				<li>Students</li>
				<ul>
					<li>Grades</li>
				</ul>
				<li>School Grades</li>
			</ul> ";
			break;




				}



	 ?>







</body>
</html>