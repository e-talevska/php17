<?php
	$permission = "student";

	switch($permission){
		case "student":
		$name = "Jonny";
		break;

		case "admin":
		case "professor":
		$name = "Jambita";
		break;

		default:
		$name = "User";
		break;
	}
?>

<?php if($permission == "student") { ?>
<ul>
	<li>Grades</li>
	<li>School Schedule 1</li>
</ul>
<?php } else if($permission == "admin" || $permission == "professor") { ?>
<ul>
	<li>Grades</li>
	<li>School Schedule 2</li>
</ul>
<?php } else { ?>
<p>kid youre fucked up</p>
<?php } ?>