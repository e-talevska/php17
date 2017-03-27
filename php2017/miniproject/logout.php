<?php
session_start();
setcookie("username", NULL) ;
session_destroy();
//unset($_SESSION['username']);
header("Location: login.php");
