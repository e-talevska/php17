<?php

session_start();
setcookie("username", NULL);
session_destroy(); //se sto e staveno vnatre se brisi
//unset ($_SESSION['username']);
header("Location: login.php");

