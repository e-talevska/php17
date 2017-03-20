<!DOCTYPE html>
<html>
<head>
	<title>vezba2</title>
</head>
<body>
<p>
	<?php
		date_default_timezone_set('europe/skopje');

		echo date('D-m-Y H:i:s');
		echo "<br>";
		if (date('H')>=20) {
			echo "<h3 style=color:red;>Dobro vecer</h3>";
		}else if((date('H')>=7) && (date('H')<11)){
			echo "<h3 style=color:blue;>Dobro utro</h3>"; 
		}
		else{
			echo "<h3 style=color:green;>Dobar den</h3>";
		}

		echo "<br>";
	?>
</p>
<p>
<?php
    $stu=1;
    $prof=0;
    $rec=0;

	if($stu == 1){
		echo "<ul><li>grades</li><li>school schedule</li></ul>";
	}
	else if($prof == 1){
		echo"<ul>
		<li>students
		<ul>
			<li>Grades</li>
		</ul>
		</li>
		<li>scool schedule</li>
	</ul>";
	}else if($rec == 1){
		echo "<ul><li>school schedule</li></ul>";
	}
?>
</p>
<p>
	<?php
	$role="admin";
	switch ($role) {
		case 'prof':
		case 'admin':
			echo "logiran e admin ili profesor";
			break;
		case "student":
			echo "logiran e student";
			break;
		default:
			echo "logiran ste kako gostin";
			break;
	}
	?>
</p>
</body>
</html>