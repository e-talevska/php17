<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p></p>
<?php $role ="Students" ?>
<?php if($role == "Receptionist" || $role == "Proffesor") { ?> 
 <ul>
 	<li>Students 
 			<ul>
 				<li> Grades </li>
 				<li> School Schedule</li>
 			</ul>

 	</li>
 	<li>Proffesor </li>
 		<ul>
 				<li>Students</li>
 				<ul>
 					<li>Grades</li>
 				</ul>
 				<li>School Schedule</li>
 		</ul>
 	<li>Receptionist 
 		<ul>
 				<li>School Schedule</li>
 		</ul></li>
 </ul>
 <?php } else if ($role == "Students") { ?>
 		 			<ul>
 				<li> Grades </li>
 				<li> School Schedule</li>
 			</ul>



 <?php  	} ?>
 <?php 
 	switch($role) {
 			case 'Students':	
 				echo "<ul>
 				<li> Grades </li>
 				<li> School Schedule</li>
 			</ul>
 ";
 				break;
 				case 454:	
 				echo "brojce";
 				case 'Receptionist':
 				 	echo "<ul>
 				<li>School Schedule</li>
 		</ul></li>
 </ul>";
 				 	break; //optional
 		}
 		?>
</body>
</html>