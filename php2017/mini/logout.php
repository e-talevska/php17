<?php
session_start();
setcookie('username',NULL);
session_destroy();
header("Location: login.php");