<?php 
include_once 'header.php';

if(isset($_GET['page'])) {
	if($_GET['page'] == 'about') {
		include_once 'pages/about.php';
	} else if($_GET['page'] == 'contact') {
		include_once 'pages/contact.php';
	}  else if($_GET['page'] == 'services') {
		include_once 'pages/services.php';
	}
	else {
		echo "Stranicata ne e najdena";
	}
	
} else {
	echo "Kazi koja stranica";
}

include_once 'footer.php';